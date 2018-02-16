<div class="container-fluid">
    <div class="row compte">
        <div class="col-1"></div>

        <div>
          <?php if(£_SESSION['login'] == false): ?>
          <div class="col-1" id="connexionbutton"><a href="connexion.php"> Connexion </a></div>
          <div class="col-1"><a href="inscription.php"> S'inscrire </a></div>
          <?php else: ?>
          <div class="col-1" id="deconnexionbutton"><a href="library/deconnexion.php"> Deconnexion </a></div>
          <?php endif ?>
        </div>

        <div class="col-7"></div>
        <div class="col-2"><a href="compte.php"> Nom du compte </a></div>
    </div>
</div>
