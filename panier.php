
<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>Apero Rond</title>
    <meta name="description" content= "MA META DESC">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Kaushan+Script" rel="stylesheet">




    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<header>

    <?php
    include 'layout/bande_connexion.php';
    include 'layout/menu.php';
    ?>
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
        $bdd = new PDO('mysql:host=localhost;dbname=aperobase', 'root', '');//ma base de donnée avec sa source
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $bdd->prepare("SELECT * FROM panier");
        $stmt->execute();


        //verifie si il y a des données dans la bdd
        $statement = $bdd->query('SELECT COUNT(*) FROM panier');
        $result = $statement->fetch();
        $count = $result[0];
		if ($count >= 1){
      session_start();
      echo "<table class='center' style='border: solid 1px black;'>";
      echo "<tr><th>Nbre</th><th>Nom</th><th>Type</th><th>Prix (En €)</th><th>Id produit</th></tr>";
    }
		else if ($count == 0){
      echo "<p class='center'>Votre panier est vide</p>";
    }

        //vide les données de la bdd
        if (isset($_POST['bouton6'])) {
        $query = $bdd-> exec("TRUNCATE TABLE panier");
        }

        //envoi les produits dans produits_achetés
        elseif (isset($_POST['bouton7'])) {
          $bdd->exec('INSERT INTO produits_achetés SELECT * FROM panier');
          $bdd-> exec("TRUNCATE TABLE panier");
        }


        //calcul la somme total à payer
        $reponse = $bdd->query('SELECT sum(prix) AS somme FROM panier');

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
  <p><p class="center"><a href="boutique.php">Boutique</a></p>
</p>
</div>
<div class="prix">
  <h2>Total: </h2>
  <?php
if ($count >= 1){
  //afficher prix total
  while ($donnees = $reponse->fetch())
  {
  echo $donnees['somme'] . " €";
  }
}
else {
  echo "<p class='center'>0 €</p>";
}
  $reponse->closeCursor();
   ?>

<form id="bouton" name="bouton" method="post">
  <p class="center"><input type="submit" name="bouton6" value="Vider panier"></p>
  <p class="center"><input type="submit" name="bouton7" value="Valider" onclick='window.location.reload(false)'></p>
</form>
</div>

  </body>
</html>
