        <div class="nav">
        <nav>
        <ul>
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