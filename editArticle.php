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
                        <div class="logo">
                            <h1><a href="index.php"><span>O</span> ur Para </a><img src="images/logo.png" width="60"
                                    height="50"></h1>

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
                        <img id="llo" src="images/logo.png" alt="">
                    </div>
                    <?php
                    include('connexion.php');
                    $idcom = connexpdo('id20159585_ourpara', 'myparam');
                    if (isset($_GET['id'])) {
                        $code = strtolower($_GET['id']);
                        // Requête SQL
                        $reqprep = $idcom->prepare("SELECT * FROM article WHERE id_article= :code ");
                        $reqprep->bindParam(':code', $code, PDO::PARAM_INT);
                        $reqprep->execute();
                        $coord = $reqprep->fetch(PDO::FETCH_NUM);
                        echo "<div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">";
                        echo "<h3>UPDATE THE ARTICLE'S INFORMATIONS</h3>";
                        echo "<form action= \"" . $_SERVER['PHP_SELF'] . "\" method=\"post\"enctype=
\"application/x-www-form-urlencoded\">";
                        echo "<fieldset>";
                        echo "<table>";
                        echo "<tr><td><span>Design <label>*</label></span> </td><td><input type=\"text\" 
                        name=\"design\" size=\"40\"maxlength=\"30\" value=\"$coord[1]\"/> </td></tr>";
                        echo "<tr><td><span>Price<label>*</label></span></td><td><input type=\"text\" 
                        name=\"prix\" size=\"40\"maxlength=\"30\" value=\"$coord[2]\"/></td></tr>";
                        echo "<tr><td><span>Categorie<label>*</label></span></td><td><input type=\"text\" 
                        name=\"categ\" size=\"40\"maxlength=\"2\" value=\"$coord[3]\"/></td></tr>";
                        echo "<tr><td><span>Description<label>*</label></span></td><td><input type=\"text\" 
                        name=\"desc\" size=\"40\"maxlength=\"50\" value=\"$coord[4]\"/></td></tr>";
                        echo "<tr><td><span>Name<label>*</label></span></td><td><input type=\"text\" 
                        name=\"nom\" size=\"40\"maxlength=\"50\" value=\"$coord[5]\"/></td></tr>";
                        echo "<tr><td><span>Image<label>*</label></span></td><td>"; ?>
                        <img src="<?= $coord[6] ?>" height=100 width=130 />

                        <?php
                        //echo "<input type=\"file\" name=\"img_upload\"></td></tr>";
                        echo "<tr><td><input type=\"submit\"name=\"modif\" value=\"Update\"></td></tr>
                        </table>";
                        echo "</fieldset>";
                        echo "<input type=\"hidden\" name=\"code\" value=\"$code\"/>";
                        echo "</form>";
                        echo "</div>";
                        echo "<div class=\"clearfix\"> </div>";
                        echo "</div>";
                        echo "</div>";
                        $reqprep->closeCursor();
                        $idcom = null;
                    } elseif (
                        isset($_POST['design']) && isset($_POST['prix']) && isset($_POST['categ'])
                        && isset($_POST['desc']) && isset($_POST['nom'])
                    ) {
                        // ENREGISTREMENT
                        $design = $_POST['design'];
                        $prix = $_POST['prix'];
                        $categ = $_POST['categ'];
                        $desc = $_POST['desc'];
                        $nom = $_POST['nom'];
                        $code = $_POST['code'];

                        /*$img_name = $_FILES['img_upload']['name'];
                        $tmp_img_name = $_FILES['img_upload']['tmp_name'];
                        move_uploaded_file($tmp_img_name, "./image_article/" . $img_name);

                        $img = "./image_article/" . $img_name;*/
                        // Requête SQL
                        $reqprep = $idcom->prepare("UPDATE article SET design=:design,prix=:prix,description=
                        :desc,categorie=:categ, name=:nom WHERE id_article=:code");
                        $reqprep->bindValue(':design', $design, PDO::PARAM_STR);
                        $reqprep->bindValue(':prix', $prix, PDO::PARAM_INT);
                        $reqprep->bindValue(':desc', $desc, PDO::PARAM_STR);
                        $reqprep->bindValue(':categ', $categ, PDO::PARAM_STR);
                        $reqprep->bindValue(':nom', $nom, PDO::PARAM_STR);
                        //$reqprep->bindValue(':img', $img, PDO::PARAM_STR);
                        $reqprep->bindValue(':code', $code, PDO::PARAM_INT);
                        $ex = $reqprep->execute();
                        if (!$ex) {
                            echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
                        } else {
                            echo "<script> alert('Your changes were saved');
                            </script>";
                            echo "<script>window.location='showArticles.php';</script>";
                        }
                        $idcom = null;
                    }
                    ?>
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