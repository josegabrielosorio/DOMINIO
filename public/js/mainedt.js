$(document).ready(function(){

	$('.menu ul li a').click(function(e){

		e.preventDefault();


		if ($(this).hasClass('activado')){

			$(this).removeClass('activado');
			$(this).children('ul').slideUp();

			$(this).addClass('Desactivado');
	
		}

		else if($(this).hasClass('Desactivado')) {

			$('.menu ul li ul').slideUp();
			$('.menu ul li').removeClass('activado');
			$('.menu ul li').addClass('Desactivado');


			$(this).addClass('activado');
			$(this).removeClass('Desactivado');
			$(this).children('ul').slideDown();
		}

	});


	$('.menu ul li ul li a').click(function(){


		window.location.href= $(this).attr("href");
	})
});