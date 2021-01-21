<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section>

<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
      <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
         
        <div id="login">   
          <h1>Please Login your account ! </h1>
          
          <form action="checkloginadmin.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="text" name="username" id="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name="submitbtn" id="submitbtn" value="Login" class="button button-block"/>
          
          </form>

        </div>
        
      </div>
      
</div>
</section>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/script.js"></script>          
</html>