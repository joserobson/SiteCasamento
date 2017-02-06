(function($) {
 "use strict";
	
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	
	slider.setup('masterslider' , {
		 width:1400,    // slider standard width
		 height:790,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fillwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});
	
	
	$(".scrollup").pageup();
	
	// pre loader 
	$(document).on('ready', function() {
	
		$("#element").introLoader({
		
			animation: {
				name: 'cssLoader',
				options: {
					exitFx:'slideUp',
					ease: "easeOutSine",
					style: 'light',
					delayBefore: 450, //delay time in milliseconds
					exitTime: 360
				}
			}
		
		});
		
		
		// navigation collaspe in mobile view
		$('nav a').on('click', function () {

            if ($(".navbar-nav").is(":visible") ){ $(".navbar-nav").trigger("click"); } //bootstrap 2.x
            if ($(".navbar-toggle").is(":visible")) { $(".navbar-toggle").trigger("click"); } //bootstrap 3.x
        });
		
	
	});
	

	// date count down
	$('#example').countdown({
		date: '05/28/2017 22:59:59',
		offset: -8,
		day: 'Day',
		days: 'Days'
	}, function () {
		//alert('Done!');
	});
	
	
	
})(jQuery);