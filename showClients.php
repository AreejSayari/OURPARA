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
	<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates,
	Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template,
	free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() {
			 setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
			  </script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/simpleCart.min.js"> </script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script>
		function confirmationDelete(anchor) {
			var conf = confirm('Are you sure you want to delete this client?');
			if (conf)
				window.location = anchor.attr("href");
		}
		function confirmationUpgrade(anchor) {
			var conf = confirm('Are you sure you want to upgrade this client to admin?');
			if (conf)
				window.location = anchor.attr("href");
		}</script>
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
						<a href="checkout.php">
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
				<h2>ALL THE ARTICLES</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Age</th>
							<th>Address</th>
							<th>City</th>
							<th>E-mail</th>
							<th>Upgrade To Admin</th>
							<th>Delete</th>
						</tr>
					</thead>
					<?php
					include("connexion.php");
					$idcom = connexpdo('id20159585_ourpara', 'myparam');
					$reqprep = $idcom->prepare("SELECT * FROM client");
					$reqprep->execute();
					echo "<tbody>";
					while ($row = $reqprep->fetch(PDO::FETCH_NUM)) {
						echo "<tr>";
						echo "<td>", $row[0], "</td>";
						echo "<td>", $row[1]," ",$row[2], "</td>";
						echo "<td>", $row[3], "</td>";
						echo "<td>", $row[4], "</td>";
						echo "<td>", $row[5], "</td>";
						echo "<td>", $row[6], "</td>";
						echo "<td><a onclick='javascript:confirmationUpgrade($(this));
						return false;' href='upgradeClient.php?id=" . $row[0] . "'>Upgrade</a></td>";
						echo "<td><a onclick='javascript:confirmationDelete($(this));
								return false;' href='deleteClient.php?id=" . $row[0] . "'>Delete</a></td><tr>";
						echo "</tr>";

					}
					echo "</tbody>";
					?>

				</table>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
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
</body>

</html>