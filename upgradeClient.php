<?php
include("connexion.php");
$idcom = connexpdo('id20159585_ourpara', 'myparam');
if (isset($_GET['id'])) {
    $id = strtolower($_GET['id']);
    $reqprep = $idcom->prepare("DELETE FROM client WHERE id_client=:id");
    $reqprep->bindParam(':id', $id, PDO::PARAM_INT);
    $nb = $reqprep->execute();
    $reqprep2 = $idcom->prepare("UPDATE user SET role='admin' WHERE iduser=:id");
    $reqprep2->bindParam(':id', $id, PDO::PARAM_INT);
    $nb = $reqprep2->execute();
    if (!$nb) {
        $mess_erreur = $idcom->errorInfo();
        echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
        echo "<script> alert('Erreur : " . $idcom->errorCode() . "')</script>";
    } else {
        echo "<script> alert('User number: "
            . $id . " has been upgraded to admin.')</script>";
            echo "<script> window.location='showClients.php' </script>";
        $reqprep->closeCursor();
        $idcom = null;
    }
}
?>