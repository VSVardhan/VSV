<?php
include_once 'dbh.inc.php';
$first=mysqli_real_escape_string($conn,$_POST['firstname']);
$last=mysqli_real_escape_string($conn,$_POST['lastname']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$dd=mysqli_real_escape_string($conn,$_POST['dd']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$sql="insert into users (firstname,lastname,username,password,dd,contact,email) values ($first,$last,$username,$password,$dd,$contact,$email);";
mysqli_query($conn,$sql);
header("Location: ../login.php?signup=sucess");

?>