<!DOCTYPE html>
<html>

<head>
	<title>OurPara</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/simpleCart.min.js"> </script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>

<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
			<div class="header-right">
					<div class="cart box_1">
							<p><a class="simpleCart_empty">Welcome To Our Website</a></p>
							<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<div class="logo">
							<h1><a><span>O</span> ur Para </a><img src="images/logo.png" width="60" height="50"></h1>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="registration-form">
		<div class="container">
			<br><br>
			<h2>Registration</h2>
			<div class="registration-grids">
				<div class="reg-form">
					<div class="reg">
						<p>Welcome, please enter the following details to continue.</p>
						<p>If you have previously registered with us, <a href="login.php">click here</a></p>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
							enctype="application/x-www-form-urlencoded">

							<ul>
								<li class="text-info">First Name: </li>
								<li><input type="text" value="" name="firstname"></li>
							</ul>
							<ul>
								<li class="text-info">Last Name: </li>
								<li><input type="text" value="" name="lastname"></li>
							</ul>
							<ul>
								<li class="text-info">Age: </li>
								<li><input type="text" value="" name="age"></li>
							</ul>
							<ul>
								<li class="text-info">Address: </li>
								<li><input type="text" value="" name="address"></li>
							</ul>
							<ul>
								<li class="text-info">Email: </li>
								<li><input type="text" value="" name="mail"></li>
							</ul>
							<ul>
								<li class="text-info">City: </li>
								<li><input type="text" value="" name="city"></li>
							</ul>
							<ul>
								<li class="text-info">Password: </li>
								<li><input type="password" value="" name="password"></li>
							</ul>
							<input type="submit" value="REGISTER NOW">
							<p class="click">By clicking this button, you are agree to my <a href="">Policy
									Terms and Conditions.</a></p>
						</form>
					</div>
				</div>
				<div class="reg-right">
					<h3>Completely Free Account</h3>
					<div class="strip"></div>
					<img id="lo" src="images/logo.png" alt="">
					<div class="strip"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>


	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>All Rights Reserved | Asma KHOMSI & Areej SAYARI</a></p>
			</div>
		</div>
	</div>
	<?php
	include("connexion.php");
	$idcom = connexpdo('id20159585_ourpara', 'myparam');

	if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mail'])) {
		$id = "\N";
		$firstname = strtolower($_POST['firstname']);
		$lastname = strtolower($_POST['lastname']);
		$age = $_POST['age'];
		$address = strtolower($_POST['address']);
		$mail = strtolower($_POST['mail']);
		$city = strtolower($_POST['city']);
		$password = $_POST['password'];
		$role = "client";

		$reqprep1 = $idcom->prepare("INSERT INTO user VALUES ( :id, :mail , :pass , :rol)");
		$reqprep1->bindParam(':id', $id, PDO::PARAM_INT);
		$reqprep1->bindParam(':mail', $mail, PDO::PARAM_STR);
		$reqprep1->bindParam(':pass', $password, PDO::PARAM_STR);
		$reqprep1->bindParam(':rol', $role, PDO::PARAM_STR);
		$ex = $reqprep1->execute();

		$id_client = $idcom->lastInsertId();

		$reqprep = $idcom->prepare("INSERT INTO client(id_client, nom,prenom,age,adresse,ville,mail)
	 VALUES( :id_client, :nom, :prenom, :age, :adresse, :ville, :mail)");
		$reqprep->bindParam(':id_client', $id_client, PDO::PARAM_INT);
		$reqprep->bindParam(':prenom', $firstname, PDO::PARAM_STR);
		$reqprep->bindParam(':nom', $lastname, PDO::PARAM_STR);
		$reqprep->bindParam(':age', $age, PDO::PARAM_INT);
		$reqprep->bindParam(':adresse', $address, PDO::PARAM_STR);
		$reqprep->bindParam(':ville', $city, PDO::PARAM_STR);
		$reqprep->bindParam(':mail', $mail, PDO::PARAM_STR);
		$nb = $reqprep->execute();

		if (!$nb && !$ex) {
			$mess_erreur = $idcom->errorInfo();
			echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
			echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
		} else {
			echo "<script> window.location='login.php' </script>";
			$reqprep->closeCursor();
			$idcom = null;
		}
	}
	?>
</body>
</html>