<?php
require_once './include/config.php';

if (isset($_GET['id'])) {
    $annonce_id = $_GET['id'];

    $sql = "DELETE FROM annonce WHERE id = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("i", $annonce_id); 

    if ($stmt->execute()) {
        header("location: ../pages/mes_annonces.php?STATUS=annonce suprime avec succes");
    } else {
        echo "Erreur lors de la suppression de l'annonce : " . $stmt->error;
    }

    $stmt->close();
} 

?>