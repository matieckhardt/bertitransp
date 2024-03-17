$(document).ready(function(){

	// CENTER PAGE
	var alto_container = 600;
	var alto_window = $(window).height();
	var centrame = (alto_window - alto_container) / 2;
	if (centrame >= 10) {
		$('#container').css('margin-top', centrame );
	}
	$(window).resize(function() {
		var alto_window = $(window).height();
		var centrame = (alto_window - alto_container) / 2;
		if (centrame >= 10) {
			$('#container').css('margin-top', centrame );
		}
	});
	
	// GALERÍA 
	if ( $('.gallery-ths').length ){
		$('.gallery-ths li:first-child').addClass('current');
		$('.gallery-ths li a').click(function(e){
			var que_cargo = $(this).attr('href'),
				que_item = $(this);
			
			$('.gallery-ths li').removeClass('current');
			$(que_item).parent().addClass('current');
			
			$('.gallery-loading').fadeIn(500, function() {
				$('<img src="' + que_cargo + '">').load(function(){
					$('.gallery-photo').html('<img src="' + que_cargo + '">');
					showNewContent();
				})
			});
			function showNewContent() {
				$('.gallery-photo').fadeIn(500,hideLoader());
			}
			function hideLoader() {
				$('.gallery-loading').fadeOut(250);
			}
			e.preventDefault()
		});
	}
	
});