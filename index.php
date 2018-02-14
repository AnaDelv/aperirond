<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>Apero Rond-accueil</title>
    <meta name="description" content= "MA META DESC">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
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
    <section>
        <div class="container shadow corps">

            <div class="row produits"><!--Section Nos Services -->
                <div class="col-12">
                    <h2>Nos Produits phares</h2>
                        <div class="row">
                        <div class="col-4 center">
                            <p>Produit 1</p>
                        </div>
                        <div class="col-4 center">
                            <p>Produit 2</p>
                        </div>
                        <div class="col-4 center">
                            <p>Produit 3</p>
                        </div>
                        </div>
                </div>
            </div>

            <div class="row"><!--Section Notre Selection -->
                <div class="col-12">
                        <h2>Notre Entreprise</h2>

                    <div class="row"><!-- Selection Acheter -->
                        <div class="col-12 center">
                            TEXTE
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"><!--Section Nos Actualités -->
                <div class="col-12">
                    <h2>Nos Actualités</h2>
                    <div class="row">
                        <div class="col-4 center">Selection 1 </div>
                        <div class="col-4 center">Selection 2 </div>
                        <div class="col-4 center">Selection 3 </div>
                    </div>
                </div>
            </div>


        </div>

    </section>


</body>
</html>