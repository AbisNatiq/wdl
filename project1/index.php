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
				<li style="float:right;"><a href="adminlogin.php"><i class="fa fa-fw fa-user"></i>Admin Login</a></li>
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
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
        <div class="w3-content w3-display-container">
                    <img class="mySlides" src="img/1.jpg" style="width:100%">
                    <img class="mySlides" src="img/2.jpg" style="width:100%">
                    <img class="mySlides" src="img/3.jpg" style="width:100%">
                    <img class="mySlides" src="img/4.jpg" style="width:100%">
                    <img class="mySlides" src="img/7.jpg" style="width:100%">
        
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>

        <center>
        <h7>Welcome In Sea Island Resort</h7>
        </center>
        <img src="img/offer1.png" width="340px" height="130px" style="padding-left: 2%;">
        <p style="font-size: 25px; display: inline-block; padding-left:5%; padding-inline: 2%; "><b> Buy 1 Ticket & get 1 Free , Hurry UP !!!!!!</b></p>
        <hr>
        <center><p style="font-size: 30px;">*** Tickets prices for Prime & Non-Prime Customers ***</p></center>
        <table>
            <tr>
              <th>Sr No</th>
              <th>Customers</th>
              <th>Adult</th>
              <th>Child</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Prime Customers</td>
              <td>800/-</td>
              <td>500/-</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Non-Prime Customers</td>
              <td>1000/-</td>
              <td>700/-</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Students</td>
              <td>800/-</td>
              <td>500/-</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Seniors Citizens</td>
              <td>500/-</td>
              <td>---</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Every Wednesday(OFFER)</td>
              <td>800/-</td>
              <td>500/-</td>
            </tr>
          </table>
          
          
       
        
        <script>
                      var myIndex = 0;
                      carousel();
                      function carousel() {
                      var i;
                      var x = document.getElementsByClassName("mySlides");
                      for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";  
                      }
                      myIndex++;
                      if (myIndex > x.length) {myIndex = 1}    
                      x[myIndex-1].style.display = "block";  
                      setTimeout(carousel, 2000); // Change image every 2 seconds

                     }
          </script>


         <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="adventure.html">SeaIsland Adventure Park</a>
            <a href="water.html">SeaIsland Water Park</a>
            <a href="ticket1.html">Tickets</a>
            <a href="student.html">Students</a>
            <a href="costume.html">Costume Shops</a>
            <a href="canteen.html">Canteens</a>
            <a href="locker.html">Lockers</a>
            <a href="parking.html">Parking</a>
            <a href="selfie.html">Selfie Point</a>
            <a href="family.html">Rooms Facility</a> 
            <a href="">Transporation</a>
          </div>
          <script>
            
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
          </script>
        </div>
        <hr>
        <p>
        <div class="feature">
        <div class="mycontainer1">
                  <h4 class="strongcolor">Open every day, even in the monsoons</h4>
                  SeaIsland is open 365 days a year, for non-stop entertainment. Don't forget to check maintenance and opening times.<br>
                  <strong>Check Park and ride <a href="/park-timings/">timings and schedules</a>.</strong>
        </div>
        <div class="mycontainer2">
                  <h4 class="strongcolor ">Lush environment, near popular locales</h4>
                  SeaIsland is situated near Lonavala and Khandala, making it a perfect quick getaway from both Mumbai and Pune.<br>
                  <strong>Check the <a href="/directions/">directions</a>.</strong>
        </div>
        <div class="mycontainer3">
                  <h4 class="strongcolor">Indoor and Outdoor experiences</h4>
                  SeaIsland has several attractions for all ages and interests, whether you want to  soak up the rains or stay inside.<br>
                  <strong>Check out the <a href="/indoor-rides/">indoor rides</a> and <a href="/parks/">explore all Parks</a>.</strong>
      </div>
      </div>
      <br>
      </p>
      <hr>
      
      <h9 style="color:green;"> <b>Book online to get Easy Entry</b> </h9>    <h9 style="color:red;"><b>Pay the way you like</b></h9>
      <h10 style="padding-left: 15%"><b>Booking online is safe and secure, and helps you get quick entry to the Park</b></h10><h10 style="padding-left: 15%"><b>Choose any method to pay , It is Safe and secure..</b></h10>
      <div class="myclass">
        <p><j class="right"></j> Secure payment options</p>
        <p><j class="right"></j> Special online-only promotions</p>
        <p><j class="right"></j> Skip the ticket collection queue with Easy Entry</p>
        <p><j class="right"></j> Special rates for tickets and addons</p>
      </div>
      <img src="img/park.png" width="100%">
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