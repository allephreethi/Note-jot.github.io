<?php 
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
$firstname1 = $_POST['firstname1'];
$lastname1 = $_POST['lastname1'];
$email1 = $_POST['email1'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact` (`cid`, `firstname1`, `lastname1`, `email1`, `message`) 
VALUES ('0', '$firstname1', '$lastname1', '$email1', '$message')";

$rs = mysqli_query ($conn,$sql); 
header('location:project9594.html');
    
?>
