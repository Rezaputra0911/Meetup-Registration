//parallax
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	//jumbotron

		$('.jumbotron h1').css({
			'transform' : 'translate(0px, '+ wScroll/4 +'%)'
		});

		$('.jumbotron h3').css({
			'transform' : 'translate(0px, '+ wScroll/2 +'%)'
		});

		$('.jumbotron a').css({
			'transform' : 'translate(0px, '+ wScroll/4 +'%)'
		});



		//about
		if(wScroll > $('.about').offset().top-250){
			$('.about .thumbnail').addClass('muncul');
		}

		if(wScroll > $('.about2').offset().top-250){
			$('.about2 .thumbnail').addClass('muncul');
		}

		if(wScroll > $('.about3').offset().top-250){
			$('.about3 .thumbnail').addClass('muncul');
		}



	});



