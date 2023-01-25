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
                            <p><a class="simpleCart_empty">CLIENT ACCOUNT</a></p>
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
						<li><a href='espace_client.php'>HOME</a></li>
							<li><a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"
									aria-controls="myTabDrop1-contents" aria-expanded="false">UPDATE ACCOUNT <span
										class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1"
									id="myTabDrop1-contents">
									<li><a href="updateClientAccount.php">UPDATE INFORMATIONS</a></li>
									<li><a href="changeClientPassword.php">CHANGE PASSWORD</a></li>
									<li><a href="deleteAccount.php">DELETE ACCOUNT</a></li>
								</ul>
							</li>
							<li><a href='showOrders.php'>ORDERS</a></li>
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
                <div class="registration-grids">
                    <div class="reg-form">
                        <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                            <h3>CHANGE PASSWORD</h3>
                            <form action="password.php" method="post">
                                <div>
                                    <span>Password</span>
                                    <input type="password" name="password">
                                </div>
                                <div>
                                    <span>New Password</span>
                                    <input type="password" name="newpassword">
                                </div>
                                <input type="submit" value="CHANGE">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="reg-right">
                    <div class="strip"></div>
                    <img id="lo" src="images/logo.png" alt="">
                    <div class="strip"></div>
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