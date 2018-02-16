<!DOCTYPE>
<html>
<meta charset="utf-8">


<?php include 'layout/header.php';?>
<header>

    <?php
    include 'layout/bande_connexion.php';
    include 'layout/menu.php';
    ?>
    <div class="row contact shadow"><!-- Section contact -->
        <div class="col-4 center">
            <h2 class="slogan">L'Apéro à pleins ronds</h2>
        </div>
        <div class="col 4 center">
            <img id="logo" src="img/aperi-rond_logo.png">
        </div>
        <div class="col-4 center">
            <h2 class="slogan">Des ronds, des ronds, des ronds</h2>
        </div>
    </div>
    </div>
</header>
<?php
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=aperobase;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("SELECT * FROM produits_achetés");
    $stmt->execute();


    //verifie si il y a des données dans la bdd
    $statement = $bdd->query('SELECT COUNT(*) FROM produits_achetés');
    $result = $statement->fetch();
    $count = $result[0];
    if ($count >= 1){
        session_start();
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Nbre</th><th>Nom</th><th>Type</th><th>Prix (En €)</th><th>Id produit</th></tr>";
    }
    else if ($count == 0){
        echo "Ta rien acheté boloss";
    }

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$bdd = null;
echo "</table>";

?>

<div>
    <p><p><a href="boutique.php">Boutique</a></p>
    <p><p><a href="panier.php">Panier</a></p>
    </p>
</div>
  </body>
</html>
