// DOM Ready
$(function() {
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i !== imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

	/*
	 * jQuery Cycle Inits
	 */
	 if($('#slideshow').length) {
	 	$('#slideshow').cycle({
	 		timeout: 5000,
	 		slideExpr: '.slide'
	 	});
	 }
	 if($('#testimonials').length) {
	 	$('#testimonials').cycle({ timeout: 5000 });
	 }


	// Site Search toggle
	$('#site-search-toggle').click(function(e) {
		e.preventDefault();
		$('html').toggleClass('show-site-search');
	});

	// Site Navigation toggle
	$('#site-nav-toggle').click(function(e) {
		e.preventDefault();
		$('html').toggleClass('show-site-sitemap');
	});

	// Collapse / Expand Mobile Menu Items
	$('.sub-menu-toggle').click(function(e) {
		$(this).parent().toggleClass('show-sub-menu');
	});
	// also apply to the close button
	$('#site-nav-close').click(function(e) {
		$('html').removeClass('show-site-sitemap');
	});

	// Mailchimp Signup Bar Close Button
	function createCookie(name,value,days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	if($('#mailchimp-bar').length) {
		$('#mailchimp-bar-close').click(function(e) {
			e.preventDefault();
			// hide the bar
			$('#mailchimp-bar').hide();
			// don't show the bar again for 1 day
			createCookie('espi-mailchimp-bar','true',1);
		});
		$('#mailchimp-bar-submit').click(function(e) {
			// don't show the bar again ever
			createCookie('espi-mailchimp-bar','true');
		});
	}
});