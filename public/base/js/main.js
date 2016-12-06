;(function () {
	
	'use strict';

	// iPad and iPod detection	
	var isiPad = function(){
	  return (navigator.platform.indexOf("iPad") != -1);
	}

	var isiPhone = function(){
    return (
      (navigator.platform.indexOf("iPhone") != -1) || 
      (navigator.platform.indexOf("iPod") != -1)
    );
	}

	// Mobile Menu Clone ( Mobiles/Tablets )
	var mobileMenu = function() {
		if ( $jq(window).width() < 769 ) {
			$jq('html,body').addClass('fh5co-overflow');

			if ( $jq('#fh5co-mobile-menu').length < 1 ) {
				
				var clone = $jq('#fh5co-primary-menu').clone().attr({
					id: 'fh5co-mobile-menu-ul',
					class: ''
				});
				var cloneLogo = $jq('').clone().attr({
					id : 'fh5co-logo-mobile',
					class : ''
				});

				$jq('<div id="fh5co-logo-mobile-wrap">').append(cloneLogo).insertBefore('#fh5co-header-section');
				$jq('#fh5co-logo-mobile-wrap').append('<a href="#" id="fh5co-mobile-menu-btn"><img id="logo" src="images/logo (2).svg" alt=""></a>');
				$jq('#fh5co-logo-mobile-wrap').append('<a href="#" id="TX" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/pic2.png" alt=""/><span id="xinhao" class="badge">9</span></a> <ul class="dropdown-menu dropdown-menu-right"><li><a href="#">My Account</a></li> <li class="divider"></li><li><a class="visible-phone" href="#">Settings</a></li><li class="divider visible-phone"></li><li><a href="sign-in.html">Logout</a></li></ul>');
				$jq('<div id="fh5co-mobile-menu">').append(clone).insertBefore('#fh5co-header-section');
				$jq('#fh5co-header-section').hide();
				$jq('#fh5co-logo-mobile-wrap').show();
			} else {
				$jq('#fh5co-header-section').hide();
				$jq('#fh5co-logo-mobile-wrap').show();
			}

		} else {

			$jq('#fh5co-logo-mobile-wrap').hide();
			$jq('#fh5co-header-section').show();
			$jq('html,body').removeClass('fh5co-overflow');
			if ( $jq('body').hasClass('fh5co-mobile-menu-visible')) {
				$jq('body').removeClass('fh5co-mobile-menu-visible');
			}
		}
	};


	// Parallax
  // var scrollBanner = function () {
  //   var scrollPos = $jq(this).scrollTop();
  //   console.log(scrollPos);
  //   $jq('.fh5co-hero-intro').css({
  //     'opacity' : 1-(scrollPos/300)
  //   });
  // }


	// Click outside of the Mobile Menu
	var mobileMenuOutsideClick = function() {
		$jq(document).click(function (e) {
	    var container = $jq("#fh5co-mobile-menu, #fh5co-mobile-menu-btn");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      $jq('body').removeClass('fh5co-mobile-menu-visible');
	    }
		});
	};


	// Mobile Button Click
	var mobileBtnClick = function() {
		// $jq('#fh5co-mobile-menu-btn').on('click', function(e){
		$jq(document).on('click', '#fh5co-mobile-menu-btn', function(e){
			e.preventDefault();
			if ( $jq('body').hasClass('fh5co-mobile-menu-visible') ) {
				$jq('body').removeClass('fh5co-mobile-menu-visible');	
			} else {
				$jq('body').addClass('fh5co-mobile-menu-visible');
			}
			
		});
	};


	// Main Menu Superfish
	var mainMenu = function() {

		$('#fh5co-primary-menu').superfish({
			delay: 0,
			animation: {
				opacity: 'show'
			},
			speed: 'fast',
			cssArrows: true,
			disableHI: true
		});

	};

	// Superfish Sub Menu Click ( Mobiles/Tablets )
	var mobileClickSubMenus = function() {

		$jq('body').on('click', '.fh5co-sub-ddown', function(event) {
			event.preventDefault();
			var $this = $jq(this),
				li = $this.closest('li');
			li.find('> .fh5co-sub-menu').slideToggle(200);
		});

	};

	// Window Resize
	var windowResize = function() {
		$jq(window).resize(function(){
			mobileMenu();
		});

	};

	// Window Scroll
	var windowScroll = function() {
		$jq(window).scroll(function() {

			var scrollPos = $jq(this).scrollTop();
			if ( $jq('body').hasClass('fh5co-mobile-menu-visible') ) {
				$jq('body').removeClass('fh5co-mobile-menu-visible');
			}

			if ( $jq(window).scrollTop() > 70 ) {
				$jq('#fh5co-header-section').addClass('fh5co-scrolled');
			} else {
				$jq('#fh5co-header-section').removeClass('fh5co-scrolled');
			}


			// Parallax
			$jq('.fh5co-hero-intro').css({
	      'opacity' : 1-(scrollPos/300)
	    });

		});
	};

	// Fast Click for ( Mobiles/Tablets )
	var mobileFastClick = function() {
		if ( isiPad() && isiPhone()) {
			FastClick.attach(document.body);
		}
	};

	// Easy Repsonsive Tabs
	var responsiveTabs = function(){
		
		$jq('#fh5co-tab-feature').easyResponsiveTabs({
      type: 'default',
      width: 'auto', 
      fit: true, 
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion',
      tabidentify: 'hor_1'
            
    });
    $jq('#fh5co-tab-feature-center').easyResponsiveTabs({
      type: 'default',
      width: 'auto',
      fit: true, 
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion', 
      tabidentify: 'hor_1' 
      
    });
    $jq('#fh5co-tab-feature-vertical').easyResponsiveTabs({
      type: 'vertical',
      width: 'auto',
      fit: true,
      inactive_bg: '',
      active_border_color: '',
      active_content_border_color: '',
      closed: 'accordion',
      tabidentify: 'hor_1'
    });
	};

	// Owl Carousel
	var owlCrouselFeatureSlide = function() {
		
		var owl2 = $('.owl-carousel-2');
		owl2.owlCarousel({
				items: 1,
		    loop: true,
		    margin: 0,
		    lazyLoad: true,
		    responsiveClass: true,
		    nav: true,
		    dots: true,
		    smartSpeed: 500,
		    navText: [
		      "<i class='ti-arrow-left owl-direction'></i>",
		      "<i class='ti-arrow-right owl-direction'></i>"
	     	],
		    responsive: {
		        0: {
		          items: 1,
		          nav: true
		        },
		        600: {
		          items: 1,
		          nav: true,
		        },
		        1000: {
		          items: 1,
		          nav: true,
		        }
	    	}
		});
	};

	// MagnificPopup
	var magnifPopup = function() {
		$('.image-popup').magnificPopup({
			type: 'image',
		  gallery:{
		    enabled:true
		  }
		});
	};

	$jq(function(){

		mobileFastClick();
		responsiveTabs();
		mobileMenu();
		mainMenu();
		magnifPopup();
		mobileBtnClick();
		mobileClickSubMenus();
		mobileMenuOutsideClick();
		owlCrouselFeatureSlide();
		windowResize();
		windowScroll();


	});


}());