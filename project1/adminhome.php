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
