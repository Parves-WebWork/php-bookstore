<?php 

//hote
$host = "localhost";

//dbname

$dbname = "parveswe_bookstore";

//username 
$user = "parveswe_users";

//password
$pass = "2P?UPlTTQWl9";

$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// if($conn){

//     echo "Worked successfully";
// }else{
//     echo "Worked not successfully";
// }









?>