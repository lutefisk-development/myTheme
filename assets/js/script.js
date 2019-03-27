(function($) {
	$(document).ready(function() {
		// This will be run when DOM has signaled that it has finished rendering all elements
		$('.card').on('click', function() {
			
			window.location = $(this).find("a").attr("href");
			return false;

		});
	});
})(jQuery);

