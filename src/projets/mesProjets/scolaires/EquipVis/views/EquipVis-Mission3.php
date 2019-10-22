<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=11" />
        <title> Estelle GUYOT </title>
        <link rel="stylesheet" href="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/css/bootstrap.css">  
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Space+Mono" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-tsula.css?id=1">
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/component.css?id=2" />    
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-titre.css?id=2">
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/aboutMe/css/aboutMe.css?id=5">

        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . '/portFolio_GUYOT/src/menuTriangle/views/menuTriangle.php');
        include_once($_SERVER['DOCUMENT_ROOT'] . '/portFolio_GUYOT/src/projets/mesProjets/scolaires/GSB_fct.php');
        $menu = new Menu;
        $nav = new NavGSB;
        echo $menu->getLienCss();
        ?>
    </head>
    <body>
        <div class="row" >
<?php echo $menu->getButton(); ?> 
            <div class="col-md-11 col-11 group-center">
                <div class="skill-group-vertical">
                    <div class="container ">
                        <div class="col-md-12 titre-portfolio">
                            <h1><span>Equiper les Visiteurs - Mission 3</span></h1>
                        </div>
                        <div class="col-md-12 text-portfolio">

                            <p>Gestion de version (GIT) : <br>
                                <img src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/EquipVis/img/schema.JPG">
                                <br> 
                                Gestion de tickets (SourceForge) : 
                                <br>
                                <img src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/EquipVis/img/ticket.PNG">
                                <br> 
                                <img src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/EquipVis/img/ticket2.PNG">
                                <br> 
                                <img src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/EquipVis/img/ticket3.JPG">
                            </p>                           
                        </div>
                        <div class="col-md-12 logo-portfolio">
                        </div>
                    </div>
                </div>
<?= $nav->getNav(4, 'EquipVis'); ?>
            </div>
        </div>

<?php echo $menu->getFooter(); ?>
        <script src="/portFolio_GUYOT/ext/js/clipboard.min.js"></script>
        <script src="/portFolio_GUYOT/ext/js/main.js"></script>
        <script src="/portFolio_GUYOT/ext/jquery/jquery.min.js"></script>
        <script src="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
<?php echo $menu->getLienJs(); ?>
    </body>
</html>