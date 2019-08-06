$(document).ready(function(){

	$('.shop span').click(function(e){

		e.preventDefault();


		if ($('.shop').hasClass('activado')){

			$('.shop').removeClass('activado');
			$('.shop').children('ul').slideUp();
	
		}

		else {

			$('.shop').addClass('activado');
			$('.shop').children('ul').slideDown();
			
			//$('.accesories').removeClass('activado');
			//$('.accesories').children('ul').slideUp();
		}
	});

	$('.accesories span').click(function(e){

		e.preventDefault();


		if ($('.accesories').hasClass('activado')){

			$('.accesories').removeClass('activado');
			$('.accesories').children('ul').slideUp();
	
		}

		else {

			$('.accesories').addClass('activado');
			$('.accesories').children('ul').slideDown();
			//$('.shop').removeClass('activado');
			//$('.shop').children('ul').slideUp();
		}
	});

	$('.filters span').click(function(e){

		e.preventDefault();


		if ($('.filters').hasClass('activado')){

			$('.filters').removeClass('activado');
			$('.filters').children('ul').slideUp();
	
		}

		else {

			$('.filters').addClass('activado');
			$('.filters').children('ul').slideDown();
		}
	});


	$('.collection span').click(function(e){

		e.preventDefault();


		if ($('.collection').hasClass('activado')){

			$('.collection').removeClass('activado');
			$('.collection').children('ul').slideUp();
	
		}

		else {

			$('.collection').addClass('activado');
			$('.collection').children('ul').slideDown();
		}
	});




	$('.redes li:has(ul)').click(function(e){

		e.preventDefault();


		if ($(this).hasClass('activado')){

			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
	
		}

		else {

			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}

	});

	$('.menu ul li ul li').click(function(e){

		e.preventDefault();


		if ($(this).hasClass('activado')){

			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
	
		}

		else {

			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}

	});

	$('.menu2 ul li ul li').click(function(e){

		e.preventDefault();


		if ($(this).hasClass('activado')){

			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
	
		}

		else {

			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});


	$('.country span').click(function(e){

		e.preventDefault();


		if ($('#right-content #countries').hasClass('country-desactivado')){

			$('#right-content #countries').removeClass('country-desactivado');
	
		}

		else {

			$('#right-content #countries').addClass('country-desactivado');
		}
	});

	


	$('.menu ul li ul li a').click(function(){


		window.location.href= $(this).attr("href");
	})

	$('.redes ul li ul li a').click(function(){


		window.location.href= $(this).attr("href");
	})

//SEPARADOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOR

	$('.buscador li').click(function(e){

		e.preventDefault();

			$(this).children('ul').slideDown();
	});

});