<?php
get_header();

	/****** Front page displays  ********/
	if ( get_option( 'show_on_front' ) == "posts" ) {
		get_template_part('index', 'homepage') ;
	} elseif ( get_option( 'show_on_front' ) == "page" ) {
		get_template_part('index') ;
	}
		
get_footer();
?>