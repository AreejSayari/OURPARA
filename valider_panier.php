<?php
session_start();
$id = $_SESSION['id'];
if (!isset($id)){
	echo "<script> window.location='login.php' </script>";
}


include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');

if (isset($_GET['del'])) {
	$id_del = $_GET['del'];
	unset($_SESSION['panier'][$id_del]);
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
		<!-- checkout -->
		<div class="cart-items">
			<div class="container">
				<div class="dreamcrub">
					<ul class="breadcrumbs">
						<li class="home">
							<h2>Validated order ! </h2>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>

				<h2>Details of your order </h2>
				<div class="cart-gd">
					<div class="cart-header">
						<table class="table table-striped" width=100%>
							<tr>
								<th>LAST NAME</th>
								<th>FIRST NAME</th>
								<th>Address</th>
								<th>City</th>
								<th>E-mail</th>
							</tr>

							<?php

							$role = "client";
							$reqprep = $idcom->prepare("select * from user where role LIKE :r AND iduser=:id ");
							$reqprep->bindValue(':id', $id, PDO::PARAM_INT);
							$reqprep->bindValue(':r', $role, PDO::PARAM_STR);
							$reqprep->execute();
							if (!($reqprep->execute())) {
								echo "Lecture impossible 1";
							} else {
								$nbart = $reqprep->rowCount();
								if ($nbart == 0) {
									echo "<script> alert('You are not a client.')</script>";
									echo "<script> window.location='index.php' </script>";
								} else {
									$reqprep = $idcom->prepare("select * from  client where id_client=:id");
									$reqprep->bindValue(':id', $id, PDO::PARAM_INT);
									$reqprep->execute();

									if (!($reqprep->execute())) {
										echo "Lecture impossible 2";
									} else {
										$client = $reqprep->fetch(PDO::FETCH_ASSOC);

										?>
										<tr>
											<td><?= $client['nom'] ?></td>
											<td>
												<?= $client['prenom'] ?>
											</td>
											<td><?= $client['adresse'] ?></td>
											<td>
												<?= $client['ville'] ?>
											</td>
											<td><?= $client['mail'] ?></td>
										</tr>
									</table>

								<?php }

								}
							}


							?>

					</div>



					<div class="cart-gd">
						<div class="cart-header">
							<table class="table table-striped" width=100%>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Price</th>
									<th>Quantity</th>
								</tr>


								<?php

								$total = 0;
								$ids = array_keys($_SESSION['panier']);

								if (empty($ids = array_keys($_SESSION['panier']))) {
									echo "<h2 center >Empty card  </h2> </br></br>";
									$produits = array();
								} else {
							
									$req = $idcom->prepare("select id_article, img , prix , name from article where id_article IN (" . implode(',', $ids) . ")");
									$produits = $req->execute();
									//lise des produit avec une boucle foreach
									while ($product = $req->fetch(PDO::FETCH_ASSOC)) {

										$total = $total + $product['prix'] * $_SESSION['panier'][$product['id_article']];

										?>
										<tr>
											<td><img src="<?= $product['img'] ?>" width=150px heigth=150px></td>
											<td>
												<?= $product['name'] ?>
											</td>
											<td><?= $product['prix'] ?>DT</td>
											<td>
												<?= $_SESSION['panier'][$product['id_article']] ?>
											</td>
										</tr>

									<?php }

									$idcmd = "\N";
									$dt = date("Y-m-d");
									$reqprep = $idcom->prepare("Insert into commande(id_comm , id_client , date) values (:id1 , :id2 , :date) ");
									$reqprep->bindValue(':id1', $idcmd, PDO::PARAM_INT);
									$reqprep->bindValue(':id2', $id, PDO::PARAM_INT);
									$reqprep->bindValue(':date', $dt);

									$i = $reqprep->execute();
									$idcmd = $idcom->lastInsertId();
									if (!$i) {
										echo "Lecture impossible 1 ";
									} else {

										$req = $idcom->prepare("select id_article, prix  from article where id_article IN (" . implode(',', $ids) . ")");
										$req->execute();
										if (!$req->execute()) {
											echo "Lecture impossible 2 ";
										} else {
											while ($product = $req->fetch(PDO::FETCH_ASSOC)) {
												$prix = $product['prix'];
												$idarticle = $product['id_article'];
												$quantite = $_SESSION['panier'][$product['id_article']];
												$reqprep1 = $idcom->prepare("Insert into ligne (id_comm , id_article , quantite , prix_unit) values (:id1 , :id2 , :q , :p) ");
												$reqprep1->bindValue(':id1', $idcmd, PDO::PARAM_INT);
												$reqprep1->bindValue(':id2', $idarticle, PDO::PARAM_INT);
												$reqprep1->bindValue(':q', $quantite);
												$reqprep1->bindValue(':p', $prix);
												$reqprep1->execute();
											}
										}
									}
								} ?>

							</table>

							<div class="news-letter">
								<div class="container">
									<div class="join">
										<h2 center>Total : <?= $total ?>DT </h2>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>

							<?php
							$_SESSION['panier'] = array();
							?>


						</div>
					</div>
				</div>
			</div>
		</div>








		<!-- //checkout -->


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

</html>