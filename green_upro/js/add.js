jQuery(document).ready(function($) { 

	$(document).on('click', '.load_faq', function(e){
		e.preventDefault();
		let _this = $(this);

		let data = {
			'action': 'load_faq',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					$('#response_faq').append(data); 
					this_page++;                      
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();               
					}
				} else {                              
					_this.remove();                   
				}
			}
		});
	});


	document.addEventListener( 'wpcf7mailsent', function( event ) {
		$.fancybox.open( $('#thank_popup'), {
			touch:false,
			autoFocus:false,
		});
	}, false );

});