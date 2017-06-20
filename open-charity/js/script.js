jQuery(document).ready(function(){

	// Mobile Menu
	jQuery('.toggle-menu').click(function(e){
		e.preventDefault();
		jQuery(this).toggleClass('active');
        jQuery('.menu').slideToggle('active');
	});

	// Member Slider
	jQuery(".members-slider").slick({
        dots: true,
        infinite: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 4,
        responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    ]
    });

	// Blog Slider
    jQuery(".blog-slider").slick({
        dots: false,
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    ]
    });
	
})