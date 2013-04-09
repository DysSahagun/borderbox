/* Google Analytics */
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));

$(document).ready(function() {
	
	$('#top-link').click(function(){	
		$('html, body').animate({
			scrollTop: $('#masthead').offset().top
		}, 1000);
		return(false);
	});	
	
	$('#top-link').hide();
	$(window).scroll(function() {
		if ($(this).scrollTop()) {
			$('#top-link:hidden').stop(true, true).fadeIn();
		} else {
			$('#top-link').stop(true, true).fadeOut();
		}
	});
	
	$('.colophon-teleport').hide();
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			$('.colophon-teleport:hidden').show();
		} else {
			$('.colophon-teleport').hide();
		}	
	});
	
	$('.entry-content p').each(function() {
		var $this = $(this);
		if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
			$this.remove();
	});
	
});