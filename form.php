<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register</title>
  <link rel ="stylesheet" href="bootstrap.css">
	<link rel ="stylesheet" href="styles.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="header">
  		<a href="home.php" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
  		<ul id="menu">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="login.php">Login</a></li>
  		</ul>
  		<img src="images/bigpicture.jpg" alt="" width="892" height="303" />
  	</div>
    <form action="insert.php" method="post">
  <div class="form-row">

    <div class="col-md-4 mb-3">
      <label>First name</label>
      <input type="text" name="f_name" id="f_name" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
      <label>Last name</label>
      <input type="text" name="l_name" id="l_name" class="form-control">
    </div>

    <div class="col-md-4 mb-3">
      <label >Username</label>
      <input type="text" name="username" id="username" class="form-control">
      </div>


      <div class="col-md-4 mb-3">
        <label>E-mail</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>

      <div class="col-md-4 mb-3">
        <label>Address</label>
        <input type="text" name="address" id="address" class="form-control">
      </div>

      <div>
        <label class="mika">Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <div>
        <label class="mika">Confirm Pass.</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
      </div>


  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Phone</label>
      <input type="number" name="phone" id="phone" class="form-control">
    </div>
    <div class="col-md-3 mb-3">
      <label>City</label>
      <select class="custom-select" name="city" id="city">
        <option></option>
        <option>Cairo</option>
        <option>Alexandria</option>
        <option>Giza</option>
        <option>Tanta</option>
      </select>
    </div>
  </div>

<div class="col-md-3 mb-3">
  <button class="btn btn-success" type="submit">Sign Up</button>
</div>


  <button class="social facebook">Log in with Facebook</button>
  <button class="social twitter">Log in with Twitter</button>
  <button class="social google">Log in with Google+</button>



  </div>
</form>
  </body>
</html>
