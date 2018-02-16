<div class="container-fluid">
    <div class="row compte">
        <div class="col-1"></div>


            <div class="col-1">
                <?php if (!isset($_SESSION['username'])){
                echo"<a href='connexion.php'> Connexion </a>"; //si le gars n'est pas connecté on affiche le lien Connexion
                }?>
            </div>

            <div class="col-1">
                <?php if (!isset($_SESSION['username'])){echo
"<a href='inscription.php'> S'inscrire </a>";//si le gars n'est pas connecté le lien s'inscrire
                }?>
            </div>

            <div class="col-6"></div>
            <div class="col-1"><?php if (isset($_SESSION['username'])){
                    echo"<a href='logout.php'> Se déconnecter </a>";//si le gars est connecté on affiche connection
                }?></div>
            <div class="col-2">
                <?php if (isset($_SESSION['username'])){
                    echo "Bienvenue".$_SESSION['username'];
                } ?>
            </div>
    </div>
</div>