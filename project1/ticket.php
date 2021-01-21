<!DOCTYPE HTML>
<html>
    <head>
            <title>MyProject</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="css/index.css"/>
            <link rel="stylesheet" type="text/css" href="css/ticket.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    
        
        <center>
        <h1>Sea Island Resort </h1>
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

              <?php
              include("header.php");
              ?>
        </ul> 
        </nav>
        </div>
        <br>
        <marquee> Hurry Up !!!!!!,,, don't miss out the opportunity to visit this Water Park / Adventre Park in Mumbai......</marquee>
        <br>
        
        <div align="center" style="width:870px;margin:0 auto;">
        <div class="card" >
        <h3> Book Your Tickets !</h3>
    
    <form method="GET" style="border:2px solid #ccc" action="ticketaction.php">
    <div class="drop1">
    <label for="select" class="label">Select the Park : </label>
    <select name="resort">
             <option value="Island Water Park">Island Water Park</option>
             <option value="Island Adventure Park">Island Adventure Park</option>
    </select>
    </div>
    <div class="drop4">
    <label for="select" class="label">Customer Type : </label>
    <select name="cust_type">
             <option value="Prime-Customer">1- Prime Customer  </option>
             <option value="Non-Prime">2- Non-Prime</option>
             <option value="Student">3- Student</option>
             <option value="Senior Citizen">4- Senior Citizen +60</option>
             <option value="Wednesday">5- Wednesday</option>
    </select>
    </div>

    <br>

    <div class="date1">
    <label for="date">Select Date : </label>
    <input type="date" name="date" required><br>
    </div>
    <br>
    <div class="drop2">
    <label for="adults" class="label">No of Adults : </label>
    <input class="adults" type="number" value="0" name="adults" min="1" max="100" required>
    </div>
    <br>
    <div class="drop3">
    <label for="childs">No of Childs : </label>
    <input class="childs" type="number" value="0" name="childs" min="0" max="100" required>
    </div>
    <input type="submit" value="Book" name="submit" id="submit">
</form>
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