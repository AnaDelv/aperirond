<?php
session_start();//j'ai besoin d'utiliser le système de session donc j'appel la fonction
$bdd = new PDO('mysql:host=localhost;dbname=aperobase', 'root', '');//ma base de donnée avec sa source
if(isset($_POST['submit'])){//Si le formulaire est envoyé
    $username = htmlentities(trim($_POST["username"]));//on enregistre le nom d'utilisateur dans une variable php
    $password = htmlentities(trim($_POST["password"]));//on enregistre le mdp dans une variable php

    if($username && $password){//si les deux champs ont été saisi
        $query = $bdd -> query("SELECT COUNT(*) as nb FROM users WHERE username='$username'&&password='$password'");// on prépare la requete SQL, elle permet de faire une vérification dans tout la base de données afin de savoir si le user et le mdp correspondent

        $rows = $query->fetch();//on lance la requete et on enregistre le resultat dans une variable php, la reponse est rendue sous forme de tableau (propre à la fontcion fetch())

        if ($rows[0]==1){//Si on trouve une correspondance
            $_SESSION['username']=$username;//on lance la session
            header('Location:index.php');//on redirige vers la page d'accueil

        }else echo "Pseudo ou password incorrect";

    }else echo"Veuillez saisir tous les champs";
}


?>