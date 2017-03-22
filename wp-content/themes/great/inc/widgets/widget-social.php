<?php

/**
 * Social  Widget
 * Great Theme
 */
class great_social_widget extends WP_Widget
{
	 function great_social_widget(){
            
            $widget_ops = array('classname' => 'great-social','description' => esc_html__( "It's displays social media icons on your any sidebar" ,'great') );
            parent::__construct('great-social', esc_html__('Great: Social Widget','great'), $widget_ops);
            
    }

    function widget($args , $instance) {
    	extract($args);
        $title = isset($instance['title']) ? $instance['title'] : esc_html__('Follow us' , 'great');

        echo $before_widget;
        echo $before_title;
        echo $title;
        echo $after_title;

        /**
         * Widget Content
         */ ?>

        <!-- social icons -->
        <div class="social-icons sticky-sidebar-social">
            <?php
			if ( get_theme_mod( 'sm_title_widget') ) echo "<div class=\"sm-desc-widget\">".esc_attr(get_theme_mod( 'sm_title_widget'))."</div>";
            great_social_media( "widget" );
			?>
        </div><!-- end social icons --><?php

        echo $after_widget;
    }

    function form($instance) {
      if(!isset($instance['title'])) $instance['title'] = esc_html__('Follow us' , 'great'); ?>

      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title ','great') ?></label>

      <input type="text" value="<?php echo esc_attr($instance['title']); ?>"
                          name="<?php echo $this->get_field_name('title'); ?>"
                          id="<?php $this->get_field_id('title'); ?>"
                          class="widefat" />
      </p><?php
    }

}
?>