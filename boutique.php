<?php include 'layout/header.php';?>

<header>
    <?php
    include 'layout/bande_connexion.php';
    include 'layout/menu.php';
    ?>
</header>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=aperobase', 'root', '');//ma base de donnée avec sa source
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if(isset($_POST['bouton1'])) {
    $statement = $bdd->query('SELECT Id FROM panier WHERE Id = 305492678');
    $result = $statement->fetch();
    $id = $result[0];
    if ($id == 305492678) {
        $sql = $bdd->exec("UPDATE panier SET Nb = Nb + 1, Prix = Prix + 3 WHERE Id = 305492678");
    }
    else {
        $bdd->exec('INSERT INTO panier(Nb, Nom, Type, Prix, Id) VALUES(1, \'Olive\', \'Fromage\', 3, 305492678)');
    }

}
elseif(isset($_POST['bouton2'])) {
    $statement = $bdd->query('SELECT Id FROM panier WHERE Id = 236985684');
    $result = $statement->fetch();
    $id = $result[0];
    if ($id == 236985684) {
        $sql = $bdd->exec("UPDATE panier SET Nb = Nb + 1, Prix = Prix + 2.5 WHERE Id = 236985684");
    }
    else {
        $bdd->exec('INSERT INTO panier(Nb, Nom, Type, Prix, Id) VALUES(1, \'Bleu\', \'Fromage\', 2.5, 236985684)');
    }
}

elseif(isset($_POST['bouton3'])) {
    $statement = $bdd->query('SELECT Id FROM panier WHERE Id = 369856257');
    $result = $statement->fetch();
    $id = $result[0];
    if ($id == 369856257) {
        $sql = $bdd->exec("UPDATE panier SET Nb = Nb + 1, Prix = Prix + 4.5 WHERE Id = 369856257");
    }
    else {
        $bdd->exec('INSERT INTO panier(Nb, Nom, Type, Prix, Id) VALUES(1, \'Basilic\', \'Fromage\', 4.5, 369856257)');
    }
}

elseif(isset($_POST['bouton4'])) {
    $statement = $bdd->query('SELECT Id FROM panier WHERE Id = 658921463');
    $result = $statement->fetch();
    $id = $result[0];
    if ($id == 658921463) {
        $sql = $bdd->exec("UPDATE panier SET Nb = Nb + 1, Prix = Prix + 4.5 WHERE Id = 658921463");
    }
    else {
        $bdd->exec('INSERT INTO panier(Nb, Nom, Type, Prix, Id) VALUES(1, \'Jambon\', \'Fromage\', 5, 658921463)');
    }
}

elseif(isset($_POST['bouton5'])) {
    $bdd-> exec("TRUNCATE TABLE panier");
}
?>

<div class="form-style-5 center">
    <form id="bouton" name="bouton" method="post">
        <p><img class="img_boutique" src="img/Aperirond_olive.png"><input class="olive" type="submit" name="bouton1" value="Olive"></p>
        <p><img class="img_boutique" src="img/Aperirond_Bleu.png"><input class="bleu" type="submit" name="bouton2" value="Bleu"></p>
        <p><img class="img_boutique" src="img/Aperirond_basilic.png"><input class="basilic" type="submit" name="bouton3" value="Basilic"></p>
        <p><img class="img_boutique" src="img/Aperirond_jambon.png"><input class="jambon" type="submit" name="bouton4" value="Jambon"></p>
        <p><input type="submit" name="bouton5" value="Vider panier"></p>

        <p><a href="panier.php">Panier</a></p>
        <p><a href="commandes.php">Mes commandes</a></p>
    </form>
</div>
<div class="test">

</div>

<?php include 'layout/footer.php';?>
