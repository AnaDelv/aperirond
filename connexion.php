<?php include 'layout/header.php';?>

<header>
    <?php
    include 'layout/bande_connexion.php';
    include 'layout/menu.php';
    ?>
</header>
<section>
    <div class="container shadow corps">
        <div class="row">
            <div class="col-12 center">
                <form method="POST" action="login.php">
                    <p>Votre pseudo:</p>
                    <input type="text" name="username">
                    <p>Votre password :</p>
                    <input type="password" name="password">
                    <input type="submit" value="Se connecter" name="submit">
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php';?>
