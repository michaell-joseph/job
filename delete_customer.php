<?php
$cid = $_GET["id"];

$conn = mysqli_connect('localhost', 'root', '', 'job_seeker');

$q = "DELETE FROM job_seeker WHERE id = '$cid'";

mysqli_query($conn, $q);
header("Location:customers.php");
 ?>
