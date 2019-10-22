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


        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/interet/css/interet.css?id=5">

        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . '/portFolio_GUYOT/src/menuTriangle/views/menuTriangle.php');
        $menu = new Menu;
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
                            <h1><span>Intérêts..... Erreur System..... Affichage Corrompus....</span></h1>
                        </div>
                        <div class="col-md-12 interet-portfolio">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/portFolio_GUYOT/src/interet/img/theatre.jpg" class="img-thumbnail portfolio-img-theater">
                                    <h2>The<span>ã</span>tre</h2>
                                </div>
                                <div class="col-md-4">
                                    <img src="/portFolio_GUYOT/src/interet/img/photo.gif" class="img-thumbnail portfolio-img-theater">
                                    <h2><span>Þ</span>h<span>ð</span>t<span>ð</span>gr<span>ã</span>phie</h2>
                                </div>
                                <div class="col-md-4">
                                    <img src="/portFolio_GUYOT/src/interet/img/avion.gif" class="img-thumbnail portfolio-img-theater">
                                    <h2>Vo<span>Ÿ</span><span>ã</span>ge</h2>
                                </div>
                                <div class="col-md-4">
                                    <img src="/portFolio_GUYOT/src/interet/img/cheval.gif" class="img-thumbnail portfolio-img-theater">
                                    <h2><span>Ë</span>quit<span>ã</span>tion</h2>
                                </div>
                                <div class="col-md-4">
                                    <img src="/portFolio_GUYOT/src/interet/img/run.jpg" class="img-thumbnail portfolio-img-theater">
                                    <h2>Cour<span>š</span>e à pi<span>Ë</span>d</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 msgsysteme-portfolio">
                            01001000 01100101 01101100 01110000 00100000 01101101 01100101 00100000 00100001 00100001 00100001
                        </div>
                    </div>	
                </div>
            </div>
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
