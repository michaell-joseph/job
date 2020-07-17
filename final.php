<!DOCTYPE html>
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header">
		<a href="home.php" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>
		<ul id="menu">

			<li><a href="com_form.php" class="">Comp Register</a></li>
			<li class="last"><a href="form.php" class="">Sign Up</a></li>
			<li class="last"><a href="customers.php" class="">Admin</a></li>
      <li class="last"><a href="jobs.php" class="">jobs</a></li>

					</ul>

	  <div class="form-row">

	    <div class="col-md-4 mb-3">
				<form action="com_insert.php" method="post">
	      <label id="log">Mail</label>
	      <input type="text" name="co_name" id="co_name" class="form-control">
	    </div>
			<div>
				<label id="log" class="mika">Password</label>
				<input type="password" name="co_password" id="co_password" class="form-control">
				<a href="#" class="button">LOGIN</a>
			</div>
		</form>

		<div class="">
			  <img src="images/bigpicture.jpg" alt="" width="892px" height="303" />
		</div>
	</div>

	




</body>
</html>
