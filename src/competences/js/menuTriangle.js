$( document ).ready(function() {

	$('body').on( "click", ".button-aboutMe", function(){
		window.location.replace('/portFolio_GUYOT/AboutMe');
		$('.nav__item-title').addClass('nav__item--current'); // affichage titre 
	});

	$('body').on( "click", ".button-Compet", function(){
		window.location.replace('/portFolio_GUYOT/Competences');
		$('.button-Compet').append('nav__item--current');
	});
});