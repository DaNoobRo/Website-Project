
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="NavigationBar.css">
	<link rel="stylesheet" type="text/css" href="content.css">
	<link rel="stylesheet" type="text/css" href="input.css">
</head>

<body>

<!--TOP NAVIGATION BAR-->

<div class="topnav">
  <a  href="index.php">Home</a>
  <a  href="pageHow.html">History</a>
  <a  href="pageTypes.html">Types</a>
	<a class="active" href="quiz.php">QUIZ</a>
  	<?php if (isset($_SESSION['success'])) : ?>
      <a href="login.php">
      	Logout
      </a>
  	<?php endif ?>

</div>


<?php
	include 'quizclass.php';
	$db = new Quiz();
	$quesions = $db->get_questions();
?>

<div class="scrisu">
	<h1>Multiple Choice Questions Answers</h1>
	<p>Please fill the details and answers the all questions-</p>

  <form action="score.php" method="post">

		<?php
		foreach($quesions as $ques) {
		$options = $db->quiz_options($ques[0]);
		?>

		<h4><?php echo $ques[1]; ?></h4>
		<div class="input-group-text">
			<ol>
				<?php
				foreach($options as $option) {
 				echo "<li><input type='radio' name='".$option[1]."' value='".$option[0]."' required/> ".$option[2]."</li>";
				}
				?>
			</ol>
		</div>
	<?php }?>
	</div>

<div class="form-group">
	<input type="submit" value="Submit" name="submit" class="btn"/>
</div>

</form>

</div>

</body>

</html>
