<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            /* background-color: #88555C;  */
            color: #000; 
            background-image: url("./pic/network-concept-with-thread.jpg");
        }
        .container {
            margin-top: 100px;
        }
        .input-group-text {
            background-color: #FF80AB; 
            color: #000; 
        }
        button {
            background-color: #FF80AB; 
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue à Avito</h1>
        <h5>Connectez-vous pour béneficier d'offres exclusives</h5>
        <form action="./include/connect_user.php" method="post">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+</span>
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-describedby="addon-wrapping" name='userName'>
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+</span>
                <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="addon-wrapping" name='password'>
            </div>
            <br>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger ">Connexion</button>
            </div>
        </form>
        <br>
        <a href="./pages/inscription.php" class="btn btn-secondary">S'inscrire</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
