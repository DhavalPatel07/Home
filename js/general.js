var $=jQuery.noConflict();
$(document).ready(function() {
	var owl = $('#HeroSlider');
    owl.owlCarousel({
    	//stagePadding: 50,
        margin: 0,
        nav: true,
        loop: true,
		items: 1,
        /*responsive: {
			0: { items: 4 },
            600: { items: 4 },
            1000: { items: 4 }
		}*/
	})
	
	var owl = $('#Customer_logo');
    owl.owlCarousel({
    	//stagePadding: 50,
        margin: 20,
        nav: true,
        loop: true,
		items: 5,
        responsive: {
			0: { items: 2 },
            991: { items: 3 },
            1200: { items: 5 }
		}
	})
	/* --- Click To Smooth scrolling --- */
	function scrollNav() {
	  $('.menu li a').click(function(){  
		//Toggle Class
		$(".active").removeClass("active");      
		$(this).closest('li').addClass("active");
		var theClass = $(this).attr("class");
		$('.'+theClass).parent('li').addClass('active');
		//Animate
		$('html, body').stop().animate({
			scrollTop: $( $(this).attr('href') ).offset().top - 0 // 50 Offset
		}, 1000);
		return false;
	  });
	  $('.scrollTop a').scrollTop();
	}
	scrollNav();
	
})







 


