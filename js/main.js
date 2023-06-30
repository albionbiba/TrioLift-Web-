(function ($) {
	"use strict";
	/*
	============================================================
	PAGE LOADER SCRIPT
	============================================================
	*/
	$(window).load(function () {
		$("body").imagesLoaded(function () {
			$(".loader-cont").fadeOut();
			$("#loader-overflow").delay(200).fadeOut(700);
		});
	});
	/*
	============================================================
	WOW ANIMATION
	============================================================
	*/
	new WOW().init();
	/*
	============================================================
	SCROLLUP BUTTON
	============================================================
	*/
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	/*
	============================================================
	MEANMENU
	============================================================
	*/
	jQuery(".main-menu").meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991"
	});
	/*
	============================================================
	SEARCH BOX
	============================================================
	*/
	$('.search-area a').on('click', function () {
		$('.menu-right .search-area .search-form').toggleClass('active');
		return false;
	});
	/*
	============================================================
	MENU BAR
	============================================================
	*/
	$('.menu-bar a').on('click', function () {
		$('.slide-menu-area').addClass('highlight');
		return false;
	});
	$('.slide-menu-area .close').on('click', function () {
		$('.slide-menu-area').removeClass('highlight');
		return false;
	});
	/*
	============================================================
	HELPER
	============================================================
	*/
	$('.fake-title').parent().css('position', 'relative');
	$('.navigation .sub-menu').siblings('a').append("<i class='fa fa-angle-down'></i>");
	
	/*
	============================================================
	COUNT DOWN
	============================================================
	*/
	$('.countdown').downCount({
		date: '12/12/2019 12:00:00',
		offset: +1
	});
	/*
	============================================================
	BACKGROUND IMAGE
	============================================================
	*/
	$('.bg-background-area').each(function () {
		"use strict";
		if ($(this).attr("data-bg")) {
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-size': 'cover',
				'background-repeat': 'no-repeat',
				'background-attachment': 'scroll',
				'background-position': 'center center'
			});
		}
	});
	/*
	=======================================================================
	ISOTOPE MASONRY
	=======================================================================
	*/
	if ($('.masonry').length) {
		$(".masonry").imagesLoaded(function () {
			$(".masonry").masonry();
		});
	}
	if ($('.filterable-gallery').length) {
		var fselector = 0,
			itemsGrid = $(".filterable-gallery");
		(function ($) {
			"use strict";
			var isotopeMode;
			if (itemsGrid.hasClass("masonry")) {
				isotopeMode = "masonry";
			} else {
				isotopeMode = "fitRows"
			}
			itemsGrid.imagesLoaded(function () {
				itemsGrid.isotope({
					itemSelector: '.mix',
					layoutMode: isotopeMode,
					filter: fselector
				});
			});
			$(".port-filter").on('click', '.filter', function () {
				$(".filter").removeClass("active");
				$(this).addClass("active");
				fselector = $(this).attr('data-filter');
				itemsGrid.isotope({
					itemSelector: '.mix',
					layoutMode: isotopeMode,
					filter: fselector
				});
				return false;
			});
		})(jQuery);
	}
	/*
	=======================================================================
	ALL SLIDERS START
	=======================================================================
	*/
		/*
		=======================================================================
		MAIN SLIDER
		=======================================================================
		*/
		$(".main-slider").owlCarousel({
			autoPlay: true,
			// slideSpeed:2000,
			pagination: false,
			navigation: true,
			items: 1,
			center: false,
			loop: false,
			navigationText: ["prev", "next"],
			itemsDesktop: [1199, 1],
			itemsDesktopSmall: [980, 1],
			itemsTablet: [768, 1],
			itemsTablet: [767, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		COURSES SLIDER
		=======================================================================
		*/
		$(".courses-slide").owlCarousel({
			autoPlay: true,
			slideSpeed: 2000,
			pagination: false,
			navigation: true,
			items: 3,
			center: true,
			loop: true,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 2],
			itemsDesktopSmall: [980, 2],
			itemsTablet: [768, 2],
			itemsTablet: [767, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		TESTIMONIAL SLIDER
		=======================================================================
		*/
		$(".testimonial-slide").owlCarousel({
			autoPlay: true,
			slideSpeed: 2000,
			pagination: true,
			navigation: false,
			items: 3,
			center: true,
			loop: true,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 2],
			itemsDesktopSmall: [980, 2],
			itemsTablet: [768, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		BLOG SLIDER
		=======================================================================
		*/
		$(".blog-slider").owlCarousel({
			autoPlay: true,
			slideSpeed: 2000,
			pagination: false,
			navigation: true,
			items: 1,
			navigationText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			itemsDesktop: [1199, 1],
			itemsDesktopSmall: [980, 1],
			itemsTablet: [768, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		TESTIMONIAL SLIDER
		=======================================================================
		*/
		$(".testimon-slider").owlCarousel({
			autoPlay: true,
			slideSpeed: 2000,
			pagination: false,
			navigation: true,
			items: 1,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 1],
			itemsDesktopSmall: [980, 1],
			itemsTablet: [768, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		PORTFOLIO SLIDER
		=======================================================================
		*/
		$(".ct-grid-portfolio-layout2").owlCarousel({
			center: false,
			items: 3,
			loop: true,
			padding: 50,
			responsive: {
				600: {
					items: 4
				}
			}
		});
		/*
		=======================================================================
		PORTFOLIO SLIDER
		=======================================================================
		*/
		$(".ct-grid-portfolio-layout3").owlCarousel({
			center: false,
			items: 4,
			loop: true,
			padding: 50,
			responsive: {
				600: {
					items: 4
				}
			}
		});
		/*
		=======================================================================
		STAFF SLIDER
		=======================================================================
		*/
		$(".staff-slide").owlCarousel({
			autoPlay: true,
			slideSpeed: 2000,
			pagination: false,
			navigation: true,
			items: 3,
			center: true,
			loop: false,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 2],
			itemsDesktopSmall: [980, 2],
			itemsTablet: [768, 2],
			itemsTablet: [767, 1],
			itemsMobile: [479, 1],
		});
		/*
		=======================================================================
		BRAND SLIDER
		=======================================================================
		*/
		$(".brand-slide").owlCarousel({
			autoPlay: true,
			// slideSpeed:2000,
			pagination: false,
			navigation: false,
			items: 6,
			center: false,
			loop: false,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 4],
			itemsDesktopSmall: [980, 2],
			itemsTablet: [768, 4],
			itemsMobile: [479, 2],
		});
		/*
		=======================================================================
		SHOP SLIDER
		=======================================================================
		*/
		$(".shop-slider").owlCarousel({
			autoPlay: true,
			// slideSpeed:2000,
			pagination: false,
			navigation: true,
			items: 4,
			center: false,
			loop: false,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 4],
			itemsDesktopSmall: [980, 3],
			itemsTablet: [768, 2],
			itemsMobile: [479, 2],
		});
		/*
		=======================================================================
		SHOP DETAIL SLIDER
		=======================================================================
		*/
		$(".shop-detail-slider").owlCarousel({
			autoPlay: true,
			// slideSpeed:2000,
			pagination: false,
			navigation: true,
			items: 1,
			center: false,
			loop: false,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			itemsDesktop: [1199, 1],
			itemsDesktopSmall: [980, 1],
			itemsTablet: [768, 1],
			itemsMobile: [479, 1],
		});
	/*
	=======================================================================
	STICKY FUNCTION
	=======================================================================
	*/
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 80) {
			$('#sticky').addClass('stick');
		} else {
			$('#sticky').removeClass('stick');
		}
	});
	/*
	=======================================================================
	COUNTERUP
	=======================================================================
	*/
	$('.counter').counterUp({
		delay: 10,
		time: 3000
	});
	/*
	=======================================================================
	MAGNIFICPOPUP
	=======================================================================
	*/
	if ($('.popup-youtube').length > 0) {
		$('.popup-youtube').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	}
	/*
	=======================================================================
	CART PLUS MINUS BUTTON
	=======================================================================
	*/
	$(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	$(".qtybutton").on("click", function () {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find("input").val(newVal);
	});
	/*
	=======================================================================
	NEWSLETTER
	=======================================================================
	*/
	$(function() {
	'use strict';
		var $form = $('#mc-embedded-subscribe-form');
		$('#mc-embedded-subscribe').on('click', function(event) {
		  if (event) event.preventDefault();
		  register($form);
		});
	});
	function register($form) {
		$.ajax({
		  type: $form.attr('method'),
		  url: $form.attr('action'),
		  data: $form.serialize(),
		  cache: false,
		  dataType: 'json',
		  contentType: "application/json; charset=utf-8",
		  error: function(err) {
		      $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Could not connect to server. Please try again later.</div>');
		  },
		  success: function(data) {

		      if (data.result != "success") {
		          var message = data.msg;
		          $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' + message + '</div>');
		      } else {
		          var message = data.msg;
		          $('#notification_container').html('<div id="nl-alert-container"  class="alert alert-info alert-dismissible fade in bounceIn" role="alert" ><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' + message + '</div>');
		      }
		  }
		});
	}
	/*
	=======================================================================
	GOOGLE MAP
	=======================================================================
	*/
	if ($('#gmap').length > 0) {
		new GMaps({
			div: '#gmap',
			lat: 23.7947172, // 23.7947172,90.3971412
			lng: 90.3971412,
			scrollwheel: false,
			styles: [{
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dddddd"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 29
				}, {
					"weight": 0.2
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 18
				}]
			}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dddddd"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 21
				}]
			}, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 21
				}]
			}, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
				}, {
					"color": "#ffffff"
				}, {
					"lightness": 16
				}]
			}, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "on"
				}]
			}]
		}).addMarker({
			lat: 23.792930, //23.792930, 90.403798
			lng: 90.403798,
			infoWindow: {
				content: '<p>location here</p>'
			}
		});
	}
})(jQuery);