<!DOCTYPE html>
<html>
<head>
	<title>Admins</title>
	<link rel="stylesheet" type="text/css" href="content.css">
	<link rel="stylesheet" type="text/css" href="NavigationBar.css">


</head>
<body>

<!--TOP NAVIGATION BAR-->

<div class="topnav">
  <a  href="index.php">Home</a>
  <a  href="pageHow.html">History</a>
  <a  href="pageTypes.html">Types</a>
	<a href="quiz.php">QUIZ</a>
  	<?php if (isset($_SESSION['success'])) : ?>
      <a href="login.php">
      	Logout
      </a>
  	<?php endif ?>

  <a class="active" href="adminInterface.php">Admin</a>
</div>

<div class = "scrisu">
  <iframe width=100% height="450px" src="ViewEverything.php" title="View"></iframe>
</div>

<div class = "scrisu">
  <iframe width=100% height="450px" src="create-form.php" title="Create Records"></iframe>
</div>
<div class = "scrisu">
  <iframe width=100% height="450px" src="user-tabel.php" title="Update/Delete Records"></iframe>
</div>

<div class = "scrisu">
  <iframe width=100% height="450px" src="question-tabel.php" title="View Questions Records"></iframe>
</div>


</body>

</html>
