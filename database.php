<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$connect=new mysqli('localhost','root','','form');
 
if($connect->connect_error)
{
die ("Connection failed:".$connect->connect_error);
echo 'Failed to connect';
}
echo "Connected successfully"; 
?>