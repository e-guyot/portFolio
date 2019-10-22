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
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/aboutMe/css/aboutMe.css?id=4">
        <link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/monParcour/css/monParcour.css?id=6">

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
                    <div class="container ">
                        <div class="col-md-12 titre-portfolio">
                            <h1><span>Mon parcours</span></h1>
                        </div>
                        <div class="col-md-12 time-portfolio">
                            <div class="col-md-12">
                                <div class="page-header-portfolio">
                                   <!-- « Try not to become a man of sucess but rather try to become a man of value » Albert Einstein.-->
                                </div>
                                <div style="display:inline-block;width:100%;overflow-y:auto;">
                                    <ul class="timeline timeline-horizontal">
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Mastère 1 Développement web & mobile</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2019-2021</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Ecole IPSSI</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">BTS SIO option SLAM</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2019</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p><img src="/portFolio_GUYOT/src/monParcour/img/certificate.png" class="img-thumbnail portfolio-img-theater"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Stage développement</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2018-2019</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>8 semaines au sein de la SNCF pour la création d'une appli web local en php, HTML, JS, Jquery et mysql MYSQLI.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Animateur CityOne</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2018-2019</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Travail étudiant.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Stage développement</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2018</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>4 semaines au sein de l'ONISEP pour la modification d'une appli web local en php, HTML, CSS, MYSQL.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">PERMIS B</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2018</small></p>
                                                </div>
                                                <div class="timeline-body timeline-center">
                                                    <p><img src="/portFolio_GUYOT/src/monParcour/img/car.png" class="img-thumbnail portfolio-img-theater"></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">BAFA</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2017</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Pour me permettre d'ameliorer ma sociabilité, d'acquérir des responsabilité et de l'initiative et d'enrichir mon expérience professionnel.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge purple"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">BAC S</h4>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2017</small></p>
                                                </div>
                                                <div class="timeline-body timeline-center">
                                                    <p><img src="/portFolio_GUYOT/src/monParcour/img/certificate.png" class="img-thumbnail portfolio-img-theater"></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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