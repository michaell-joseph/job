<?php
$con = $_POST["co_name"];
$co_mail = $_POST["co_mail"];
$co_ph = $_POST["co_phone"];
$co_add = $_POST["co_address"];
$co_pass = $_POST["co_password"];
$co_cpass = $_POST["co_c_password"];

$connection = mysqli_connect('localhost','root','','job_seeker');
$sql = "INSERT INTO company(co_name, co_mail, co_phone,co_address, co_password, co_c_password) VALUES ('$con' , '$co_mail', '$co_ph','$co_add' ,'$co_pass' ,'$co_cpass')";
mysqli_query($connection,$sql);
echo "<h1>A New Company Has Been Added Successfully</h1>";
 ?>
