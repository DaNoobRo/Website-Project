<?php

//not working properly
include 'quizclass.php';
$db = new Quiz();
$score = 0;
$quesions = $db->get_questions();

foreach($quesions as $ques) {
$options = $db->quiz_options($ques[0]);
  	foreach($options as $option) {
    if(isset($_POST[$option[1]] )) echo $_POST[$option[1]];
    }
}

/*foreach($_POST as $data)
{
  echo $data;

//	$answer = $db->answer($k);
	//if($answer[0][2] == $v) { // option is correct
	//	$score++;
	//}
}
echo $score

*/
?>
