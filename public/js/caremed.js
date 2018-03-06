$(document).ready(function(){
	$('.menuTrigger').click(function(){
		$('.navigation .menu').slideToggle(300, function(){
			$(this).toggleClass('navExpanded').css('display', '');
		});
		// $('.navigation .menu').slideToggle(300).toggleClass('navExpanded').css({'display': ''});
	});

});



$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if(scroll > 100 ){
    	$('.navigation, .navigation .brand h3, .navigation .menu').addClass('shrinkNav');
    	$('.navigation .menuList ul').css({'top': '50px'});
    }else {
    	$('.navigation, .navigation .brand h3, .navigation .menu').removeClass('shrinkNav');
    	$('.navigation .menuList ul').css({'top': ''});
    }
});