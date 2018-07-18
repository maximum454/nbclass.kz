!function(a){a.fn.equalHeights=function(){var b=0,c=a(this);return c.each(function(){var c=a(this).innerHeight();c>b&&(b=c)}),c.css("height",b)},a("[data-equal]").each(function(){var b=a(this),c=b.data("equal");b.find(c).equalHeights()})}(jQuery);

$(function() {

	// Custom JS
	$('.vert-slider-slick').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  vertical: true,
	  verticalSwiping: true,
	  swipeToSlide: true,
	  responsive: [
	    {
	      breakpoint: 1199,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        vertical: false,
	 		verticalSwiping: false
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        vertical: false,
	 		verticalSwiping: false
	      }
	    }
	  ]
	});

	$('.aboutUs-slider').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  swipeToSlide: true,
	  responsive: [
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	$('.recomend-slide').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  swipeToSlide: true,
	  infinite: false,
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	$("table table").parent().css({
		"background" : "none",
		"padding" : 0,
		"border": "none"
	})
	

	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	var headerHeight = $(".b-header").outerHeight();
	$(".b-header").wrap("<div class='head-outer'></div>")
	$(".head-outer").css({
		"height" : headerHeight
	})
	$(".b-header").css({
		"position": "fixed",
		"top": 0,
		"left": 0,
		"right": 0
	});

	$(".scrollto").click(function(event) {
        event.preventDefault(); 


        var anchor = $(this).attr('data-attr-scroll');
  		$(".navigation__list li").removeClass("current");
        $(this).parent().addClass("current");
        $('html,body').animate({ 
            scrollTop: $('#'+anchor).offset().top - headerHeight + 1
        }, 1000); 
        if($("html").is(".is-active")) {
        	$(".hamburger").toggleClass("is-active")
			$("html").toggleClass("is-active")   
        }
            
    });


    if(window.matchMedia('(min-width: 768px)').matches)
	{
		$('.bottom-eventio').equalHeights();
		$('.bottom-event-s').equalHeights();
	}
	

	$(".hamburger").click(function(){
		$(this).toggleClass("is-active")
		$("html").toggleClass("is-active")
	})

	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		fixedContentPos: false,
		fixedBgPos: true,
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: false
		},
		gallery: {
			enabled: true
		}
		
	});
	$('.popup-gallery-rec').magnificPopup({
		delegate: 'a',
		type: 'image',
		fixedContentPos: false,
		fixedBgPos: true,
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile popup-gallery-rec-out',
		image: {
			verticalFit: true,
			titleSrc: false
		},
		gallery: {
			enabled: true
		}
		
	});

	$(window).bind(function(){
		$('.nb-table > tbody > tr:nth-child(1) > td').equalHeights();
		$('.nb-table > tbody > tr:nth-child(2) > td').equalHeights();
		$('.nb-table > tbody > tr:nth-child(3) > td').equalHeights();
		$('.nb-table > tbody > tr:nth-child(4) > td').equalHeights();
	})
});
