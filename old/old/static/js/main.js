$(document).ready(function(){
	$('.header-menu ul li.sub > a, .header-menu ul li.sub > .icn-dropdown').click(function(event){
		// Отменим общее событие клика
		event.stopPropagation();
		$(this).parent('li.sub').find('.header-menu-lvl1').addClass('popup');
		return false;		
	});
		
	$(document).click(function(){
		$('.popup').removeClass('popup');		
	});
	
	var slider_cert = $('#slider-cert').bxSlider({
	  minSlides: 5,
	  maxSlides: 5,
	  slideWidth: 360,
	  slideMargin: 10,
	  controls: false,
	  pager: false
	});
	
	$('.block-cert-slider-btn-l').click(function(){
		slider_cert.goToPrevSlide();	
	});
	$('.block-cert-slider-btn-r').click(function(){
		slider_cert.goToNextSlide();	
	});
	
	var slider_clients = $('#slider-clients').bxSlider({
	  minSlides: 5,
	  maxSlides: 5,
	  slideWidth: 360,
	  slideMargin: 10,
	  controls: false,
	  pager: false
	});
	
	$('.block-clients-slider-btn-l').click(function(){
		slider_clients.goToPrevSlide();	
	});
	$('.block-clients-slider-btn-r').click(function(){
		slider_clients.goToNextSlide();	
	});
	
	
	var slider_thanks = $('#slider-thanks').bxSlider({
	  minSlides: 5,
	  maxSlides: 5,
	  slideWidth: 360,
	  slideMargin: 10,
	  controls: false,
	  pager: false
	});
	
	$('.block-thanks-slider-btn-l').click(function(){
		slider_thanks.goToPrevSlide();	
	});
	$('.block-thanks-slider-btn-r').click(function(){
		slider_thanks.goToNextSlide();	
	});

	/* FANCY BOX */
	if ($('.fancybox').length!=0) {
		$(".fancybox").fancybox({
		});
	}
	
	
})