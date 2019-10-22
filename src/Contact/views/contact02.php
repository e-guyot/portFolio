<?php
	$doc_ROOT = 'DOCUMENT_ROOT';
	include_once($_SERVER[$doc_ROOT].'/portFolio_GUYOT/class/token.class.php');
	include_once($_SERVER[$doc_ROOT].'/portFolio_GUYOT/class/msg.class.php');
	$token = new Token;
	$msg = new Msg;
?>
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
					<div class="container ">
						<div class="col-md-12 titre-portfolio">
							<h1><span>Me Contacter</span></h1>
						</div>
						<?php
							if(isset($_GET) && is_array($_GET) && array_key_exists('msg',$_GET)){
								echo $msg->msgContact($_GET['msg']);
							} 
						?>
						<div class="col-md-8 offset-md-2">
							<form class="form-signin" action="/portFolio_GUYOT/SavContact" method="post">
								<div class="row competences-block">
									<div class="col-md-6 portfolio-contact-nom titre-portfolio-basique">
										<label for="portfolio-contact-labelNom">Nom</label>
										<input type="text" class="form-control" id="portfolio-contact-labelNom" aria-describedby="basic-addon3" required>
									</div>
									<div class="col-md-6 portfolio-contact-nom titre-portfolio-basique">
										<label for="portfolio-contact-labelMail">E-mail</label>
										<input type="email" class="form-control" id="portfolio-contact-labelMail" aria-describedby="basic-addon3" required>
									</div>
								</div>
								<div class="row competences-block">
									<div class="col-md-12 portfolio-contact-nom titre-portfolio-basique">
										<label for="portfolio-contact-labelMail">Message</label>
										<textarea class="form-control" id="portfolio-contact-labelMail" rows="5" required></textarea>
									</div>
								</div>
								<div class="row competences-block">
									<div class="col-md-12 btn-portfolio-basique">
										<input type="hidden" name="_csrf_token" value="<?php echo $token->SessionStart(); ?>" />
										<input type="submit" class="btn btn-primary btn-lg btn-block" value="Envoyer">
									</div>
								</div>
							</form>
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