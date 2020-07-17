<?php
$conn = mysqli_connect('localhost', 'root', '', 'job_seeker');
$q = "SELECT * FROM job_seeker";
$cust_data = mysqli_query($conn,$q);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customers List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
                <a href="home.php" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
                <a href="home.php" class="btn btn-primary">Home </a>
                <a href="new_customer.php" class="btn btn-success">New Customer</a>
                <a href="search_by_name.php" class="btn btn-warning">Search By Name </a>
      </div>
      <div class="">
        <img src="images/bigpicture.jpg" alt="" width="892" height="303" />
      </div>

      <div class="row">
        <table class="table table-dark">
          <tr>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>
            <th>Customer Email</th>
            <th>Actions</th>
          </tr>

<?php while ($customer = mysqli_fetch_assoc($cust_data)) { ?>
  <tr>
    <td><?php echo $customer ["f_name"]; ?></td>
    <td><?php echo $customer["phone"];?></td>
    <td><?php echo $customer["address"]; ?></td>
    <td><?php echo $customer["email"]; ?></td>
    <td>
      <a href="update_customer.php?id=<?php echo $customer["id"]; ?>" class="btn btn-primary">Edit</a>
      <a href="delete_customer.php?id=<?php echo $customer["id"]; ?>" class="btn btn-danger">Delete</a>
    </td>

  </tr>
<?php } ?>

        </table>
      </div>
    </div>
  </body>
</html>
