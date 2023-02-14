<?php 
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$usertype = $_POST['usertype'];

$sql = "INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`, `cpassword`, `usertype`) 
VALUES ('0', '$firstname', '$lastname', '$email', '$password', '$cpassword', '$usertype')";

$rs = mysqli_query($conn,$sql);
header('location:loginform.html');

?>