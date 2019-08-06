$(document).ready(function(){

	$('.menu li:has(ul)').click(function(e){

		e.preventDefault();


		if ($(this).hasClass('activado')){

			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
	
		}

		else {

			$('.menu ul li ul').slideUp();
			$('.menu ul li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}

	});


	$('.menu ul li ul li a').click(function(){


		window.location.href= $(this).attr("href");
	})
});