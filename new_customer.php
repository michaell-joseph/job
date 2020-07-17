<?php
if(isset($_POST["f_name"])){
$cn =  $_POST["f_name"];
$cp =  $_POST["phone"];
$ca =  $_POST["address"];
$ce = $_POST["email"];

$conn = mysqli_connect('localhost', 'root', '', 'job_seeker');

$sql = "INSERT INTO job_seeker (f_name, phone, address, email) VALUES ('$cn', '$cp', '$ca', '$ce')";

mysqli_query($conn, $sql);
header("location: customers.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Customer</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="new_customer.php" method="post">
      <label for="f_name">Customer Name</label>
      <input type="text" name="f_name" id="f_name">

      <label for="phone">Customer Phone</label>
      <input type="text" name="phone" id="phone">

      <label for="c_address">Customer Address</label>
      <input type="text" name="address" id="address">

      <label for="email">Customer Email</label>
      <input type="text" name="email" id="email">
      <div class="button-group">
        <button type="submit">Save</button>
      <a href="customers.php">  <button type="button">Back</button></a>
      </div>
    </form>
  </body>
</html>
