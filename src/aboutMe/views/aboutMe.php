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

		<?php include_once($_SERVER['DOCUMENT_ROOT'].'/portFolio_GUYOT/src/menuTriangle/views/menuTriangle.php'); 
		$menu = new Menu; 
		echo $menu->getLienCss();
		?>
	</head>
	<body>
		<div class="row" >
			<?php echo $menu->getButton();?> 
			<div class="col-md-11 col-11 group-center">
				<div class="skill-group-vertical">
					<div class="container ">
						<div class="col-md-12 titre-portfolio">
							<h1><span>À propos de moi</span></h1>
						</div>
						<div class="row">
						<div class="row">
							<div class="col-md-3">
						<img id="aboutMe-photo" src="/portFolio_GUYOT/src/aboutMe/img/photo.JPG">	
						</div>
						<div class="col-md-9 text-portfolio">
<p>
Bienvenue, <br> <br>Vous êtes en train de visualiser mon portail web. Je me présente je m'appelle <span>Estelle GUYOT</span>. Je suis actuellement en <a href="https://www.ac-paris.fr/serail/jcms/s2_455888/fr/bts-sio" target="_blank"><span>BTS S.I.O.</span></a> à Paris et je souhaiterais poursuivre mes études dans le développement. Pour le moment j'approfondis mes connaissances et tente de nouvelles technologies. Ma prochaine quête à ce sujet serait soit d'apprendre <span>angular JS</span> soit<span> Symphony 4</span>. Pour avoir plus d'informations à mon sujet, mes projets ou mes intérêts vous pouvez surfer sur les différents onglets. Si vous souhaitez me contacter vous pouvez me laisser un message dans l'onglet <span>"me contacter"</span> ou en me contactant sur <span>LinkedIn</span>, lien ci-dessous. Vous trouverez aussi ci-dessous le lien de mon <span>CV</span>.  </p>							
						</div>
</div>
						<div class="col-md-12 logo-portfolio">
							<a target="_heopenit" href="/portFolio_GUYOT/src/aboutMe/pdf/CV.pdf"><img src="/portFolio_GUYOT/src/aboutMe/img/cv.png" width="90" alt="Bootstrap" class="img-circle"></a>
							<a target="_blank" href="https://www.linkedin.com/in/estelle-guyot-452117161/"><img src="/portFolio_GUYOT/src/aboutMe/img/linkedin.png" width="90" alt="Bootstrap" class="img-circle"></a>
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