const navSlide = () => {

	$('.bars').click(function(){
		$('.navbar-nav').toggleClass('nav-active');
		
		//Bars Animation
		$(this).toggleClass('toggle');

	});

}

navSlide();

