<?php
    include("checkdb.php");
    if($_POST['sign_btn'])
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];


            $sql= "INSERT INTO users (fname,lname,email,uname,pass) values ('$fname','$lname','$email','$uname','$pass')";
            
            if($conn->query($sql)===TRUE)
            {
                echo"<h2> New Records are inserted successfully</h2>";
                header("Refresh:2, url=login.php");
            }
            else
            {
                echo $conn->error;
            }
        
        }

?>