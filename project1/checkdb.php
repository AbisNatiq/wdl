<?php
$host = 'localhost';
$user = 'root';
$psw = '';
$db = 'dbms';

$conn = new mysqli($host,$user,$psw,$db);

if($conn->connect_error){
    die("can't connect to database".$conn->connect_error);
}
?>