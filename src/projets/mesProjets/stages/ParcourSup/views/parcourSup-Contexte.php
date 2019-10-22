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
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/mesProjets/ParcourSup/css/parcourSup.css?id=5"><link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/menuTriangle/css/css.css">

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
                            <h1>ParcourSup : Le Contexte</h1></div>
                        <div class="col-md-12 text-portfolio">
                            <div class="row">
                                <p>
                                    Depuis la mise en place de ce dispositif, la direction de l’ONISEP doit rendre compte de l’activité du numéro vert au ministère. À ce titre, le département informatique de l’ONISEP est sollicité pour produire des indicateurs statistiques pertinents. Récemment, il a fallu mettre en place des indicateurs mesurant l’activité en rectorat du choix numéro 3. C’est dans ce contexte qu’il m’a été demandé de travailler sur ces indicateurs.

                                    L'environnement de travail 

                                    Dans un premier temps, mon environnement de travail a dû être mis en place. Mon poste client devait posséder une autorisation afin d’accéder aux serveurs contenant les bases de données liées à la gestion du numéro vert. Pour exploiter ces bases de données, l’installation d’outils de requête SQL, DBVisualizer et MySQL Workbench a été nécessaire.

                                    Ensuite, pour mieux comprendre le dispositif technique j’ai eu une mini formation. On m’a présenté le logiciel de gestion de flux téléphonique Ireflet utilisé actuellement par l’ONISEP. On m’a également présenté un outil développé en interne qui permet de présenter et d’extraire des données d’Ireflet sous forme HTML codé en PHP. 
                                    Enfin le pilote technique m’a demandé de développer des indicateurs spécifiques selon son besoin à travers l’outil interne HTML/PHP.

                                    Nous avons également eu des réunions en mode projet avec l’ensemble des personnes métier de l’ONISEP gérant le dispositif. Lors de ces réunions, il a été décidé de tenter une consolidation en temps réel des données de tous les serveurs afin de pouvoir fournir des indicateurs en journée. Auparavant la consolidation était effectuée tous les soirs et les chiffres transmis au ministère étaient décalés d’une journée. 
                                    Ces tests de consolidation en temps réel ont été concluants, les bandes passantes étant suffisamment résistantes pour le passage de ces différents flux.
                                    <br><img src="/portFolio_GUYOT/src/projets/mesProjets/stages/ParcourSup/img/schemaOnisep.JPG" id="img-schemaOnisep"/> </p>


                            </div>
                        </div>	
                    </div>
                </div>
            <?= $nav->getNav(1); ?>
            </div>
<?php echo $menu->getFooter(); ?>
            <script src="/portFolio_GUYOT/src/interet/js/jquery.capSlide.js" type="text/javascript"></script>
            <script type="text/javascript" src="/portFolio_GUYOT/src/interet/js/jquery-1.3.2.js"></script>
            <script src="/portFolio_GUYOT/ext/js/clipboard.min.js"></script>
            <script src="/portFolio_GUYOT/ext/js/main.js"></script>
            <script src="/portFolio_GUYOT/ext/jquery/jquery.min.js"></script>
            <script src="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
<?php echo $menu->getLienJs(); ?>
    </body>
</html>
