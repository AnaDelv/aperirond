<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>Apero Rond-connexion</title>
    <meta name="description" content= "MA META DESC">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php
    include 'layout/bande_connexion.php';
    include 'layout/menu.php';
    ?>
</header>
<section>
    <div class="container shadow corps">
        <form id="form" action="library/form.php" method="post">
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Entrez votre email">
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>

        <p><a href="inscription.php">Vous n'avez pas de compte ? Inscrivez-vous !</a></p>
    </div>
</section>
</body>