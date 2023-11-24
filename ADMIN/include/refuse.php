<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $annonce_id = $_GET['id'];

    $sql = "DELETE FROM annonce WHERE id = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("i", $annonce_id); 

    if ($stmt->execute()) {
        header("location: ../pages/indexA.php?STATUS=annonce approuvee avec succes");
    } else {
        echo "Erreur lors du refus de l'annonce : " . $stmt->error;
    }

    $stmt->close();
} 

?>

