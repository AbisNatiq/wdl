                <?php
               
                if($_POST['submitbtn'])
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                 if($username=='admin' && $password=='admin')
                {
                    session_start();
                    $_SESSION['username']=$username;
                    header("Refresh:0, url=adminhome.php");
                   
                }
                else
                {
                header("Refresh:0,url=error.php");
                }
                }
                ?>