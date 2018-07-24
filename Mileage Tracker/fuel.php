<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mileage Tracker Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
      background-image: url("mileage.jpg");
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".btn-show").ready(function(){
        $(".result").hide();
    });
    $(".btn-show").click(function(){
        $(".result").show();
    });
});
</script>
  </head>
  <body>
    <div class="header">
    	<h2>MILEAGE TRACKER.</h2>
    </div>
    <br><br><hr><br>
    <div class="btn-add" style="display: inline-flex; margin-left:450px;">
      <a href="refuel.php" ><input type='button' value='ADD FUEL' class="btn-add"></a>
      <a href="index.php" ><input type='button' value='Back To Home Page' class="btn-add" style="margin-left:180px;"></a>
    </div><br><br>
    <table width="100%" border="2" style="border-collapse:collapse;">
    <thead>
    <tr bgcolor='#CCCCCC'>
      <th><strong>S.No</strong></th>
      <th><strong>Registration Number</strong></th>
      <th><strong>Odometer</strong></th>
      <th><strong>Quantity</strong></th>
      <th><strong>Price</strong></th>
      <th><strong>Date & Time</strong></th>
      <th><strong>Edit</strong></th>
      <th><strong>Delete</strong></th>
    </tr>
    </thead>
    <tbody>
      <?php
      session_start();
      $db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');
      $vehicles = array();
      $dis_con = array();
      $user_id=$_SESSION['id'];
      $count=1;
      $results = mysqli_query($db, "SELECT * FROM vehicle WHERE user_id='$user_id'");
      while($r = mysqli_fetch_array($results)) {
        $key  = $r['id'];
        $value = $r['registrationnumber'];
        $vehicles[$key] = $value;
      }
      $result = mysqli_query($db, "SELECT refuel.*, vehicle.registrationnumber FROM refuel,vehicle WHERE refuel.vehicle_id=vehicle.id AND refuel.user_id='$user_id'");
      // if(mysqli_error($db)){
      //
      //   die(mysqli_error($db));
      // }
      while($res = mysqli_fetch_array($result)) { ?>

          <tr><td align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $res['registrationnumber']  ; ?></td>
          <td align="center"><?php echo $res['odometer']; ?></td>
          <td align="center"><?php echo $res['quantity']; ?></td>
          <td align="center"><?php echo $res['price']; ?></td>
          <td align="center"><?php $time = strtotime($res['created_at']); echo $format = date("d/m/y g:i A", $time); ?></td>
          <td align="center">
            <a href="fuel-edit.php?id=<?php echo $res["id"]; ?>">Edit</a>
          </td>
          <td align="center">
            <a href="fuel-delete.php?id=<?php echo $res["id"]; ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
          </td>
        </tr>
        <?php $count++;
        $veh_id = $res['vehicle_id'];
        $dis = $res['odometer'];
        $dis_con[] = $dis;
        $fuel_con += $res['quantity'];
        $fuel_cost += $res['price'];}
        $total_dis = end($dis_con) - reset($dis_con);
        $final_mil = $total_dis / $fuel_con; ?>
      </tbody>
    </table><br>

    <br><br><hr><br>
    <div style="margin-left: 330px;">
      <label style="font-weight: bold;">Select Vehicle Registration Number :</label>
      <select name="vehicle_id" style="width: 300px;"required>
        <option selected value="null">Please Select</option>
        <?php foreach ($vehicles as $key=>$value): ?>
        <option value="<?= $key; ?>"><?= $value; ?></option>
        <?php endforeach; ?>
      </select>
    </div><br>
    <div class="btn-add" style="display: inline-flex; margin-left:550px;">
      <input type='button' value='CALCULATE' class="btn-show">
    </div>
    <div class="result">
      <p>RESULT : <br>Disrance Covered - <?php echo $total_dis; ?>.<br>
                  Fuel Consumption - <?php echo $fuel_con; ?> LITERS.<br>
                  Total Fuel Cost - ₹ <?php echo $fuel_cost; ?>.<br>
                  Final Mileage - <?php echo $final_mil; ?> is the mileage tracker of Car no. <?php echo $veh_id; ?></p>
    </div>
  </body>
</html>
