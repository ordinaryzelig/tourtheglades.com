/*
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.com)
 */
(function($) {
	
	$(function(){
		var isTouch = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android)/);

		if(!isResponsive(497)){
			customizeMenu();

			rollUpMenu();
		}

		prettySociableInit();

		sliderPrepareFix();

		sliderAlternativeFix();

		iconMenu();

		widgetsSize();

		notificationClose();

		initMisc();

		hoverZoomInit();

		applyColorbox();

		applyFancyboxVideo();
	});

	function isResponsive(width){
		result = false;
		if($(window).width() <= width){
			result = true;
		}
		return result;
	}

	function customizeMenu(){
		$(".mainmenu > ul > li").each(function(){
			if($(this).has('ul').length){
				$(this).addClass("parent");
			}
		});
	}

	function rollUpMenu(){
		var time = parseInt($('#mainmenu-dropdown-duration').text());
		var easing = $('#mainmenu-dropdown-easing').text();

		$(".mainmenu ul li").hover(function(){
			var submenu = $(this).children('ul');
			var $submenuItems = submenu.children('li');
			var size = $(this).children('ul').children('li').size();

			var liHeight, marT, marB, paddT, paddB, borderT, borderB;

			$submenuItems.each(function(){
				var $sub = $('.sub-menu').children('li');

				if($sub.length){

					liHeight = parseInt($sub.height(), 10);

					marT = parseInt($sub.css('marginTop'), 10);
					marB = parseInt($sub.css('marginBottom'), 10);

					paddT = parseInt($sub.css('paddingTop'), 10);
					paddB = parseInt($sub.css('paddingBottom'), 10);

					borderT = parseInt($sub.css('border-top-width'), 10);
					borderB = parseInt($sub.css('border-bottom-width'), 10);

					outerH = parseInt($sub.outerHeight(), 10);
				}
			});

			if($submenuItems.length)
				var submenuHeight = ((liHeight*size)+(marT*size)+(marB*size)+(paddT*size)+(paddB*size)+(borderB*size));


			submenu.css("display","block");
			submenu.height("1px");

			submenu.stop('true','true').animate({
				height: submenuHeight
			}, time, easing);
		}, function(){
			$(this).children('ul').css("display","none");
			$(this).children('ul').css('height','1px');
		});

	}

	function prettySociableInit(){
		var homeUrl = $("body").data("themeurl");

		$.prettySociable({websites: {
			facebook : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Facebook',
				'url': 'http://www.facebook.com/share.php?u=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/facebook.png',
				'sizes':{'width':70,'height':70}
			},
			twitter : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Twitter',
				'url': 'http://twitter.com/home?status=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/twitter.png',
				'sizes':{'width':70,'height':70}
			},
			delicious : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Delicious',
				'url': 'http://del.icio.us/post?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/delicious.png',
				'sizes':{'width':70,'height':70}
			},
			digg : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Digg',
				'url': 'http://digg.com/submit?phase=2&url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/digg.png',
				'sizes':{'width':70,'height':70}
			},
			linkedin : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'LinkedIn',
				'url': 'http://www.linkedin.com/shareArticle?mini=true&ro=true&url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/linkedin.png',
				'sizes':{'width':70,'height':70}
			},
			reddit : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Reddit',
				'url': 'http://reddit.com/submit?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/reddit.png',
				'sizes':{'width':70,'height':70}
			},
			stumbleupon : {
				'active': true,
				'encode':false, // If sharing is not working, try to turn to false
				'title': 'StumbleUpon',
				'url': 'http://stumbleupon.com/submit?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/stumbleupon.png',
				'sizes':{'width':70,'height':70}
			},
			tumblr : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'tumblr',
				'url': 'http://www.tumblr.com/share?v=3&u=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/tumblr.png',
				'sizes':{'width':70,'height':70}
			}
		}});
	}

	function sliderPrepareFix(){
		if(isResponsive(497)){
			$('.rev_slider_wrapper').addClass('reloadMe');
		}
	}

	function sliderAlternativeFix(){
		if(isResponsive(497)){
			if($('.slider-alternative').children('img').attr('src') != ""){
				$('.rev_slider_wrapper').hide();
				$('.slider-alternative').show();
			} else {
				$('.rev_slider_wrapper').show();
				$('.slider-alternative').hide();
			}
		} else {
			$('.rev_slider_wrapper').show();
			$('.slider-alternative').hide();

			if($('.rev_slider_wrapper').hasClass('reloadMe')){
				$('.rev_slider_wrapper').removeClass('reloadMe');
				location.reload();
			}
		}
	}

	function iconMenu() {
		$('#sti-menu').iconmenu();
		$('#sti-menu li').last().css('border-width','0');
	}

	function widgetsSize() {
		var i = 0;
		$('.footer-sidebar > div.box').each( function() {
			$('.footer-sidebar > div.box').eq(i).addClass('col-' + (i+1));
		i++;
		});
	}

	function applyColorbox(){
		// Apply fancybox on all images
		$("a[href$='gif']").colorbox({rel: 'group', maxHeight:"95%"});
		$("a[href$='jpg']").colorbox({rel: 'group', maxHeight:"95%"});
		$("a[href$='png']").colorbox({rel: 'group', maxHeight:"95%"});

		$(".csss").css('display','block');
	}

	function applyFancyboxVideo(){
		// AIT-Portfolio videos
		$(".ait-portfolio a.video-type").click(function() {

			var address = this.href
			if(address.indexOf("youtube") != -1){
				// Youtube Video
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'elastic',
					'title'			: this.title,
					'width'			: 680,
					'height'		: 495,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
						'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
				});
			} else if (address.indexOf("vimeo") != -1){
				// Vimeo Video
				// parse vimeo ID
				var regExp = /http:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/;
				var match = this.href.match(regExp);

				if (match){
				    $.fancybox({
						'padding'		: 0,
						'autoScale'		: false,
						'transitionIn'	: 'elastic',
						'transitionOut'	: 'elastic',
						'title'			: this.title,
						'width'			: 680,
						'height'		: 495,
						'href'			: "http://player.vimeo.com/video/"+match[2]+"?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff",
						'type'			: 'iframe'
					});
				} else {
				    alert("not a vimeo url");
				}
			}
			return false;
		});

		// Images shortcode
		$("a.sc-image-link.video-type").click(function() {

			var address = this.href
			if(address.indexOf("youtube") != -1){
				// Youtube Video
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'elastic',
					'title'			: this.title,
					'width'			: 680,
					'height'		: 495,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
						'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
				});
			} else if (address.indexOf("vimeo") != -1){
				// Vimeo Video
				// parse vimeo ID
				var regExp = /http:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/;
				var match = this.href.match(regExp);

				if (match){
				    $.fancybox({
						'padding'		: 0,
						'autoScale'		: false,
						'transitionIn'	: 'elastic',
						'transitionOut'	: 'elastic',
						'title'			: this.title,
						'width'			: 680,
						'height'		: 495,
						'href'			: "http://player.vimeo.com/video/"+match[2]+"?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff",
						'type'			: 'iframe'
					});
				} else {
				    alert("not a vimeo url");
				}
			}
			return false;
		});
	}

	function initMisc() {
	  	$('#content input, #content textarea').each(function(index) {
			var id = $(this).attr('id');
			var name = $(this).attr('name');
			try{
				if (name.length != 0) {
					$(this).attr('id', name);
				}
			}catch(e){

			}
		});

		$('#content label').inFieldLabels();

	  	$('.rule span').click(function() {
		  	$.scrollTo(0, 1000, {axis:'y'});
		  	return false;
	 	});
	}

	function notificationClose() {
		$('.sc-notification').children('a.close').click( function(event) {
			event.preventDefault();
			$(this).parent().fadeOut('slow');
		});
	}

	function hoverZoomInit(){
		$('#content .gallery-item a, #content .ait-portfolio a, #content a.sc-image-link').hoverZoom({overlayColor:'#333333', overlayOpacity: 0.8, zoom:0});
	}

}(jQuery));