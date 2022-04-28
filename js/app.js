(function($) {

	$(".header__icon-bar").click(function(e){
		 $(".header__nav").toggleClass('show-nav-mobile');
		 e.preventDefault();
	});

})( jQuery );