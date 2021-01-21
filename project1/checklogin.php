                <?php
               
                if($_POST['submitbtn'])
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    include("checkdb.php");

                    $sql=  "select * from users where uname='$username' and pass='$password' ";
                    $result=$conn->query($sql);
                    
                if($result->num_rows == 1)
                {
                    session_start();
                    $_SESSION['username']=$username;
                    header("Refresh:0, url=index.php");
                   
                }
                else
                {
                header("Refresh:0,url=error.php");
                }
                }
                ?>