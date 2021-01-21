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
                <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                <li><a href="gallery.php"><i class="fa fa-fw fa-envelope"></i>Gallery</a></li>
                <li><a href="ticket.php"><i class="fa fa-fw fa-search"></i>T-Booking</a></li>
                <li><a href="about.php"><i class="fa fa-fw fa-user"></i>About</a></li>
                <?php session_start();

                if (isset($_SESSION['username'])) {
                ?>
                <li style="float:right"><a class="active" href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a></li>
				<li style="float:right;" ><a class="active" href="booking.php"><i class="fa fa-fw fa-user"></i>Your Bookings</a></
                <?php

                } else {
                ?>
               <li style="float:right"><a class="active" href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <?php
                } ?>
                
        </ul> 
        </nav>
        </div>
		
		<?php 
			include("checkdb.php");
			$un=$_SESSION['username'];
			$sql2="select id from users where uname='$un'";
			$ids=mysqli_query($conn,$sql2);
			$row=mysqli_fetch_assoc($ids);
			$cust_id=$row['id'];
			$sql1="select * from tickets where cust_id= '$cust_id'";
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
      <th>Ticket No.</th>
      <th>Resort</th>
      <th>Customer Type</th>
      <th>Date</th>
	  <th>Adults</th>
	  <th>Childs</th>
	  <th>Total</th>
    </tr><?php
			while($row=mysqli_fetch_assoc($val)){
				?>
				
				
		<tr>
		<td><?php echo $row['t_id']; ?> </td>
		<td><?php echo $row['resort']; ?> </td>
		<td><?php echo $row['cust_type']; ?> </td>
		<td><?php echo $row['date']; ?> </td>
		<td><?php echo $row['adults']; ?> </td>
		<td><?php echo $row['childs']; ?> </td>
		<td><?php echo $row['total']; ?> </td>
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
