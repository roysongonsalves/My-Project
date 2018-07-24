  <?php include('server.php') ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Registration For Mileage Tracker</title>
      <link rel="stylesheet" href="style.css" type="text/css">
      <style>
      body {
        background-image: url("mileage.jpg");
      }
    </style>
    </head>
    <body>
      <div class="header">
        <h2>Register User</h2>
      </div>
      <form action="register.php" method="post">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
  	    <input type="text" name="username">
      </div>
      <div class="input-group">
  	    <label>Email</label>
  	    <input type="email" name="email">
  	  </div>
    	<div class="input-group">
  	    <label>Password</label>
  	    <input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    	  <label>Confirm password</label>
    	  <input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    	  <button type="submit" class="btn" name="reg_user">Register</button>
    	</div>
    	<p>
    		Already a member? <a href="login.php">Sign in</a>
    	</p>
      </form>
    </body>
  </html>
