<?php 
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
$lemail = $_POST['lemail'];
$lpassword = $_POST['lpassword'];

$sql ="SELECT * FROM`registration` WHERE `email`='$lemail' AND `password`='$lpassword'";
$rs = mysqli_query($conn,$sql);
$rows=mysqli_num_rows($rs);
if ($rows == 1){
    header('location:project4847.html');
}else{
    echo "Incorrect email or password";
}
?>