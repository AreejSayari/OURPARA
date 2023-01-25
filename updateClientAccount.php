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
                        <?php
                        include('connexion.php');
                        $idcom = connexpdo('id20159585_ourpara', 'myparam');
                        if (!isset($_POST['modif'])) {
                            $reqprep = $idcom->prepare("SELECT * FROM client WHERE id_client= :id ");
                            $reqprep->bindParam(':id', $id, PDO::PARAM_INT);
                            $reqprep->execute();
                            $coord = $reqprep->fetch(PDO::FETCH_NUM);
                            echo "<div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">";
                            echo "<h2>Welcome Back " . $coord[2] . " </h2>";
                            echo "<form action= \"" . $_SERVER['PHP_SELF'] . "\" method=\"post\"enctype=
\"application/x-www-form-urlencoded\">";
                            echo "<fieldset>";
                            echo "<table>";
                            echo "<tr><td><span>LAST NAME <label>*</label></span> </td><td><input type=\"text\" 
                    name=\"nom\" size=\"40\"maxlength=\"30\" value=\"$coord[1]\"/> </td></tr>";
                            echo "<tr><td><span>FIRST NAME<label>*</label></span></td><td><input type=\"text\" 
                    name=\"prenom\" size=\"40\"maxlength=\"30\" value=\"$coord[2]\"/></td></tr>";
                            echo "<tr><td><span>Age<label>*</label></span></td><td><input type=\"text\" 
                    name=\"age\" size=\"40\"maxlength=\"2\" value=\"$coord[3]\"/></td></tr>";
                            echo "<tr><td><span>ADDRESS<label>*</label></span></td><td><input type=\"text\" 
                    name=\"adresse\" size=\"40\"maxlength=\"60\" value=\"$coord[4]\"/></td></tr>";
                            echo "<tr><td><span>CITY<label>*</label></span></td><td><input type=\"text\" 
                    name=\"ville\" size=\"40\"maxlength=\"40\" value=\"$coord[5]\"/></td></tr>";
                            echo "<tr><td><span>E-mail<label>*</label></span></td><td><input type=\"text\" 
                    name=\"mail\" size=\"40\"maxlength=\"50\" value=\"$coord[6]\"/></td></tr>";
                            echo "<tr><td><input type=\"submit\"name=\"modif\" value=\"Update\"></td></tr>
                    </table>";
                            echo "</fieldset>";
                            echo "</form>";
                            echo "</div>";
                            echo "<div class=\"clearfix\"> </div>";
                            echo "</div>";
                            echo "</div>";
                            $reqprep->closeCursor();
                            $idcom = null;
                        } elseif (isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['ville'])) {
                            $nom = $_POST['nom'];
                            $prenom = $_POST['prenom'];
                            $age = $_POST['age'];
                            $adresse = $_POST['adresse'];
                            $ville = $_POST['ville'];
                            $mail = $_POST['mail'];
                            $reqprep = $idcom->prepare("UPDATE client SET nom=:nom,prenom=:prenom,adresse=
                    :adresse,ville=:ville,mail=:mail,age=:age WHERE id_client=:id");
                            $req = $idcom->prepare("UPDATE user SET login=:mail WHERE iduser=:id");

                            $reqprep->bindValue(':nom', $nom, PDO::PARAM_STR);
                            $reqprep->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                            $reqprep->bindValue(':adresse', $adresse, PDO::PARAM_STR);
                            $reqprep->bindValue(':ville', $ville, PDO::PARAM_STR);
                            $reqprep->bindValue(':mail', $mail, PDO::PARAM_STR);
                            $reqprep->bindValue(':age', $age, PDO::PARAM_INT);
                            $reqprep->bindValue(':id', $id, PDO::PARAM_INT);
                            $req->bindValue(':mail', $mail, PDO::PARAM_STR);
                            $req->bindValue(':id', $id, PDO::PARAM_INT);
                            $req->execute();
                            $ex = $reqprep->execute();
                            if (!$ex) {
                                echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
                            } else {
                                echo "<script> alert('Your changes were saved');
                        </script>";
                                echo "<script> window.location='espace_client.php' </script>";
                            }
                            $idcom = null;
                        } else {
                            echo "change your info !";
                        }
                        ?>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
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