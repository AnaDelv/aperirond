
<?php
session_start();

$userAllowed = [
    'email' => '',
    'password' => ''
];


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


