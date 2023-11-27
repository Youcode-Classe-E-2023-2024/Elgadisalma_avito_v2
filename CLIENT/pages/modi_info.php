<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php 
    require_once 'navbar.php';
    ?>
    <div class="profil">
        <h1>Bonjour <?php echo $_SESSION['nom_utilisateur']; ?></h1>
        <div class="container-profil">
            
            <div class="ph_profil">
                <img src="../include/uploads/<?php echo $_SESSION['photo']; ?>" alt="Photo de profil">
            </div>
            <div class="info">
            <div class="col-md-4">
            <form class="row g-3 needs-validation" action="../include/edit_traitement.php" method="post">
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="validationCustom02" name="nom_utilisateur" value="<?php echo $row['nom_utilisateur'] ?>" required>
        </div>

            <label for="validationCustom01" class="form-label">Numero de telephone </label>
            <input type="text" class="form-control" id="validationCustom01" name="numero_tel" value="<?php echo $row['numero_tel'] ?>" required>
        </div>

        <form action="../include/delete_me.php" method="get" style="display: inline;">
            <input type="hidden" name="deleteUser" value="<?php echo $_SESSION['id']; ?>">
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i> Enregistrer les modifications
            </button>
        </form>
                        
            </div>
        </div>
    </div>
    
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>