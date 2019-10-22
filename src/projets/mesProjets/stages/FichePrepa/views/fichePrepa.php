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
                        <h1><span>Fiche Prépa</span></h1>
                    </div>
						<div class="col-md-12 text-portfolio">
							<div class="row">
                                <p>La société SNCF (Société Nationale des Chemins de fer Français) est un groupe industriel français
de transport ferroviaire et routier. Elle a été créée le 1er janvier 1938 par un regroupement de
plusieurs entités ferroviaires de
l’époque de part son
développement de ces
différents secteurs d’activités.
La SNCF a décidé de diviser
ces différents secteurs nommé
EPIC.
Bien que le coeur de métier de
la sncf soit le transport
ferroviaire, elle est présente sur
d’autres secteurs comme
l’ingénierie, les liaisons
maritimes, le commerce en
ligne ou encore l’informatique
au travers de ses 856 filiales.
Quelques chiffres :
- 30 000 kms de lignes
ferroviaires
- 15 000 trains gérés / jour
- 5 milliards de passagers par an dans le monde
- C.A : 31,4M€
- 260 000 collaborateurs
- 120 pays
- 13.5 millions de voyageurs / jour dans le monde
- 8.2 M€ d’investissements
L’entreprise possède plusieurs technicentres afin d’assurer la maintenance des trains circulant sur
les lignes ferroviaires.
Le Technicentre Matériel de Villeneuve (T.M.V), dans lequel j’ai effectué mon stage, emploie plus
de 900 personnes. Il est situé au Sud-Est de Paris, à proximité de Villeneuve-Saint-Georges. Sa
superficie est de 550 000 m2 et 35 000 m2 de bâtiments.
<br>Depuis déjà quelques dizaines d’années, les systèmes d’informations sont entrés dans le quotidien
de la SNCF, mais avec l’évolution de l’informatique, les systèmes d’informations ont pris une place
considérable dans le quotidien des agents.<br><img src="/portFolio_GUYOT/src/projets/mesProjets/stages/FichePrepa/img/schema.JPG" ></p>
							</div>
					</div>	
				</div>
			</div>
			<?= $nav->getNav(0);?>
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
