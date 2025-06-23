<?php
$servername="localhost";
$usrename="root";
$password="";
$dbname="shivani_care";

$conn=new mysqli($servername,$usrename,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully";
?>