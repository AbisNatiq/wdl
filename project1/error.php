<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Error!!</h1>
    <p>
    <h2 style="padding-left:15%;">User with that Email is doesn't exist</h2>
    </p>     
    <a href="login.php"><button class="button button-block"/>Back to Login</button></a>
</div>
</body>
</html>