<?php
if(isset($_POST["id"])){
$cid = $_POST["id"];
$cn = $_POST["f_name"];
$cp = $_POST["phone"];
$ca = $_POST["address"];
$ce = $_POST["email"];
$conn = mysqli_connect('localhost', 'root', '', 'job_seeker');
$q = "UPDATE job_seeker SET f_name = '$cn', phone = '$cp', address = '$ca', email = '$ce' WHERE id = '$cid'";
mysqli_query($conn, $q);
header ("location: Customers.php");
}
$cid = $_GET["id"];
$conn = mysqli_connect('localhost','root','','job_seeker');
$q = "SELECT * FROM job_seeker WHERE id ='$cid'";
$cust_set = mysqli_query($conn,$q);
$customer = mysqli_fetch_assoc($cust_set);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Customer</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <form action="update_customer.php" method="post">

      <input type="hidden" name="id" id="id" value="<?php echo $customer ["id"]; ?>" >

      <label for="c_name">Customer Name</label>
      <input type="text" name="f_name" id="f_name" value="<?php echo $customer ["f_name"]; ?>">

      <label for="phone">Customer Phone</label>
      <input type="text" name="phone" id="phone" value="<?php echo $customer ["phone"]; ?>">

      <label for="address">Customer Address</label>
      <input type="text" name="address" id="address" value="<?php echo $customer ["address"]; ?>">

      <label for="email">Customer Email</label>
      <input type="text" name="email" id="email" value="<?php echo $customer ["email"]; ?>">
      <div class="button-group">
        <button type="submit">Save</button>
        <button type="button">Back</button>
      </div>
    </form>
  </body>
</html>
