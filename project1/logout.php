<?php
/* Log out process, unsets and destroys session variables */
		
session_start();
session_unset();
session_destroy(); 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1 >Thanks for stopping by</h1>
              
          <p style="padding-left:22%; font-size:25px; color:Red;"><b><?= 'You have been logged out!'; ?></b></p>
          
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
