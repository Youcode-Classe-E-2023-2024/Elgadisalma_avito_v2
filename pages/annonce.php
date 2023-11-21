<?php
session_start();

if(!isset($_SESSION['id'])){
    header("location:../index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
</head>

<body>
<div class="container mt-5">
    
    <h2>Liste d'annonce</h2>
    <a href="mes_annonces.php"><button type="button" class="btn btn-primary">Mes annonces</button></a>
    <br>
    <form action="../include/log_out.php" method="post">
    <button type="submit" class="btn btn-danger">Log out</button>
    </form>
    <br>
    <a href="ajout_annonce.php"><button>Ajouter une annonce</button></a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Vendeur</th>
                <th>Numero de telephone</th>
                <th>Titre du produit</th>
                <th>État</th>
                <th>Description du produit</th>

            </tr>
        </thead>
        
        <tbody id="taskTableBody">
        <?php
            include_once '../include/afficher_ann_traitement.php';
            $annonces = get_annonce();
            foreach ($annonces as $annonce) {
        ?>
            <tr>
                <td><?php echo $annonce['nom_utilisateur'] ;?></td>
                <td><?php echo $annonce['numero_tel'] ;?> </td>
                <td><?php echo $annonce['titre_annonce'] ;?> </td>
                <td><?php echo $annonce['etat_annonce'] ;?> </td>
                <td><?php echo $annonce['description_annonce'] ;?> </td>
                
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>