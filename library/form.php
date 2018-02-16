<?php
session_start();

$userAllowed = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
];


//var_dump($newUser);
//var_dump($userAllowed);

if(empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: /connexion.php');
}

// Vérification de la correspondance avec l'utilisateur autorisé
if(($userAllowed['email'] != $_POST['email']
        || $userAllowed['password'] != $_POST['password'])
    || ($userAllowed['email'] != $_POST['email']
        && $userAllowed['password'] != $_POST['password'])) {
    header('Location: /connexion.php');
} else {
    $_SESSION['login'] = true;
    $_SESSION['user'] = $userAllowed;
    header('Location: /compte.php');
}


