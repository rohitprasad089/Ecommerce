<?php
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  

$dbname = 'bookspoint';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

?>
