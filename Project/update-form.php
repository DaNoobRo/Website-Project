<?php

include('update-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>

</head>
<body>
<!--====form section start====-->

<div class="user-detail">

    <div class="form-title">
    <h2>Create Form</h2>
    </div>

    <p style="color:red">

<?php if(!empty($msg)){echo $msg; }?>
</p>
<form method="post" action="">
<label>UserName</label>
<input type="text" placeholder="Enter Username" name="username" required value="<?php echo isset($editData) ? $editData['username'] : '' ?>">

<label>Email Address</label>
<input type="email" placeholder="Enter Email Address" name="email_address" required value="<?php echo isset($editData) ? $editData['email'] : '' ?>">

<button type="submit" name="update">Submit</button>
</form>
</div>
</div>
<!--====form section start====-->
</body>
</html>
