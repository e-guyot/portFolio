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
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/menuTriangle/css/css.css">
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/mesProjets/ParcourSup/css/parcourSup.css?id=2">

        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/interet/css/interet.css?id=5">

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
                            <h1>ParcourSup
                                <img src="/portFolio_GUYOT/src/projets/mesProjets/stages/ParcourSup/img/LogoOnisep.jpg" alt="Bootstrap"></h1>
                        </div>
                        <div class="col-md-12 text-portfolio">
                            <div class="row">
                                <p>Durant mon Stage de première année de BTS SIO, j'ai pu effectuer un stage au sein de l'ONISEP.
                                    <br>
                                    <br>
                                    L’Office National d'Information Sur les Enseignements et les Professions (ONISEP) est un établissement public à caractère administratif (EPA) dépendant directement du ministère de l’éducation nationale.
                                    L'établissement, qui compte environ 550 employés, est organisé en réseau : 
                                    Les services centraux situés à Lognes en Seine-et-Marne.
                                    17 délégations régionales réparties sur 28 sites géographiques correspondant aux académies scolaires (y compris les DROM-COM).<!--<img src="/portFolio_GUYOT/src/projets/mesProjets/ParcourSup/img/CarteOnisep.gif" width="300">-->

                                    Sa mission consiste à diffuser gratuitement aux élèves et à leurs familles des informations sur les métiers et les formations au travers de divers outils et services (brochures, site internet…).
                                    <br>
                                    <br>
                                    Depuis janvier 2018, pour le compte du Ministère de l’enseignement supérieur, l’ONISEP gère le numéro vert dédié à PARCOURSUP (le 0800 400 070). Ce numéro est amené à répondre à toutes les questions que les usagers peuvent se poser sur le nouveau dispositif d’accès aux études supérieures. Cette nouvelle fonctionnalité est présente dans toute la France et les DROM-COM (numéros verts distincts de la métropole). Lorsque l’usager appelle ce numéro vert, on lui demande d’indiquer son académie puis de faire un choix compris entre 1 à 3 afin de mieux se rattacher à sa demande. 
                                    <br><span>Le choix 1</span> étant un besoin d’information classique d’orientation scolaire.
                                    <br><span>Le choix 2</span> étant un besoin d’information sur la procédure parcoursup.
                                    <br><span>Le choix 3</span>  étant un besoin d’action spécifique sur le dossier parcoursup de l’usager.
                                    Si le flux téléphonique est important, la mise en relation avec un conseiller peut ne pas aboutir. Dans ce cas l’usager est soit dissuadé, soit il abandonne de lui-même.
                                </p>
                            </div>
                        </div>	
                    </div>
                </div>
            <?= $nav->getNav(0); ?>
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
