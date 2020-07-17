<?php
$fn = $_POST["f_name"];
$ln = $_POST["l_name"];
$un = $_POST["username"];
$pass = $_POST["password"];
$conp = $_POST["confirm_password"];
$ph = $_POST["phone"];
$mail = $_POST["email"];
$add = $_POST["address"];
$city = $_POST["city"];

$connection = mysqli_connect('localhost','root','','job_seeker');
$sql = "INSERT INTO job_seeker (f_name, l_name, username, password, confirm_password, phone, email, address, city) VALUES ('$fn' , '$ln', '$un','$pass' ,'$conp' ,'$ph', '$mail' ,'$add' ,'$city')";
mysqli_query($connection,$sql);
header("location: jobs.php");
 ?>
