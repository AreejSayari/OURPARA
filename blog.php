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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
								<h3> <span class="simpleCart_total"> 0 DT </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
							
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
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.php"><span>O</span> ur Para </a><img src="images/logo.png" width="60" height="50"></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
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
		         
		        <li><a href="blog.php"  >Blog </a></li>
		        <li><a href="fashsale.php" >Flash sale</a></li>
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
                       Blog
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<div class="contact-info">
			<h2>TIPS FOR HEALTHY HAIR</h2>
		</div>
		<div class="contact-map">
			<img src="images/hair.jpg" width="1100" height="350"></imd>
		</div>
		<div>
			How you wash your hair and the products you use can go a long way toward maintaining smooth, shiny hair. Follow these simple tips from dermatologists to maintain healthy hair.
			<br>
			1/ Wash oily hair more frequently. How often you wash your hair should be based on how much oil your scalp produces.
			<br>
			a/ If your scalp is oily, you may need to wash it as often as once a day. <br>
			b/ If you have chemically treated hair, your hair may be drier, so you may want to wash it less frequently.<br>
			c/ As you get older, your scalp makes less oil, so you may not need to shampoo as often. But if you see 
			flakes in your hair, you may not be shampooing enough. This can lead to dandruff and other scalp diseases.<br>
			2/ Concentrate shampoo on the scalp. When washing your hair, concentrate on cleaning primarily the scalp, 
			rather than washing the entire length of hair. Washing only your hair can create flyaway hair that is dull
			 and coarse.<br>
			3/ Use conditioner after every shampoo unless you use a “2-in-1” shampoo, which cleans and conditions hair.
			 Using a conditioner can significantly improve the look of damaged or weathered hair by increasing shine,
			  decreasing static electricity, improving strength and offering some protection from harmful UV rays.<br>

			4/ Concentrate conditioner on the tips of the hair. Because conditioners can make fine hair look limp,
			 they only should be used on the tips of the hair and not on the scalp or length of the hair.<br>

			5/ Choose a shampoo and conditioner formulated specifically for your hair type. For example, if you color 
			your hair, use a shampoo designed for color-treated hair. If your hair is damaged or chemically treated, 
			consider a “2-in-1” shampoo. Regardless of cost, many shampoo and conditioner brands provide the same 
			benefits. <br>

			6/ Protect hair when swimming. Protect your hair from the damaging effects of chlorine by wetting
			 and conditioning your hair before swimming. Wear a tight-fitting swim cap and use a specially formulated 
			 swimmers shampoo and deep conditioner after swimming to replace lost moisture.
			 <br>
		</div>
		<div class="contact-info">
			<h2>TIPS FOR HEALTHY SKIN </s></h2>
		</div>
		<div class="contact-map">
			<img src="images/skin.jpg" width="1100" height="400"></imd>
		</div>
		<div>
		1. Cleansing: Choose a cleanser that doesn’t leave your skin tight after washing.
		 Clean your face no more than twice a day, or just once, if you have dry skin and don’t wear makeup. 
		 Avoid washing for that squeaky-clean feeling because that means your skin’s natural oils are gone. 
		 Cleansers known to work well for all skin types include Cetaphil and Banila Clean It Zero Sherbet Cleanser. <br>

		 2. Serums: A serum with vitamin C or growth factors or peptides would be better in the morning, under sunscreen. 
		 At night, retinol or prescription retinoids work best. Makeup Artist’s Choice has an effective vitamin C and E 
		 serum and retinol available. <br>

		 3.Sunscreen: Apply sunscreen with at least 30 SPF 15 minutes before heading outdoors, as it takes a while 
		 for sunscreen to activate. Darker skin tones actually need more sun protection because hyperpigmentation 
		 is harder to correct. Try EltaMD’s sunscreen, which offers broad-spectrum UVA/UVB protection and is recommended
		  by the Skin Cancer Foundation.
		</div>
		
	</div>
</div>
<!-- //contact-page -->

<div class="news-letter">
	<div class="container">
		<div class="join">
			<h6>JOIN OUR MAILING LIST</h6>
			<div class="sub-left-right">
				<form>
					<input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
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