<?php
include('connexion.php');
$idcom = connexpdo('id20159585_ourpara', 'myparam');
session_start();
$id = $_SESSION['id'];
$pass = $_POST['password'];
$newpass = $_POST['newpassword'];

$reqprep = $idcom->prepare("SELECT * FROM user WHERE iduser= :id AND pass= :pass");
$reqprep->bindParam(':id', $id, PDO::PARAM_INT);
$reqprep->bindParam(':pass', $pass, PDO::PARAM_STR);
$ex = $reqprep->execute();
if (!$ex) {
    echo "Lecture impossible";
} else {
    $nbart = $reqprep->rowCount();
    if ($nbart == 0) {
        echo "<script> alert('Verify your password')</script>";
        echo "<script> window.location='changeClientPassword.php' </script>";
    } else {
        $req = $idcom->prepare("UPDATE user SET pass=:newpass WHERE iduser=:id");
        $req->bindParam(':newpass', $newpass, PDO::PARAM_STR);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $ex1 = $req->execute();
        if ($ex1) {
            echo "<script> alert('Password changed succesfully')</script>";
            echo "<script> window.location='espace_client.php' </script>";
        }
    }
}
$reqprep->closeCursor();
$req->closeCursor();
$idcom = null;
?>