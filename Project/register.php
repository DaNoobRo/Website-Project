
<?php include('server.php') /*Trebuie inclus pt conexiune */ ?>

<!DOCTYPE html>
<html>

<head>
  <title>RegisterPage</title>
  <link rel="stylesheet" type="text/css" href="styleLR.css">
  <link rel="stylesheet" type="text/css" href="errors.css">
</head>

<body>
  <!--Caputul-->
  <div class="header">
  	<h2>Register</h2>
  </div>
<!--The form -->
  <form method="post" action="register.php">

  	<?php include('errors.php'); ?>

    <!--USERNAME-->
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
    <!--EMAIL-->
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <!--password_1-->
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
    <!--password_2-->
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

    <!--Aci este butonul care are rol de chech if suntem la Register in server-->
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
    <!--Daca e deja membru trimite prin link la login page -->
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

  </form>

</body>
</html>
