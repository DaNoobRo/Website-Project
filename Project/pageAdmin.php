<?php include('checkKey.php') ?>
<!DOCTYPE html>

<html>

<head>
  <title>AdminPage</title>
  <link rel="stylesheet" type="text/css" href="styleLR.css">
  <link rel="stylesheet" type="text/css" href="NavigationBar.css">

</head>

<body>


  <div class="topnav">
    <a  href="index.php">Home</a>
    <a href="pageHow.html">History</a>
    <a href="pageTypes.html">Types</a>
    <a href="quiz.php">QUIZ</a>

    	<?php if (isset($_SESSION['success'])) : ?>
        <a href="login.php">
        	Logout : <?php echo $_SESSION['username']; ?>
        </a>
    	<?php endif ?>
  <a  class="active" href="pageAdmin.php">Admin</a>
  </div>



  <div class="header">
  	<h2>Admin_key</h2>
  </div>

  <form method="post" action="pageAdmin.php">

    <!--Key-->
  	<div class="input-group">
  		<label>Key</label>
  		<input type="text" name="key" >
  	</div>


    <!--check-->
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin_check">Login</button>
  	</div>


  </form>

</body>

</html>
