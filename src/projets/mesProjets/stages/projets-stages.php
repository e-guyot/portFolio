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
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-folderback" viewBox="0 0 20 16">
				<title>folder-back</title>
				<path d="M7.5,0C7.4,0,2,0,2,0C0.9,0,0,0.9,0,2l0,12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2c0,0-7.5,0-8,0C9,2,9.9,0,7.5,0z"/>
			</symbol>
			<symbol id="icon-foldercover" viewBox="0 0 20 16">
				<title>folder-cover</title>
				<path d="M2,2h16c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H2c-1.1,0-2-0.9-2-2V4C0,2.9,0.9,2,2,2z"/>
			</symbol>
			<symbol id="icon-folderdummy" viewBox="0 0 20 16">
				<title>folder-dummy</title>
				<path d="M7.5,0C7.4,0,2,0,2,0C0.9,0,0,0.9,0,2l0,12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2c0,0-7.5,0-8,0C9,2,9.9,0,7.5,0z"/><path d="M2,2h16c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H2c-1.1,0-2-0.9-2-2V4C0,2.9,0.9,2,2,2z"/>
			</symbol>
			<symbol id="icon-users" viewBox="0 0 24 24">
				<title>users</title>
				<path style="opacity:0.3;" d="M22.2,17.7l-4-2c-0.5-0.3-0.8-0.8-0.8-1.3v-1.6c0.1-0.1,0.2-0.3,0.4-0.5c0.5-0.8,0.9-1.6,1.2-2.5
				c0.5-0.2,0.9-0.6,0.9-1.2V7c0-0.4-0.2-0.7-0.4-0.9V3.7c0,0,0.5-3.7-4.6-3.7c-5,0-4.6,3.7-4.6,3.7v2.4C10.1,6.3,9.9,6.7,9.9,7v1.7
				c0,0.4,0.2,0.8,0.6,1c0.4,1.8,1.5,3.1,1.5,3.1v1.5c0,0.6-0.3,1.1-0.8,1.3l-3.7,2c-1.1,0.6-1.7,1.7-1.7,2.9v1.3H24v-1.3
				C24,19.4,23.3,18.3,22.2,17.7z"/>
				<path style="opacity:0.5;" d="M7.5,17.7l2.5-1.3c0,0,0,0,0,0l1.2-0.7c0.5-0.3,0.8-0.8,0.8-1.3v-1.5c0,0-0.4-0.5-0.9-1.4l0,0c0,0,0,0,0,0
				c-0.1-0.1-0.1-0.2-0.2-0.3c0,0,0,0,0-0.1c-0.1-0.1-0.1-0.3-0.2-0.4c0,0,0,0,0,0c0-0.1-0.1-0.2-0.1-0.4c0,0,0-0.1,0-0.1
				c0-0.1-0.1-0.3-0.1-0.4c-0.3-0.2-0.6-0.6-0.6-1V7c0-0.4,0.2-0.7,0.4-0.9V3.8C9.8,3.3,8.9,2.9,7.4,2.9c-4,0-4.1,3.3-4.1,3.3v2.1
				C3.1,8.5,2.9,8.8,2.9,9.1v1.4c0,0.4,0.2,0.7,0.5,0.9c0.4,1.6,1.6,2.7,1.6,2.7v1.3c0,0.5-0.3,0.9-0.7,1.1l-2.8,1.7
				C0.6,18.8,0,19.7,0,20.8v1.2h5.8v-1.3C5.8,19.4,6.5,18.3,7.5,17.7z"/>
			</symbol>
			<symbol id="icon-file" viewBox="0 0 20 26.8">
				<title>file</title>
				<path d="M2.3,0C1,0,0,1,0,2.3v22.2c0,1.2,1,2.3,2.3,2.3h15.4c1.2,0,2.3-1,2.3-2.3V6l-6-6H2.3z"/>
				<path style="opacity:0.1;fill:#000;" d="M13.9,3.7V0l6,6h-3.7C14.9,6,13.9,5,13.9,3.7z"/>
			</symbol>
			<symbol id="icon-padlock" viewBox="0 0 24 33.6">
				<title>padlock</title>
				<path d="M23,13.5h-1.7V9.4C21.4,4.2,17.2,0,12,0C6.8,0,2.6,4.2,2.6,9.4v4.1H1c-0.5,0-1,0.4-1,1v18.2c0,0.5,0.4,1,1,1H23c0.5,0,1-0.4,1-1V14.4C24,13.9,23.6,13.5,23,13.5z M13.5,24.5v3.9c0,0.3-0.3,0.6-0.6,0.6h-1.8c-0.3,0-0.6-0.3-0.6-0.6v-3.9c-0.7-0.5-1.1-1.3-1.1-2.1c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6C14.6,23.3,14.2,24.1,13.5,24.5z M16.9,13.5H7.1V9.4c0-2.7,2.2-4.9,4.9-4.9c2.7,0,4.9,2.2,4.9,4.9V13.5z"/>
			</symbol>
			<symbol id="icon-cloud" viewBox="0 0 24 22.2">
				<title>cloud</title>
				<path d="M19.5,5.8c-0.3-1.5-1-2.9-2.2-4c-1.3-1.2-3-1.8-4.7-1.8C11.3,0,10,0.4,8.9,1.1C8,1.7,7.2,2.5,6.6,3.5c-0.2,0-0.5-0.1-0.7-0.1c-2.1,0-3.8,1.7-3.8,3.8c0,0.3,0,0.5,0.1,0.8C0.8,9,0,10.6,0,12.3C0,13.6,0.5,15,1.4,16c1,1.1,2.2,1.7,3.6,1.8c0,0,0,0,0,0h4.2c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H5c-2-0.1-3.7-2-3.7-4.2c0-1.4,0.8-2.7,2-3.4c0.3-0.2,0.4-0.5,0.3-0.8C3.5,7.8,3.4,7.5,3.4,7.2c0-1.4,1.1-2.5,2.5-2.5c0.3,0,0.6,0,0.8,0.1c0.3,0.1,0.7,0,0.8-0.3c0.9-2,2.9-3.2,5.1-3.2c2.9,0,5.3,2.2,5.6,5.1c0,0.3,0.3,0.5,0.6,0.6c2.2,0.4,3.9,2.4,3.9,4.7c0,2.5-1.9,4.6-4.3,4.8h-3.6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h3.7c0,0,0,0,0,0c1.5-0.1,2.9-0.8,4-2c1-1.1,1.6-2.6,1.6-4.1C24,8.9,22.1,6.5,19.5,5.8z M16,12.9c0.3-0.3,0.3-0.7,0-0.9l-3.5-3.5c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.3,0.1-0.5,0.2L8,12c-0.3,0.3-0.3,0.7,0,0.9c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.3-0.1,0.5-0.2l2.4-2.4v11c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7v-11l2.4,2.4C15.3,13.2,15.7,13.2,16,12.9z"/>
			</symbol>
			<symbol id="icon-globe" viewBox="0 0 24 24">
				<title>globe</title>
				<path d="M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12c6.6,0,12-5.4,12-12C24,5.4,18.6,0,12,0z M9.7,4.3l0.6,0.2V3.7l0.2-0.2L10.7,4l0.4,0.5L11,4.8l-0.7,0.2V4.5L9.7,4.9L9.5,4.7L9.7,4.3z M1,11.7c0.1-2.3,0.8-4.5,2.1-6.2c0,0,0.1,0,0.1,0c0,0.2-0.2,0.2,0,0.6c0.3,0.5,0,0.8,0,0.8S2.6,7.4,2.5,7.5C2.3,7.6,2,8.1,2.2,7.9C2.4,7.8,2.7,7.7,2.5,8C2.3,8.3,1.9,8.9,1.8,9.1c-0.1,0.2-0.5,0.7-0.5,1s-0.2,0.7-0.1,1C1.2,11.1,1.1,11.6,1,11.7z M5.3,18.6l-0.2,0.6l0.2,0.5c0,0-0.2,0.2-0.4,0.2c-0.2,0-0.2,0.1-0.4,0.1c-1.6-1.5-2.7-3.4-3.2-5.6c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.2,0.2,0.5,0.3c0.2,0.1,0.3,0.2,0.5,0.3s0.2,0,0.5,0.4C3.4,16,3.3,16,3.4,16.2c0.1,0.2,0.2,0.4,0.3,0.5C3.8,16.9,4,16.9,4.2,17c0.1,0.1,0.3,0.2,0.5,0.2c0.1,0,0.5,0.4,0.7,0.4c0.2,0,0.2,0.5,0.2,0.5L5.3,18.6z M7,2.7C6.4,3.3,6.6,3.1,6.4,3.3C6.3,3.4,6.3,3.5,6.1,3.7C5.8,3.9,5.6,4.1,5.6,4.1L5.2,4.3L4.8,4.1c0,0-0.3,0.1-0.3,0c0,0,0-0.1,0-0.1c1-0.9,2.2-1.7,3.5-2.2C8,1.9,7.8,2.1,7.8,2.1S7.5,2.1,7,2.7z M19.6,17.5c0,0.2-0.1,0.5-0.2,0.6c0,0.2-0.2,0.5-0.4,0.6c-0.1,0.1-0.3,0.3-0.5,0.4c-0.1,0-0.2-0.3-0.2-0.5c0-0.2,0.2-0.6,0.2-0.6s0-0.2,0.1-0.4c0-0.2,0.5-0.4,0.5-0.4l0.3-0.6c0,0,0,0.2,0,0.3C19.7,17,19.6,17.4,19.6,17.5z M19.7,13.6c-0.1,0.1-0.3,0.5-0.5,0.6c-0.1,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.2,0.4-0.4,0.6C18.2,15.6,18,16,18,16s0.1,0.8,0.1,1c0,0.2-0.3,0.6-0.3,0.6L17.5,18L17,18.6l0,0.6c0,0-0.4,0.3-0.6,0.5c-0.2,0.2-0.2,0.3-0.3,0.5c-0.2,0.2-0.6,0.5-0.8,0.5c-0.2,0-0.9,0.2-0.9,0.2v-0.4L14.3,20c0,0-0.2-0.5-0.4-0.7c-0.1-0.2-0.1-0.4-0.3-0.6c-0.2-0.2-0.3-0.4-0.3-0.5c0-0.1,0-0.5,0-0.5s0.2-0.5,0.2-0.6c0.1-0.2,0-0.4-0.1-0.6c-0.1-0.2-0.1-0.6-0.1-0.7c0-0.1-0.3-0.3-0.5-0.5c-0.1-0.1-0.1-0.3-0.1-0.5c0-0.2-0.1-0.5-0.1-0.8c0-0.3-0.4-0.1-0.6,0c-0.2,0.1-0.4-0.1-0.4-0.3c0-0.2-0.5,0-0.7,0.1c-0.3,0.2-0.6,0.2-1,0.3c-0.3,0.1-0.5-0.1-0.5-0.1S9.2,13.8,9,13.7c-0.2-0.1-0.4-0.4-0.6-0.6c-0.2-0.2-0.6-0.8-0.6-1.1c0-0.2,0-0.4,0-0.7c0-0.3,0-0.5,0-0.7c0-0.2,0.2-0.5,0.3-0.7c0.1-0.2,0.6-0.5,0.7-0.5C8.9,9.4,9.2,9.2,9.2,9c0-0.2,0.2-0.2,0.2-0.4C9.5,8.4,9.8,8,10.2,8.2c0,0,0.3,0,0.5-0.1c0.1,0,0.5-0.2,0.6-0.2c0.2-0.1,0.6-0.1,0.6-0.1s0.3,0.1,0.4,0.1c0.1,0,0.5-0.1,0.5-0.1S13,8.4,13,8.5c0,0.1,0.1,0.2,0.3,0.3c0.2,0.1,1.2,0.3,1.6,0c0.1-0.1,0.4,0.1,0.4,0.1s1,0.2,1.2,0.3c0.2,0.1,0.5,0.2,0.5,0.3c0.1,0.1,0.4,0.5,0.4,0.6c0,0.1,0.2,0.6,0.3,0.7c0,0.2,0.2,0.6,0.3,0.8c0.1,0.2,0.8,1.1,1.1,1.5l0.7-0.1C19.9,13.1,19.8,13.5,19.7,13.6z M22.7,12.1c0-0.2-0.3-0.7-0.3-0.7S22.2,11,22,10.9c-0.2-0.1-0.3-0.3-0.6-0.5c-0.3-0.2-0.4-0.2-0.7-0.2c-0.2,0-0.5-0.3-0.8-0.5c-0.3-0.2-0.3-0.1-0.3-0.1s0.3,0.5,0.3,0.6s0.4,0.3,0.7,0.2c0,0,0.2,0.5,0.4,0.6s0,0.2-0.3,0.4c-0.2,0.2-0.2,0.1-0.3,0.2c-0.1,0.1-0.5,0.3-0.7,0.4c-0.1,0.1-0.6,0.3-0.9,0.1c-0.1-0.1-0.1-0.4-0.2-0.5c-0.1-0.2-0.9-1.4-1.4-2c-0.1-0.1-0.2-0.4-0.4-0.5c-0.1-0.1,0.3-0.1,0.3-0.1s0-0.3,0-0.5c0-0.2,0-0.5,0-0.5s-0.4,0.2-0.5,0.3c-0.1,0.1-0.2-0.2-0.4-0.4c-0.2-0.2-0.3-0.5-0.4-0.7c0-0.2,0.2-0.3,0.2-0.3l0.4-0.2c0,0,0.5-0.1,0.7,0c0.3,0,0.7,0.1,0.7,0.1s0.1-0.3,0-0.4c-0.2-0.1-0.5-0.3-0.7-0.3c-0.2,0,0.1-0.2,0.3-0.4l-0.5-0.1c0,0-0.4,0.2-0.5,0.2c-0.1,0-0.3,0.1-0.5,0.3C16,6.6,16.2,6.9,16,6.9c-0.2,0.1-0.3,0.1-0.4,0.2c-0.1,0-0.5,0-0.5,0c-0.4,0-0.2,0.4,0,0.5l-0.3-0.4l-0.2-0.6c0,0-0.4-0.2-0.5-0.3c-0.2-0.1-0.7-0.4-0.7-0.4l0,0.4l0.5,0.5l0,0l0.3,0.3l-0.5,0V6.9c-0.8-0.1-0.4-0.3-0.5-0.3c-0.1-0.1-0.4-0.3-0.4-0.3s-0.5,0.1-0.6,0.1c-0.1,0-0.2,0.2-0.4,0.2c-0.2,0.1-0.4,0.2-0.4,0.3s-0.4,0.5-0.5,0.7c-0.2,0.2-0.5,0.1-0.6,0.1c-0.1,0-0.7-0.2-0.7-0.2V6.9c0,0,0.1-0.4,0-0.5l0.4-0.1l0.6-0.1l0.2-0.1l0.3-0.3c0,0-0.3-0.2-0.1-0.5c0.1-0.1,0.5-0.2,0.6-0.3c0.2-0.1,0.4-0.2,0.4-0.2s0.3-0.2,0.6-0.5c0,0,0.2-0.1,0.5-0.2c0,0,0.7,0.6,0.8,0.6s0.6-0.3,0.6-0.3s0.1-0.4,0.1-0.5c0-0.1-0.2-0.5-0.2-0.5S14,3.5,13.8,3.7C13.7,3.8,13.6,4,13.6,4S13,4,13,3.9c0-0.1-0.1-0.3-0.2-0.5c0-0.1-0.4-0.1-0.6,0c-0.2,0.1,0-0.4,0-0.4s0.2-0.3,0.4-0.3c0.2,0,0.5-0.2,0.7-0.3C13.5,2.3,14,2,14.2,2c0.2,0,0.5,0,0.6,0c0.1,0,0.6,0,0.6,0L16.3,2c0,0,0.7,0.3,0.5,0.5c0,0,0.3,0.2,0.4,0.3c0.1,0.1,0.4-0.1,0.6-0.2C20.9,4.6,23,8.1,23,12c0,0.2,0,0.4,0,0.6C22.9,12.4,22.7,12.2,22.7,12.1z M9.9,4.5L9.9,4.5L9.9,4.5L9.9,4.5z"/>
			</symbol>
		</svg>
		<div class="row" >
			<?php echo $menu->getButton();?> 
			<div class="col-md-11 col-11 group-center">
				<div class="skill-group-vertical">
					<div class="container">
						<div class="col-md-12 titre-portfolio">
							<h1><span>Mes stages</span></h1>
						</div>
						<div class="col-md-12 interet-portfolio">
						<section class="content--durga">
							<div class="grid">
								<a href="/portFolio_GUYOT/Projets/Stages/Sncf">
								<div class="grid__item">
									<div class="folder folder--durga folder--a">
										<div class="folder__icon folder__icon--perspective">
											<div class="folder__icon-img folder__icon-img--back">
												<svg class="folder__icon-svg"><use xlink:href="#icon-folderback"></use></svg>
											</div>
											<div class="folder__icon-deco"></div>
											<div class="folder__preview folder__preview--text">
												<p class="folder__detail">Application web</p>
												<p class="folder__detail">local</p>
												<p class="folder__detail">Préparation</p>
												<p class="folder__detail">de fiche</p>
												<p class="folder__detail">...</p>
											</div>
											<div class="folder__icon-img folder__icon-img--cover">
												<svg class="folder__icon-svg"><use xlink:href="#icon-foldercover"></use></svg>
												<svg class="folder__icon-svg folder__icon-svg--deco"><use xlink:href="#icon-globe"></use></svg>
											</div>
										</div>
										<h3 class="folder__caption">Stage à la SNCF</h3>
									</div>
									
								</div></a>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<a href="/portFolio_GUYOT/Projets/Stages/Onisep"><div class="grid__item">
									<div class="folder folder--durga folder--b">
										<div class="folder__icon folder__icon--perspective">
											<div class="folder__icon-img folder__icon-img--back">
												<svg class="folder__icon-svg"><use xlink:href="#icon-folderback"></use></svg>
											</div>
											<div class="folder__icon-deco"></div>
											<div class="folder__preview folder__preview--text">
												<p class="folder__detail">Application</p>
												<p class="folder__detail">Intranet</p>
												<p class="folder__detail">Affichage</p>
												<p class="folder__detail">statistique</p>
												<p class="folder__detail">parcourSup</p>
												<p class="folder__detail">...</p>
											</div>
											<div class="folder__icon-img folder__icon-img--cover">
												<svg class="folder__icon-svg"><use xlink:href="#icon-foldercover"></use></svg>
												<svg class="folder__icon-svg folder__icon-svg--deco"><use xlink:href="#icon-globe"></use></svg>
											</div>
										</div>
										<h3 class="folder__caption">Stage à l'ONISEP</h3>
									</div>
								</div></a>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<div class="grid__item"><div class="dummy"><svg><use xlink:href="#icon-folderdummy"></use></svg></div></div>
								<a href="/portFolio_GUYOT/Projets"><div class="grid__item">
									<div class="folder folder--durga folder--c">
										<div class="folder__icon folder__icon--perspective">
											<div class="folder__icon-img folder__icon-img--back">
												<svg class="folder__icon-svg"><use xlink:href="#icon-folderback"></use></svg>
											</div>
											<div class="folder__icon-deco"></div>
											<div class="folder__preview folder__preview--text">
												<p class="folder__detail">Revenir </p>
												<p class="folder__detail">aux différents</p>
												<p class="folder__detail">projets</p>
											</div>
											<div class="folder__icon-img folder__icon-img--cover">
												<svg class="folder__icon-svg"><use xlink:href="#icon-foldercover"></use></svg>
												<svg class="folder__icon-svg folder__icon-svg--deco"><use xlink:href="#icon-globe"></use></svg>
											</div>
										</div>
										<h3 class="folder__caption">Retour à mes projets</h3>
									</div>
								</div></a>
						</section>
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
    	<script src="/portFolio_GUYOT/src/projets/js/anime.min.js"></script>
    	<script src="/portFolio_GUYOT/src/projets/js/charming.min.js"></script>
    	<script src="/portFolio_GUYOT/src/projets/js/main.js"></script>
    	<script>
		(function() {
			new DurgaFx(document.querySelector('.content--durga .folder--a'));
			new DurgaFx(document.querySelector('.content--durga .folder--b'));
			new DurgaFx(document.querySelector('.content--durga .folder--c'));
			new DurgaFx(document.querySelector('.content--durga .folder--d'));
			new DurgaFx(document.querySelector('.content--durga .folder--e'));
		})();
		</script>
    	<?php echo $menu->getLienJs(); ?>
	</body>
</html>
