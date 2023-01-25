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
		<br>
		<div class="banner">
			<div class="container">
				<div class="banner-bottom">
					<div class="banner-bottom-right">
						<div class="callbacks_container">
							<ul class="rslides" id="slider4">
								<li>
									<div class="banner-info">
										<h3>Glowing skin</h3>
										<p>Start your shopping here...</p>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<h3>We care about your health</h3>
										<p>Start your shopping here...</p>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<h3>Shop Online</h3>
										<p>Start your shopping here...</p>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<h3>Pack your Bag</h3>
										<p>Start your shopping here...</p>
									</div>
								</li>
							</ul>
						</div>
						<!--banner-->
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
								// Slideshow 4
								$("#slider4").responsiveSlides({
									auto: true,
									pager: true,
									nav: false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
										$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});

							});
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="shop">
					<a href="#">SHOP COLLECTION NOW</a>
				</div>
			</div>
		</div>
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Free Shipping</h3>
							<p>on orders over 99 DT</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>Order online</p>
						<h3>Tel: 98 756 432</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="products-grid">
					<header>
						<h3 class="head text-center">Latest Products</h3>
					</header>
					<?php
						include("connexion.php");
						$idcom = connexpdo('id20159585_ourpara', 'myparam');
						$req = $idcom->prepare("select * from article");
						$req->execute();
						while ($row = $req->fetch(PDO::FETCH_ASSOC)) {?>
						
					<div class="col-md-4 product simpleCart_shelfItem text-center">
						<img src="<?=$row['img']?>" />
						<a class="product_name" href="#"><?=$row['name']?></a>
						<p> <span class="item_price"><?=$row['prix']?>DT</span></p>
						<a class="item_add" href="ajouter_panier.php?id=<?=$row['id_article']?>"> Ajouter au panier</a>
					</div>
					<?php } ?>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		<div class="other-products">
			<div class="container">
				<h3 class="like text-center">Featured Collection</h3>
				<ul id="flexiselDemo3">
				<?php
					$idcom = connexpdo('id20159585_ourpara', 'myparam');
					$req2 = $idcom->prepare("SELECT * FROM article LIMIT 5");
					$req2->execute();
					while ($row = $req2->fetch(PDO::FETCH_NUM)) {
					echo "<li><a href=\"\"> <img src=" .$row[6]." class=\"img-responsive\" alt=\"\" /></a>
						<div class=\"product liked-product simpleCart_shelfItem\">";
							echo "<a class=\"like_name\" href=\"\">" .$row[5]."</a>";
							echo "<p><a class=\"item_add\" href=\"\"><i></i> <span class=\" item_price\">" .$row[2];
						echo "</span></a></p></div></li>";
                    }
					?>
				</ul>
				<script type="text/javascript">
					$(window).load(function () {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint: 480,
									visibleItems: 1
								},
								landscape: {
									changePoint: 640,
									visibleItems: 2
								},
								tablet: {
									changePoint: 768,
									visibleItems: 3
								}
							}
						});

					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
		<!-- content-section-ends-here -->
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