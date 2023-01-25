<?php
session_start();
$id = $_SESSION['id'];
if (!isset($id)){
	echo "<script> window.location='login.php' </script>";
}
include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');
$reqprep = $idcom->prepare("SELECT role FROM user WHERE iduser=:id");
$reqprep->bindValue(':id', $id, PDO::PARAM_INT);
$reqprep->execute();
$row = $reqprep->fetch(PDO::FETCH_NUM);
$role = $row[0];
if ($role == 'admin') {
    echo "<script> window.location='showArticles.php' </script>";
} else {
    echo "<script> window.location='espace_client.php' </script>";
}
?>