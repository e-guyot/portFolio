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
                        <h1><span>Fiche Prépa - Contexte</span></h1>
                    </div>
						<div class="col-md-12 text-portfolio">
							<div class="row">
                                <p>Aujourd’hui, les préparations de poste de travail se font sous format papier et sont archivées dans un classeur. Le formulaire papier étant devenu obsolète, complexe, la SNCF souhaite remédier aux contraintes que peut engendrer le format physique, puisque la politique actuelle de l’entreprise consiste à dématérialiser l’ensemble de ces outils et processus. Le projet « Fiche préparation de poste de travail » s’inscrit donc dans cette démarche de dématérialisation. Le service informatique utilise ce formulaire pour la préparation et le suivi des postes de travail déployés sur site. Le formulaire de préparation de poste permet de mettre les postes au standard de SNCF, de la réception à la livraison et archiver les informations relatives aux ordinateurs. Le service informatique local souhaite remplacer le <a href="/portFolio_GUYOT/Projets/Stages/Sncf/fichePdf">formulaire papier</a>. Pour cela le service a mis en place une application web qui reprend le même principe, afin d’améliorer l’organisation des fiches. Puisque les fiches actuels sont archivées dans un classeur et il est donc compliqué d’aller en chercher une sachant qu’on en compte plus d’une centaine. Il faut prendre en compte les différentes contraintes de l’entreprise, notamment liées à la compatibilité des applications et aux fonctionnalités existantes.
</p>
							</div>
					</div>	
				</div>
			</div>
			<?= $nav->getNav(1);?>
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
