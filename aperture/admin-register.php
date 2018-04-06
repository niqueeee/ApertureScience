</!DOCTYPE html>
<html>
<head>
	<title>APERTURE LAB | Admins</title>
	<link rel="icon" href="assets/new-img/admin-icon.ico">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/another-css.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
	
	<div class="col-lg-5 col-md-5 col-sm-3">
			<div id="admin-page">
				<div class="disable-select">
				<div class="cake">
					<img src="assets/new-img/admin-icon-white.png" class="img-circle" width="100">
						<h1>Welcome</h1>
					</div>
				<div class="cake-p">
					
						<h4>Hello and, again, welcome to the Aperture Science admin panel. This is where you manage the website itself and hence have the priviledge to change things regarding the said site. <br><br>In order to proceed, please log into your account. If no account has yet been made, please sign up and fill in the form. <br><br>Thank you for making Aperture Science better!</h4>
					
				</div>
			</div>
			</div>				
		<!---/panel -->
	</div><!--/ col-md-4 -->
	
	<div class="col-lg-6">
		
		<div id="sign-header">
		<div class="sign">
		<h1> <a class="in">Sign up</a>/<a class="up">Login</a></h1>
		</div>
	</div>

	<form method="POST">
		<fieldset>
			<label>First Name:</label>
			<input type="text" name="firstname">
		
			<label>Last Name:</label>
			<input type="text" name="lastname">
		
			<label>Birthday:</label>
			<input type="date" name="birthday">
		
			<label>E-mail:</label>
			<input type="email" name="email">
		
			<label>Password:</label>
			<input type="password" name="password">

			<input type="submit" value="Register" name="register">
		</fieldset>
	</form>
<!--LOGIN-->
	<form method="POST">
		<fieldset>
			<label>E-mail</label>
			<input type="email" name="email-log">
		
			<label>Password</label>
			<input type="password" name="passwordd">

			<input type="submit" value="Login" name="login">
		</fieldset>
	</form>
	</div>

<?php include ("connect.php");
		if (isset(($_POST["login"]))) {
			$email=$_POST['email-log'];
			$password= $_POST['passwordd'];



			$select= "SELECT * FROM admin_tbl WHERE email='$email' AND password='$password'";

			$query= mysqli_query($con, $select);
			$numrows= mysqli_num_rows($query);

			if ($numrows) {
			header("Location: admin-dashboard.php");
			exit;
			} else "Account not located. You may want to REGISTER.";


		}

		if (isset(($_POST["register"]))) {
			$user=$_POST['email'];
		
			
			$search="SELECT * from admin_tbl WHERE email='$user'";
			$q= mysqli_query($con, $search);
			$damnresults= mysqli_num_rows($q);
				

			if ($damnresults>0){
				echo "You might want to login.";
			} else {
				$pass=$_POST['password'];
				$fname=$_POST['firstname'];
				$lname=$_POST['lastname'];
				$birthday=$_POST['birthday'];
				$user=$_POST['email'];

				$sql="INSERT INTO admin_tbl(firstname, lastname, birthday, email, password) VALUES ('$fname', '$lname', '$birthday', '$user', '$pass')";

				$result= mysqli_query($con, $sql);

					if ($result) {
						echo "Succesfully Registered!";
					} else echo "Failed :c ";
			} 
		
	}
?>

<script type="text/javascript">
	

</script>

</body>
</html>