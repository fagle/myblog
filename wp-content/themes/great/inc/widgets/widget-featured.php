<?php

/**
 * Show Featured Pages Widget
 * Great Theme
 */
class great_featured_widget extends WP_Widget
{
	 function great_featured_widget(){
            
            $widget_ops = array('classname' => 'great-featured','description' => esc_html__( "This widget displays featured pages and works only front page" ,'great') );
            parent::__construct('great-featured', esc_html__('Great: Featured Pages','great'), $widget_ops);
            
    }

    function widget($args , $instance) {
    	extract($args);
		//$title = isset($instance['title']) ? $instance['title'] : esc_html__('Follow us' , 'great');

		echo $before_widget;
		//echo $before_title;
		//echo $title;
		//echo $after_title;

        /**
         * Widget Content
         */
		if ( is_home() or is_front_page() )
			great_featured_pages ();
		
        echo $after_widget;
    }

    function form($instance) {
		?>
        <p><?php echo __('There are no options for this widget.','great') ?></p>
		<?php
    }

}
?>