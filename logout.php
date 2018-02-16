<?php
session_start();//on a besoin du système de session donc on appel la fonction
session_destroy();//on deco la session
header('Location:index.php');//On redirige vers la page d'accueil
?>