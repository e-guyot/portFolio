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
<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/mesProjets/ParcourSup/css/parcourSup.css?id=4">

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
                        <h1><span>Fiche Prépa - Démarche de réalisation</span></h1>
                    </div>
						<div class="col-md-12 interet-portfolio">
							<div class="row">
                               <p> <img class ="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/identif.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/droit.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/creaFiche.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/newFiche.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/texte.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/texteChoix.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/texteChoixAff.JPG">
                                	</p><P><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/texteChamp.JPG">
                                	</P><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/etape1.JPG">
                                	</p><p><img class="ficheP-photo" src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/affFiche.JPG">
</p>
							</div>
					</div>	
				</div>
			</div>
			<?= $nav->getNav(4);?>
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
