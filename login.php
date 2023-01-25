<?php
session_start();
$_
?>
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
	<!--webfont-->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script type="text/javascript">
		function preventBack() { window.history.forward(); }
		setTimeout("preventBack()", 0);
		window.onunload = function () { null };
	</script>
	
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

	</div>
	</div>


	</div>
	</div>
	<!-- content-section-starts -->
	<div class="content">
		<div class="container">
			<div class="login-page">
				<div class="account_grid">
					<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
						<h2>NEW CUSTOMERS</h2>
						<p>By creating an account with our store, you will be able to move through the checkout process
							faster, store multiple shipping addresses, view and track your orders in your account and
							more.</p>
						<a class="acount-btn" href="inscriptionClient.php">Create an Account</a><br>
						<img id="llo" src="images/logo.png" alt="">
					</div>
					<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
						<h3>REGISTERED CUSTOMERS</h3>
						<p>If you have an account with us, please log in.</p>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
							enctype="application/x-www-form-urlencoded">
							<div>
								<span>Login (Email Address)<label>*</label></span>
								<input type="text" name="mail">
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="password">
							</div>
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login">
						</form>
					</div>
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
		if (!empty($_POST['mail']) && !empty($_POST['password'])) {
			$mail = strtolower($_POST['mail']);
			$password = ($_POST['password']);
			include("connexion.php");
			$idcom = connexpdo('id20159585_ourpara', 'myparam');
			$reqprep = $idcom->prepare("SELECT iduser,login,pass FROM user WHERE  login= :email and pass= :pwd ");
			$reqprep->bindValue(':email', $mail, PDO::PARAM_STR);
			$reqprep->bindValue(':pwd', $password, PDO::PARAM_STR);
			$reqprep->execute();
			if (!($reqprep->execute())) {
				echo "Lecture impossible";
			} else {
				$nbart = $reqprep->rowCount();
				if ($nbart == 0) {
					echo "<script> alert('Verify your Login and password')</script>";
					echo "<script> window.location='login.php' </script>";
				} else {
					$row = $reqprep->fetch(PDO::FETCH_NUM);
					$_SESSION['id'] = $row[0];
					echo "<script> window.location='index.php' </script>";
				}
			}
			$reqprep->closeCursor();
			$idcom = null;
		}
		?>
</body>

</html>