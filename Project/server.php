
<?php
//"Sessions or session handling is
// a way to make the data available
//across various pages of a web application"

session_start();

// variabilele pe care le vom folosi
$username = "";
$email    = "";
$errors = array();

// le connection
$db = mysqli_connect('localhost', 'root', '', 'loginpage');

// REGISTER USER
// isset verifica daca exista si are atribuire o variabila
// aici vede daca reg_user din form ii folosit

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  // mysqli_real_escape_string elimina special char

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // CORRECT YES OT NO ?
  // by adding (array_push()) corresponding error unto $errors array
  // pe scurt : adauga la array de strings cu avertismente

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	   array_push($errors, "The two passwords do not match");
  }

  //mysqli_query(DATABASE,QUERY)
  //sa nu existe deja

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    //encrypt the password before saving in the database
    //pt niste securitate desi mno
    //dai un forward dupa logout si tot acolo esti...
    // Note : check at a later date how to solve

  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";

    // check :
    //https://oxylabs.io/blog/http-headers-explained
    //this sends u to index.php
  	header('location: index.php');
  }
} //END REGISTER IF

// LOGIN USER
//if login_user is set 
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  //if everything works dandy
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}// END LOGIN IF

//end php
?>
