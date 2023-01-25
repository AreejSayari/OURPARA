<?php
include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');
session_start();
$id = $_SESSION['id'];
if (!isset($id)) {
	echo "<script> window.location='login.php' </script>";
}

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $req = $idcom->prepare("select * from article where id_article=:i");
    $req->bindParam(':i', $id, PDO::PARAM_INT);
    $produit = $req->execute();

    if (empty($produit = $req->fetch(PDO::FETCH_ASSOC))) {
        die("Ce produit n'existe pas");
    }

    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]++;
    } else {
        $_SESSION['panier'][$id] = 1;
    }
    header("Location:index.php");
}
?>