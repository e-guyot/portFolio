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
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/mesProjets/scolaires/JavaGSB/css/java.css">

        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />

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
<?= $menu->getButton(); ?> 
            <div class="col-md-11 col-11 group-center">
                <div class="skill-group-vertical">
                    <div class="container">
                        <div class="col-md-12 titre-portfolio">
                            <h1>GSB - Tri par Département</h1>
                        </div>
                        <div class="col-md-12 text-portfolio">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><img src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/JavaGSB/img/arborescence.JPG"> </p></div>
                                <div class="col-md-9"><p>Lorsque l'utilisateur choisi le Tri par Départment une nouvelle page s'affiche : <img id="img-triDep" src="/portFolio_GUYOT/src/projets/mesProjets/scolaires/JavaGSB/img/triDep.JPG"> <br><br> A l'aide d'une boucle on affiche tous les département de la base de données. La requête utilisé dans le DAO pour permettre cet affichage est : "select distinct departement from medecin". L'utilisateur sélectionne le département souhaitez puis valide ce choix. Une fois le choix souhaitez, il est récupéré à l'aide de la balise form. Le fichier Control.java permet d'envoyer les informations obtenu à la servlet pour mettre l'affichage des médecins du département souhaité. 
                                    </p></div>
                            </div>
                        </div>	
                    </div>
                </div>
            <?= $nav->getNav(2, 'Java'); ?>
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
