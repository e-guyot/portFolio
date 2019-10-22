<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=11" />
        <title> Estelle GUYOT </title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Space+Mono" rel="stylesheet">

        <link rel="stylesheet" href="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/css/bootstrap.css">	
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/Contact/css/contact.css" />
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-tsula.css?id=1">	
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-titre.css?id=2">
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/mesProjets/ParcourSup/css/parcourSup.css?id=2">

        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />

        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . '/portFolio_GUYOT/src/menuTriangle/views/menuTriangle.php');
        include_once($_SERVER['DOCUMENT_ROOT'] . '/portFolio_GUYOT/src/projets/mesProjets/stages/ParcourSup/views/parcourSup_fct.php');
        $menu = new Menu;
        $nav = new NavParcourSup;
        echo $menu->getLienCss();
        ?>
    </head>
    <body>
        <div class="row" >
<?php echo $menu->getButton(); ?> 
            <div class="col-md-11 col-11 group-center">
                <div class="skill-group-vertical">
                    <div class="container">
                        <div class="col-md-12 titre-portfolio">
                            <h1>ParcourSup : Mission SQL </h1>
                        </div>
                        <div class="col-md-12 text-portfolio">
                            <div class="row">
                                <p>Grâce à ce stage j'ai pu utiliser des fonctionnalité SQL que je ne connaissait pas : <br>● <span>from_unixtime([nomdelatable].[nomdelacolonne]/1000)</span>, permet la conversion d’un timestamp en une date plus lisible. Le timestamp (unix) désigne le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit UTC précise.<br>
                                    ● <span>cast([expression] as ...)</span>, est une fonctionnalité qui permet d’extraire une chaîne de caractères dans différents formats (date, heure, …). Si l’on ne souhaite obtenir seulement la date et non l’heure d’un datetime, le : “as” sera suivi de la valeur date. <br>
                                    ● <span>as [nomdelarequete]</span>, le : “as” à la fin d’une requête permet de nommer la requête par un alias pour pouvoir effectuer plusieurs requêtes dans une seule requête globale comme ci-dessus. <br>
                                    ● <span>right join</span>, elle permet de retourner tous les enregistrements de la table de droite
                                    sans forcément avoir une correspondance avec celle de gauche.
                                    <br> <img src="/portFolio_GUYOT/src/projets/mesProjets/stages/ParcourSup/img/sql.JPG">
                                </p>
                            </div>
                        </div>	
                    </div>
                </div>
            <?= $nav->getNav(5); ?>
            </div>
<?= $menu->getFooter(); ?>
            <script src="/portFolio_GUYOT/src/interet/js/jquery.capSlide.js" type="text/javascript"></script>
            <script type="text/javascript" src="/portFolio_GUYOT/src/interet/js/jquery-1.3.2.js"></script>
            <script src="/portFolio_GUYOT/ext/js/clipboard.min.js"></script>
            <script src="/portFolio_GUYOT/ext/js/main.js"></script>
            <script src="/portFolio_GUYOT/ext/jquery/jquery.min.js"></script>
            <script src="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
<?= $menu->getLienJs(); ?>
    </body>
</html>
