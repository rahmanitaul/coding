const navSlide = () => {

	$('.bars').click(function(){
		$('.navbar-nav').toggleClass('nav-active');
		
		//Bars Animation
		$(this).toggleClass('toggle');

	});

}

navSlide();

//parallax
$(window).scroll(function(){

	var cScroll = $(this).scrollTop();

	console.log(cScroll);
});
