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
				<li style="float:right;" ><a class="active" href="booking.php"><i class="fa fa-fw fa-user"></i>Your Bookings</a></li>
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
if(isset($_GET['submit']))
{
        include("checkdb.php");
		
		$un=$_SESSION['username'];
         $sql2="select id from users where uname='$un'";
		 $ids=mysqli_query($conn,$sql2);
		$row=mysqli_fetch_assoc($ids); 
		 $cust_id=0+$row['id'];
        $resort=$_GET['resort'];
        $cust_type=$_GET['cust_type'];
        $date=$_GET['date'];
        $adults=$_GET['adults'];
        $childs=$_GET['childs'];
        //$cust_id=$_GET['cust_id'];
        $Aprimecust=800;
        $Cprimecust=500;
        $ANprimecust=1000;
        $CNprimecust=700;
        $Astudent=800;
        $Cstudent=500;
        $senior=500;
        $Awed=800;
        $Cwed=500;
        $price=0;
       

        if($cust_type=='Prime-Customer')
        {
            $price=$Aprimecust*$adults+$Cprimecust*$childs;
        }
       elseif ($cust_type== 'Non-Prime')
       {
        $price=$ANprimecust*$adults+$CNprimecust*$childs;
        
        }
       elseif ($cust_type== 'Student')
       {
        $price=$Astudent*$adults+$Cstudent*$childs;
       }
        elseif ($cust_type== 'Senior Citizen')
       {
        $price=$senior*$adults;
       }
      
       
       
        $sql= "INSERT INTO tickets (resort,cust_type,date,adults,childs,cust_id,total,uname) values ('$resort','$cust_type','$date','$adults','$childs','$cust_id','$price','$un')";
        
        if($conn->query($sql)===TRUE)
        {
            echo "";
        }
        else
        {
            echo $conn->error;
        }
        
       }
       
?>
<div class="card" >
<div align="center" style="width:870px;margin:0 auto;">
        <div class="card" >
        <h2> congratulation!!!</h2>
   <h4> Your tickets are booked....!!!!</h4>
     <h4>You Paid <?php echo $price; ?></h4>
</div>    
</div>

<center>

    <h3>Hurry UP !!!</h3>
    <p> <b>If you are in Mumbai and spending time with your friends or relatives is on your cards, then don't miss out the opportunity to visit this Water Park / Adventure Parkin Mumbai:</b></p>
</center>

<hr>
              <p style="font-size: 15px; padding-left: 39%;"><b> Buy Prime membership only in Rs 400/month </b><br><a href="subscribe.html"><img src="img/subscribe.png" width="400px" height="100px"></a></p>
              <center>
                <h8 style="color: red; font-size:20px;">We are Happy to Help You !!!</h8><br>
                <h8 style="color: red; font-size:20px;">Thank You , Visit again !!!</h8>
              <main>
                <h4><b>Contact Me!</b></h4>
                <adress>
                    <div>Mumbai, Maharashtra</div>
                    <div>Phone: <a href="tel:+919990982934">+91-9990982934</a></div>
                    <div style="margin-bottom: 80px;">Email: <a href="mailto:Vipkhan920@gmail.com">Vipkhan920@gmail.com</a></div>
                    
                </adress>
            </main>
          </center>
              <footer>
            &copy; 2019 Khan Shehzad Ali,All Right Reserved .
    
            </footer>
    </body>
</html>
