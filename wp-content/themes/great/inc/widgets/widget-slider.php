<?php

/**
 * Show Slider Widget
 * Great Theme
 */
class great_slider_widget extends WP_Widget
{
	 function great_slider_widget(){
            
            $widget_ops = array('classname' => 'great-slider','description' => esc_html__( "Its shows the Great theme slider and works only front page" ,'great') );
            parent::__construct('great-slider', esc_html__('Great: Slider','great'), $widget_ops);
            
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
			great_slider();
		
        echo $after_widget;
    }

    function form($instance) {
		?>
        <p><?php echo __('There are no options for this widget.','great') ?></p>
		<?php
    }

}
?>