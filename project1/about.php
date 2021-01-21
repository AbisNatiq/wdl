<!DOCTYPE HTML>
<html>
    <head>
            <title>MyProject</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="css/index.css"/>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            h1{
                 margin: 0px auto;
                 text-align: none;
                 text-shadow: -1px -1px 0px rgba(255,255,255,0.3), 1px 1px 0px rgba(0,0,0,0.8);
                 color: #333;
                 opacity: 0.4;
                 font: 700 80px 'Bitter';
            }
        </style>
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

                <?php
                    include("header.php");
                ?>
        </ul> 
        </nav>
        </div>
        <center>
            <img src="img/island.jpg" width="600px" height="400px" style="border-radius: 20px;">
            <h3><u>Sea Island Resort</u></h3>
            <p style="color:maroon; "><b>Island resort is a themed entertainment destination featuring multiple themed experiences,<br> an on-premise hotel, unique characters, innovative and unique attractions, <br>thrilling rides and shows, meeting spaces, and major events - it's a place for all seasons, all interests, and all ages.</b> </p>
       <hr>

    <section>
    <h3>Meet our team members</h3>
    <table>
        <th>
        <div class="column">
            <div class="card">
                <img src="img/khan.png" width="10%" height="15%" style="border-radius: 20px;">
            <h3>Khan Shehzad Ali </h3>
            <p class="email">vipkhan902@gmail.com</p>
            </div>

        </div>
        </th>
        <th>
        <div class="column">
            <div class="card">
                <img src="img/khan.png" width="10%" height="15%" style="border-radius: 20px;">
            <h3>Khan Shehzad Ali </h3>
            <p class="email">vipkhan902@gmail.com</p>
            </div>

        </div>
        </th>
        <th>
        <div class="column">
            <div class="card">
                <img src="img/khan.png" width="10%" height="15%" style="border-radius: 20px;">
            <h3>Khan Shehzad Ali </h3>
            <p class="email">vipkhan902@gmail.com</p>
            </div>
        </div>
        </th>
    </table>
</section>
        
    <main>
        <h3>Contact Me!</h3>
        <adress>
            <div>Mumbai, Maharashtra</div>
            <div>Phone: <a href="tel:+919990982934">+91-9990982934</a></div>
            <div>Email: <a href="mailto:Vipkhan920@gmail.com">Vipkhan920@gmail.com</a></div>
        </adress>
    </main>
</center>

    <br>
    <br>
    <hr>
</body>
<footer>
        &copy; 2019 SeaIsland Resort ,All Right Reserved .
</footer>
</html>