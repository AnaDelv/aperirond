<?php
include 'pdo.php';
extract($_POST);

var_dump($_POST);

if(isset($_POST['name'])) {
       $bdd->exec("INSERT INTO `client` (Nom, email, password) VALUES ('$name', '$email', '$password')");
}

//finally {
//    $pdo = null;
//}
//
//if(isset($_POST['bouton1'])) {
//    $bdd->exec('INSERT INTO produit(n°produit, nom, type, prix) VALUES(1, \'Olive\', \'Fromage\', 10)');
//}
//elseif(isset($_POST['bouton2'])) {
//    $bdd->exec('INSERT INTO produit(n°produit, nom, type, prix) VALUES(1, \'Bleu\', \'Fromage\', 9)');
//}
//elseif(isset($_POST['bouton3'])) {
//    $bdd->exec('INSERT INTO produit(n°produit, nom, type, prix) VALUES(1, \'Basilic\', \'Fromage\', 12)');
//}
//elseif(isset($_POST['bouton4'])) {
//    $bdd->exec('INSERT INTO produit(n°produit, nom, type, prix) VALUES(1, \'Jambon\', \'Fromage\', 13)');
//}

