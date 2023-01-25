<?php
include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');
if (isset($_GET['id'])) {
    $id = strtolower($_GET['id']);
    $reqprep = $idcom->prepare("DELETE FROM user WHERE iduser=:id");
    $reqprep->bindParam(':id', $id, PDO::PARAM_INT);
    $nb = $reqprep->execute();
    if (!$nb) {
        $mess_erreur = $idcom->errorInfo();
        echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
        echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
    } else {
        echo "<script> alert('User number: "
            . $id . " has been deleted.')</script>";
            echo "<script> window.location='showUser.php' </script>";
        $reqprep->closeCursor();
        $idcom = null;
    }
}
?>