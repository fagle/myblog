( function( $ ) {
	
$(document).ready(function($){	
	// Services Section: Preview Selected Icon
    $('#accordion-section-social select').on('change', function(e){
		var optionSelected = $(this).find("option:selected").val();

	 	$(this).parent().parent().find('i.fa').hide();
		$(this).before("<i class='alvele fa-5x fa "+optionSelected+"'></i>");
		
    });

});

} )( jQuery );