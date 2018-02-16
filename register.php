<?php

$bdd = new PDO('mysql:host=localhost;dbname=aperobase', 'root', '');//ma base de donnée avec sa source

if(isset($_POST["submit"])) {//si le formulaire est saisi

    $username = htmlentities(trim($_POST["username"]));//on stock la saisie du pseudo dans une variable php
    $password = htmlentities(trim($_POST["password"]));//on stock la saisie du mdp dans une variable php
    $repeatpassword = htmlentities(trim($_POST["repeatpassword"]));//on stock la saisie de la verif mdp dans une variable php

    if ($username && $password && $repeatpassword) {//si les 3 champs sont saisis
        if ($password == $repeatpassword) {//si le mdp et la verif mdp correspondent

            $reg = $bdd -> query("SELECT COUNT(*) as nb FROM users WHERE username='$username'");//on prepare la requete sql pour verifier s'il n'y pas déja un nom d'utilisateur existant
            $rows = $reg->fetch();//on utilise la requete et on enregistre le resultat dans une variable php sous forme de tableau

            if ($rows[0]==0){
            $requete = $bdd -> exec("INSERT INTO users(username,password) VALUES ('$username','$password')");//requete sql pour inserer la saisie
            die ("Inscription terminée");//on arrete tout et on dit inscription terminée (provisoire)
            }else echo"Ce pseudo n'est pas disponible";
         }else { echo "Les deux mot de passe doivent être identiques";}

    }else {echo "Veuillez saisir tout les champs";}
}
?>