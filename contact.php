<?php
session_start();
$id = $_SESSION['id'];
if (!isset($id)){
	echo "<script> window.location='login.php' </script>";
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Our Para</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
</head>

<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
			<div class="header-top-left">
				<ul>
                        <li><a href="index.php"><span class="glyphicon glyphicon-lock"> </span>Shop</a>
                        </li>
                        <li><a href="account.php"><span class="glyphicon glyphicon-user"> </span>Account</a>
                        </li>
                    
						<li><a href="logout.php"><span class="glyphicon glyphicon-user"> </span>Log out</a></li>
						</li>
					</ul>
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3> <span class="simpleCart_total"> 0 DT </span> (<span id="simpleCart_quantity"
									class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>

							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<h1><a href="index.php"><span>O</span> ur Para </a><img src="images/logo.png" width="60"
									height="50"></h1>
						</div>
					</div>
					<!--/.navbar-header-->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b
										class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Baby & Child</h6>
												<li><a href="products.php">Baby & Child skincare</a></li>
												<li><a href="products.php">Baby & Child health</a></li>
												<li><a href="products.php">Baby milks & formula</a></li>
												<li><a href="products.php">Bathing & changing</a></li>
												<li><a href="products.php">Feeding</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Hair care</h6>
												<li><a href="products.php">
														Shampoo & conditioners </a></li>
												<li><a href="products.php">
														Styling & treatments</a></li>
												<li><a href="products.php">Hair loss</a></li>
												<li><a href="products.php">Hair growth</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Facial skincare</h6>
												<li><a href="products.php">Anti-ageing</a></li>
												<li><a href="products.php"></a>Beauty tools</a></li>
												<li><a href="products.php">Cleansers & toners</a></li>
												<li><a href="products.php">Eye cream</a></li>
												<li><a href="products.php">Lip care</a></li>
												<li><a href="products.php">Masks</a></li>
												<li><a href="products.php">Moisturiser</a></li>
												<li><a href="products.php">Serums & oils</a></li>
												<li><a href="products.php">SPF protection</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

							<li><a href="blog.php">Blog </a></li>
							<li><a href="fashsale.php">Flash sale</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</div>
					<!--/.navbar-collapse-->
				</nav>
				<!--/.navbar-->
			</div>
		</div>
	</div>

	<!-- contact-page -->
	<div class="contact">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="index.php" title="Go to Home Page">Home</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						Contact
					</li>
				</ul>
				<ul class="previous">
					<li><a href="index.php">Back to Previous Page</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="contact-form">
				<div class="contact-info">
					<h3>CONTACT FORM</h3>
				</div>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
					enctype="application/x-www-form-urlencoded">
					<div class="contact-left">
						<input type="text" value="" name="prenom" placeholder="First Name" required>
						<input type="text" value="" name="nom" placeholder="Last Name" required>
						<input type="text" value="" name="email" placeholder="E-mail" required>
						<input type="text" value="" name="tel" placeholder="Phone Number" required>
						<input type="text" value="" name="sujet" placeholder="Subject" required>
					</div>
					<div class="contact-right">
						<textarea name="message" value="" placeholder="Message" required></textarea>
					</div>
					<div class="clearfix"></div>
					<input type="submit" value="SUBMIT">
				</form>
			</div>
			<div class="contact-info">
				<h2>FIND US HERE</h2>
			</div>
			<div class="contact-map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259"
					style="border:0"></iframe>
			</div>

		</div>
	</div>
	<div class="news-letter">
		<div class="container">
			<div class="join">
				<h6>JOIN OUR MAILING LIST</h6>
				<div class="sub-left-right">
					<form>
						<input type="text" value="Enter Your Email Here" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
						<input type="submit" value="SUBSCRIBE" />
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer">
			<div class="container">
				<div class="footer_top">
					<div class="span_of_4">
						<div class="col-md-3 span1_of_4">
							<h4>Shop</h4>
							<ul class="f_nav">
								<li><a href="#">Baby & child skincare</a></li>
								<li><a href="#">Bathing & changing </a></li>
								<li><a href="#">Shampoo & conditioners</a></li>
								<li><a href="#">Hair loss</a></li>
								<li><a href="#">Cleansers & toners</a></li>
								<li><a href="#">Masks</a></li>
								<li><a href="#">Serums & oils</a></li>
							</ul>
						</div>

						<div class="col-md-3 span1_of_4">
							<h4>account</h4>
							<ul class="f_nav">
								<li><a href="account.php">My account</a></li>
								<li><a href="checkout.php">my shopping bag</a></li>
							</ul>
						</div>

						<div class="col-md-3 span1_of_4">
							<h4>About us</h4>
							<ul class="f_nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="contact.php">contact us</a></li>

							</ul>
						</div>
						<div class="col-md-3 span1_of_4">
							<h4>Our Info</h4>
							<ul class="f_nav">
								<li><a>follow us :</a> <a class="twitter" href="#"></a><a class="facebook" href="#"></a>
								</li>
								<li><a>Phone number: 98 756 432 </a></li>
								<li><a>E-mail: ourpara@gmail.com</a></li>
								<li><a>Address: Tunis</a></li>

							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="copyright text-center">
					<p>All Rights Reserved | Asma KHOMSI & Areej SAYARI</a></p>
				</div>
			</div>
		</div>
</body>
<?php
include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');
if (
	!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
	&& !empty($_POST['tel']) && !empty($_POST['sujet']) && !empty($_POST['message'])
) {
	$nom = $idcom->quote($_POST['nom']);
	$prenom = $idcom->quote($_POST['prenom']);
	$tel = $idcom->quote($_POST['tel']);
	$sujet = $idcom->quote($_POST['sujet']);
	$mail = $idcom->quote($_POST['email']);
	$mesg = $idcom->quote($_POST['message']);
	$reqprep = $idcom->prepare("INSERT INTO message_contact (`nom`, `prenom`, `email`, `tel`, `sujet`,
	`message`) VALUES (:nom, :prenom, :mail,:tel,:sujet,:mesg)");
	$reqprep->bindParam(':nom', $nom, PDO::PARAM_STR);
	$reqprep->bindParam(':prenom', $prenom, PDO::PARAM_STR);
	$reqprep->bindParam(':mail', $mail, PDO::PARAM_STR);
	$reqprep->bindParam(':tel', $tel, PDO::PARAM_STR);
	$reqprep->bindParam(':sujet', $sujet, PDO::PARAM_STR);
	$reqprep->bindParam(':mesg', $mesg, PDO::PARAM_STR);
	$nb = $reqprep->execute();
	if (!$nb) {
		$mess_erreur = $idcom->errorInfo();
		echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
		echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
	} else {
		echo "<script> alert('Your message has been send successfully!');
                        window.location='contact.php';</script>";
		$reqprep->closeCursor();
		$idcom = null;
	}
}
?>

</html>