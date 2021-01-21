<!DOCTYPE HTML>
<html>
    <head>
            <title>MyProject</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="css/index.css"/>
            <link rel="stylesheet" type="text/css" href="css/slide.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="js/main.js"></script>
            
    </head>
    <body>
        <center>
    
        <h1>Sea Island Resort</h1>
        <img src="img/grass.webp" width="1900" height="80">
        </center>
       <div class="nav">
        <nav>
        <ul>
                <li><a>Sea Island Resort</a></li>
                <?php session_start();
                if (isset($_SESSION['username'])) {
                ?>
                <li style="float:right"><a class="active" href="adminlogout.php"><i class="fa fa-fw fa-user"></i>Logout</a></li>
				<li><a class="active" href="adminbooking.php"><i class="fa fa-fw fa-user"></i>Bookings</a></li>
				<li><a class="active" href="totalusers.php"><i class="fa fa-fw fa-user"></i>Users</a></li>
				
                <?php

                } else {
                ?>
               <li style="float:right"><a class="active" href="adminlogin.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <?php
                } ?>
                
        </ul> 
        </nav>
        </div>
		<?php 
			include("checkdb.php");
			$sql1="select * from users";
			$val=mysqli_query($conn,$sql1);?>
			<style>
table { 
  display: table;
  border-collapse: separate;
  border-spacing: 2px;
  border-color: gray;
  width: 100%;
}
</style>
	<table >
	<tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
	  <th>Username</th>
	  
    </tr><?php
			while($row=mysqli_fetch_assoc($val)){
				?>
				
				
		<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['fname']; ?> </td>
		<td><?php echo $row['lname']; ?> </td>
		<td><?php echo $row['email']; ?> </td>
		<td><?php echo $row['uname']; ?> </td>
		</tr>
		<table>
			<?php
			}
		?>
		
		<hr>
      <hr>
      <p style="font-size: 16px; padding-left: 39%;"><b> Buy Prime membership only in Rs 400/month </b><br><a href="subscribe.html"><img src="img/subscribe.png" width="400px" height="100px"></a></p>
    
      
      <center>
        <h8 style="color: red; font-size:20px;">Thank You , Visit again !!!</h8>
      <main>
        <h3><b>Contact Me!</b></h3>
        <adress >
            <div>Mumbai, Maharashtra</div>
            <div>Phone: <a href="tel:+919990982934">+91-9990982934</a></div>
            <div style="margin-bottom: 80px;">Email: <a href="mailto:Vipkhan920@gmail.com">Vipkhan920@gmail.com</a></div>
            
        </adress>
    </main>
  </center>
  <footer>
      &copy; 2019  SeaIsland Resort ,All Right Reserved .
</footer>
    </body>
</html>
