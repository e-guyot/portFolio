$( document ).ready(function() {

	getClass();

	$('body').on( "click", ".portfolio-menu-accueil", function(){
		document.location.href="/portFolio_GUYOT/Accueil";
	});

	$('body').on( "click", ".portfolio-menu-abouteMe", function(){
		document.location.href="/portFolio_GUYOT/AboutMe";
	});

	$('body').on( "click", ".portfolio-menu-compet", function(){
		document.location.href="/portFolio_GUYOT/Competences";
	});

	$('body').on( "click", ".portfolio-menu-monParcour", function(){
		document.location.href="/portFolio_GUYOT/MonParcour";
	});
	$('body').on( "click", ".portfolio-menu-projets", function(){
		document.location.href="/portFolio_GUYOT/Projets";
	});

	$('body').on( "click", ".portfolio-menu-interets", function(){
		document.location.href="/portFolio_GUYOT/Interet";
	});

	$('body').on( "click", ".portfolio-menu-contactMe", function(){
		document.location.href="/portFolio_GUYOT/ContactMe";
	});
	
	$( 'body' ).on( "mouseover",'.nav__item', function(e){
		var id = e.currentTarget.children[1].attributes.id.value;
		if(id!="" && !$(this).hasClass("nav__item--current")){
			$('#'+id).css('opacity', '1');
			$('#'+id).css('margin-top', '22px');
			$('#'+id).css('margin-left', '40px');
		}
	});

	$( 'body' ).on( "mouseout",'.nav__item', function(e){
		var id = e.currentTarget.children[1].attributes.id.value;
		if(id!="" && !$(this).hasClass("nav__item--current")){
			$('#'+id).css('opacity', '0');
		}
	});
});

function getClass(){
	var url = window.location.href;
	var arr = url.split('/');
	switch (arr[4]){
		case 'AboutMe':
			return $(".portfolio-menu-abouteMe").addClass("nav__item--current");
		break;

		case 'Competences':
			return $(".portfolio-menu-compet").addClass("nav__item--current");
		break;

		case 'MonParcour':
			return $(".portfolio-menu-monParcour").addClass("nav__item--current");
		break;

		case 'Projets':
			return $(".portfolio-menu-projets").addClass("nav__item--current");
		break;

		case 'Interet':
			return $(".portfolio-menu-interets").addClass("nav__item--current");
		break;

		case 'ContactMe':
			return $(".portfolio-menu-contactMe").addClass("nav__item--current");
		break;
	}
}
