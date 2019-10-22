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

		<?php include_once($_SERVER['DOCUMENT_ROOT'].'/portFolio_GUYOT/src/menuTriangle/views/menuTriangle.php'); 
		include_once($_SERVER['DOCUMENT_ROOT'].'/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/views/fichePrepa_fct.php');
		$menu = new Menu; 
		$nav = new NavFichePrepa;
		echo $menu->getLienCss();
		?>
	</head>
	<body>
		<div class="row" >
			<?= $menu->getButton();?> 
			<div class="col-md-11 col-11 group-center">
				<div class="skill-group-vertical">
					<div class="container">
						<div class="col-md-12 titre-portfolio">
                        <h1><span>Fiche Prépa - Le planning</span></h1>
                    </div>
						<div class="col-md-12 text-portfolio">
							<div class="row">
                                <p>Grâce à l’outil <a target="_blank" href="https://trello.com">trello</a>, j’ai pu suivre mon avancement et donc organiser mon travail en fonction du
retard ou non. Sachant que le temps imparti était que l’application soit fonctionnelle avant la fin du
stage.<br>
<img src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/trello.JPG"></p>
							</div>
					</div>	
				</div>
			</div>
			<?= $nav->getNav(3);?>
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
