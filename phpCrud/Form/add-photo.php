<?php
session_start();

// var_dump($_SESSION);
$db = mysqli_connect('localhost', 'root', 'acer1234', 'register');
$msg = "";

if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['file_name']['name'];

  	// image file directory
  	$target = getcwd()."/Form".basename($image);
$userid = $_SESSION['id'];
  	$sql = "INSERT INTO photo (user_id, file_name) VALUES ('$userid', '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM photo");

?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
   #content{
     width: 50%;
     margin: 20px auto;
     border: 1px solid #cbcbcb;
   }
   form{
     width: 50%;
     margin: 20px auto;
   }
   form div{
     margin-top: 5px;
   }
   #img_div{
     width: 80%;
     padding: 5px;
     margin: 15px auto;
     /*border: 1px solid #cbcbcb;*/
   }
   #img_div:after{
     content: "";
     display: block;
     clear: both;
   }
   img{
     float: left;
     margin: 5px;
     width: 300px;
     height: 140px;
   }
   button{
     margin-left: 100px;
   }
</style>
</head>
<body>
<div class="header">
	<h2>Add Photo Page</h2>
</div>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      echo "<img src='Form/" . $row['file_name'] . "' />";
      echo "</div>";
    }
  ?>
  <form method="POST" action="add-photo.php" enctype="multipart/form-data">
   <input type="hidden" name="size" value="1000000">
   <div>
     <input type="file" name="file_name">
   </div>
   <div>
     <button type="submit" name="upload"><input type='button' value='ADD PHOTO' class="btn-add"></button>
   </div>
  </form>
</div>
</body>
</html>
