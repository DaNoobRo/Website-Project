
<?php include('server.php') ?>
<!DOCTYPE html>

<html>

<head>
  <title>LoginPage</title>
  <link rel="stylesheet" type="text/css" href="styleLR.css">
    <link rel="stylesheet" type="text/css" href="errors.css">
</head>

<body>

  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">

  	<?php include('errors.php'); ?>

    <!--username-->
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>

    <!--password-->
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>

    <!--login_user-->
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>

    <!--send to register through link -->
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>

  </form>

</body>

</html>
