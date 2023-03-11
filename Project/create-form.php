
<?php

include('create-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Form</title>
  <link rel="stylesheet" type="text/css" href="styleLR.css">

</head>
<body>
<!--====form section start====-->

<div class="input-group">

    <div class="header">
    <h2>Create Form</h2>


    </div>

<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>

    <form method="post" action="">
          <label>UserName</label>
          <input type="text" placeholder="Enter UserName" name="username" required>
          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="email_address" required>
          <label>Password</label>
          <input type="pass" placeholder="Enter Password" name="pass" required>


          <button type="submit" class="btn" name="create">Submit</button>

    </form>
        </div>
</div>
<!--====form section start====-->


</body>
</html>
