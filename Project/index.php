<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>

<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" type="text/css" href="content.css">
	<link rel="stylesheet" type="text/css" href="NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="styleLinks.css">

</head>
<body>

<!--TOP NAVIGATION BAR-->
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="pageHow.html">History</a>
  <a href="pageTypes.html">Types</a>
  <a href="quiz.php">QUIZ</a>

  	<?php if (isset($_SESSION['success'])) : ?>
      <a href="login.php">
      	Logout : <?php echo $_SESSION['username']; ?>
      </a>
  	<?php endif ?>
<a  href="pageAdmin.php">Admin</a>
</div>

<!-- content -->
<div class="scrisu">
  <h3><strong>About this page</strong></h3>
  <p>
      This website is a blog with information about prosthetic hands
      that is meant to educate those who visit it.
      It is based on the research done for another project.
      This is a page with useful links.
  </p>
  <div class="linky">
    <a href="https://www.scheckandsiress.com/blog/how-do-prosthetic-hands-work/#:~:text=This%20functional%20type%20of%20prosthetic%20hand%20is%20called,the%20artificial%20hand%20to%20open%20or%20close%20it.">
      How do prosthetic hands work ?
    </a>
  <div>
  <div class="linky">
    <a href="https://www.frontiersin.org/articles/10.3389/frobt.2019.00147/full">
      Frontiers.Hands in the Real World
    </a>
  </div>
  <div class = "linky">
    <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4128433/#:~:text=One%20of%20the%20earliest%20records%20of%20a%20prosthetic,that%20enabled%20him%20to%20return%20successfully%20to%20battle.">
      The evolution of functional hand replacement
    </a>
  </div>
  <div class="linky">
    <a href="https://vlp.mpiwg-berlin.mpg.de/library/data/lit38416">
      VL library
    </a>
  </div>
  <div class="linky">
    <a href="https://www.youtube.com/watch?v=UOJ0lkr2SFc">
      YT : Wired -> Every prototype that lead to a realistic arm
    </a>
  </div>
  <div class="linky">
    <a href="https://www.youtube.com/watch?v=6RzSjhrwYXs">
      YT : Bionic Skin
    </a>
  </div>

</div>

</body>
</html>
