<?php
class Menu{


function getButton(){ //placer après class row
	return '<div class="col-9 align-self-ends">
           
  <h1 class="codrops-header__title"> &lt;/&gt;Estelle GUYOT <br> D&Eacute;VELOPPEUSE WEB&lt;/&gt;</h1>
 </div>
    <div class="col-3">
     <nav class="navbar navbar-expand-xs">
     <a href="javascript:history.go(-1)"><img id="menu-fleche" src="/portFolio_GUYOT/src/menuTriangle/photo/fleche.png"></a>
     <a href="/portFolio_GUYOT/Accueil"><img id="menu-home" src="/portFolio_GUYOT/src/menuTriangle/photo/home.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/Accueil">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/AboutMe">A propos de moi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/Competences">Mes Competences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/MonParcour">Mon Parcours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/Projets">Mes Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/Interet">Mes Intérêts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/portFolio_GUYOT/ContactMe">Contactez moi</a>
      </li>
    </ul>
  </div>
</nav></div>';
	}
        
        function getFooter(){
            return '<footer>
                <div class="col-12">
                <nav class="demos">
				<span>Estelle GUYOT © 2019</span>
			</nav>
                        </div>
            </footer>';
        }
                	function getLienCss(){ //lien placer dans le header
		return '<link rel="stylesheet" type="text/css" href="/portFolio_GUYOT/src/menuTriangle/css/css.css?id=2" />';
	}

	function getLienJs(){ //lien après le main
		return '<script src="/portFolio_GUYOT/src/menuTriangle/js/clipboard.min.js"></script><script src="/portFolio_GUYOT/src/menuTriangle/js/main.js"></script><script src="/portFolio_GUYOT/src/menuTriangle/js/menuTriangle.js?id=8"></script>';
	}
}
?>