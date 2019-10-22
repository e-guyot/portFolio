<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=11" />
		<title> Estelle GUYOT </title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Space+Mono" rel="stylesheet">
		<link rel="stylesheet" href="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/css/bootstrap.css">	
		<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/projets/css/durga.css" />
		<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-tsula.css?id=1">
		<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/ext/css/component.css?id=2" />	
		<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/accueil/css/style-titre.css?id=2">
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
					<div class="container">
						<div class="col-md-12 titre-portfolio">
							<h1><span>Veille Technologique</span></h1>
						</div>
				<iframe 
 src="//www.pearltrees.com/estelle_g?embed=2&d=201904141457"
 width="100%" height="500">
  <p>
    <a href="http://www.pearltrees.com/estelle_g">
      Un lien à utiliser dans les cas où les navigateurs ne supportent
      pas les <i>iframes</i>.
    </a>
  </p>
</iframe>
						</div>
					</div>	
				</div>
			</div>
		                    <?php echo $menu->getFooter(); ?>
		<script src="/portFolio_GUYOT/ext/js/clipboard.min.js"></script>
		<script src="/portFolio_GUYOT/ext/js/main.js"></script>
		<script src="/portFolio_GUYOT/ext/jquery/jquery.min.js"></script>
    	<script src="/portFolio_GUYOT/ext/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    	<script src="/portFolio_GUYOT/src/projets/js/anime.min.js"></script>
    	<script src="/portFolio_GUYOT/src/projets/js/charming.min.js"></script>
    	<script src="/portFolio_GUYOT/src/projets/js/main.js"></script>
    	<?php echo $menu->getLienJs(); ?>
	</body>
</html>
