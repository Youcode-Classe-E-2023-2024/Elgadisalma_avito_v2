<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>S'inscrire à Avito </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
        <?php
         require_once 'navbar2.php';
        ?>

    <h1>Bienvenue à Avito</h1>
    <form action="../include/Add_user.php" method="post">

      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-describedby="addon-wrapping" name='userName'>
        <span class="text-danger"><?php if(isset($_GET['STATUS']))echo $_GET['STATUS'] ?></span>
    </div>
    <br>
      
    </div>
      </div>

      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="text" class="form-control" placeholder="Numéro de télephone" aria-describedby="addon-wrapping" name='numero_tel'>
    </div>
    <br>

    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">+</span>
      <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="addon-wrapping" name='password'>
  </div>
  <br>

  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-danger">S'inscrire</button>
</div
  
    </form>
    

</body>

</html>