//document had load
$(function() {
	//scroll to top
	(function() {
		var btn = $('#scroll-to-top');
		var win = $(window)
		win.scroll(function() {
			( win.scrollTop() > 500 ) ? btn.show() : btn.hide();
		})
		btn.click(function() {
			$('html, body').animate({scrollTop:0})
		});
	})();


});