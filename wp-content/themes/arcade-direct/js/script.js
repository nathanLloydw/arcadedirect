jQuery('.productslider ul').slick({
	  centerMode: false,
	  centerPadding: '60px',
	  slidesToShow: 5,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: true,
	        centerMode: false,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});

	setTimeout(function(){
		jQuery(function($) {

			jQuery('.hamburger').click(function() {

			  jQuery(this).toggleClass('is-active');

			  if(jQuery(this).hasClass('is-active')) {
				jQuery('#site-navigation').fadeIn();
				jQuery('body').toggleClass('fixed');
			  }
			  else {
				jQuery('#site-navigation').fadeOut();
				jQuery('body').toggleClass('fixed');
			  }
			});

			slidingMenu();
	   });
	}, 100);

  function slidingMenu() {
	$nav = jQuery("#mobile-menu");
	$nav_item = $nav.find("li");
	$dropdown = $nav_item.has("ul").addClass("dropdown");
	$back_btn = $nav.find("ul").prepend("<li class='js-back'>back</li>");

	// open sub-level
	jQuery(".dropdown > a").on("click", function(e) {
	  console.debug('$dropdown.on("click")');
	  e.stopPropagation();
	  e.preventDefault();

	  jQuery(this).parent().addClass("is-open");
	  jQuery(this).parent().parent().addClass("slide-out");
	});

	// go back
	jQuery(".dropdown .js-back").on("click", function(e) {
	  console.debug('$back_btn.on("click")');
	  e.stopPropagation();
	  jQuery(this)
		.parents(".is-open")
		.first()
		.removeClass("is-open");
	  jQuery(this)
		.parents(".slide-out")
		.first()
		.removeClass("slide-out");
	});
  }



jQuery(document).ready(function() {
   jQuery('.accordion-item a').on('click', function(event) {
      event.preventDefault();
      // create accordion variables
      var accordion = jQuery(this);
      var accordionContent = accordion.next('.accordion-content');

      // toggle accordion link open class
      accordion.toggleClass("is-active");
      // toggle accordion content
      accordionContent.slideToggle(250);

   });
});
