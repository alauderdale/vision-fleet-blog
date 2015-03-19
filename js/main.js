jQuery(document).ready(function($){

	var localDev = true;

	if(localDev == true) {
		loadReload();
	}

		//fancybox if/when needed
		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'
		});
		
		$('.fb-video').fancybox({
		       padding: 0,
		       helpers: {
		           media: {}
		       }
		 });


});