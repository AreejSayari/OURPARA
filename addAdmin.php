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
	<title>OurPara</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mystyle.css?v=<?php echo time(); ?>">
	<link href="css/mystyle.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free weblogins for Nokia, Samsung, LG, SonyErricsson, Motorola web login" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/simpleCart.min.js"> </script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>

<body>
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
						<a href="checkout.html">
							<p><a class="simpleCart_empty">ADMIN INTERFACE</a></p>
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
							<li><a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"
									aria-controls="myTabDrop1-contents" aria-expanded="false">ARTICLES <span
										class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1"
									id="myTabDrop1-contents">
									<li><a href="showArticles.php">SHOW ARTICLES</a></li>
									<li><a href="addArticle.php">ADD ARTICLE</a></li>
								</ul>
							</li>
							<li><a href="showMessages.php">MESSAGES</a></li>
							<li><a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"
									aria-controls="myTabDrop1-contents" aria-expanded="false">USERS <span
										class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1"
									id="myTabDrop1-contents">
									<li><a href="showClients.php">SHOW CLIENTS</a></li>
									<li><a href="showUser.php">SHOW USERS</a></li>
									<li><a href="addAdmin.php">ADD ADMIN</a></li>
								</ul>
							</li>
						</ul>
					</div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
        </div>
	<div class="registration-form">
		<div class="container">
			<div class="dreamcrub">
			</div>
			<h2>ADD ADMIN</h2>
			<div class="registration-grids">
				<div class="reg-form">
					<div class="reg">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
							enctype="application/x-www-form-urlencoded">
							<ul>
								<li class="text-info">Login: </li>
								<li><input type="text" value="" name="login"></li>
							</ul>
							<ul>
								<li class="text-info">Password: </li>
								<li><input type="password" value="" name="pass"></li>
							</ul>
							<input type="submit" value="ADD User">
						</form>
					</div>
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
	if (
		!empty($_POST['login']) && !empty($_POST['pass'])
	) {
		$login = $_POST['login'];
		$pass = $_POST['pass'];
        $role = 'admin';
		$reqprep = $idcom->prepare("INSERT INTO User (login,pass,role)
	 	VALUES (:login,:pass,:role)");
		$reqprep->bindParam(':login', $login, PDO::PARAM_STR);
		$reqprep->bindParam('pass', $pass, PDO::PARAM_STR);
		$reqprep->bindParam(':role', $role, PDO::PARAM_STR);
		$nb = $reqprep->execute();
		if (!$nb) {
			$mess_erreur = $idcom->errorInfo();
			echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
			echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
		} else {
			echo "<script> alert('The user had been succesfully added :"
				. $idcom->lastInsertId() . "')</script>";
			echo "<script>window.location='showUser.php';</script>";
			$reqprep->closeCursor();
			$idcom = null;
		}
	}
	?>
</body>

</html>