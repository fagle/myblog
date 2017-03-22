<?php
/**
 * Customizer Custom Control Class for Disabled Dropdown
 */
if( ! class_exists('Wbls_Customize_Disabled_Checkbox_Control')) {
	class Wbls_Customize_Disabled_Checkbox_Control extends WP_Customize_Control {
		public $type = 'disabled-checkbox';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php printf('<span class="alvele-premium"><i class="fa fa-star"></i> <a href="%1$s">%2$s</a></span>',
				esc_url( 'http://alvele.com/theme-pro/' ),
				__( 'Premium', 'great' )
				);?>
                
                <input disabled="disabled" readonly="readonly" type="checkbox">
                <?php echo esc_attr($this->label); ?>
			</label>
		<?php
		}
	}
}

/**
 * Customizer Custom Control Class for Disabled Dropdown
 */
if( ! class_exists('Wbls_Customize_Disabled_Select_Control')) {
	class Wbls_Customize_Disabled_Select_Control extends WP_Customize_Control {
		public $type = 'disabled-select';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php printf('<span class="alvele-premium"><i class="fa fa-star"></i> <a href="%1$s">%2$s</a></span>',
				esc_url( 'http://alvele.com/theme-pro/' ),
				__( 'Premium', 'great' )
				);?>
				<select <?php $this->link(); ?>>
					<?php //printf( '<option value="0">%1$s</option>', __( 'Select Color Scheme', 'great' ) );
						foreach ( $this->choices as $value => $label )
							printf( '<option disabled="disabled" value="%1$s" %2$s>%3$s</option>', esc_attr( $value ), selected( $this->value(), $value, false ), $label );
					?>
				</select>
			</label>
		<?php
		}
	}
}

/**
 * Customizer Custom Control Class for Dropdown List Pages
 */
if( ! class_exists('Wbls_Customize_Select_Control_List_Pages')) {
	class Wbls_Customize_Select_Control_List_Pages extends WP_Customize_Control {
		public $type = 'list-pages';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php printf('<span class="alvele-premium"><i class="fa fa-star"></i> <a href="%1$s">%2$s</a></span>',
				esc_url( 'http://alvele.com/theme-pro/' ),
				__( 'Premium', 'great' )
				);?>
				<select <?php $this->link(); ?>>
					<?php //printf( '<option value="0">%1$s</option>', __( 'Select Color Scheme', 'great' ) );
						foreach ( $this->choices as $value => $label )
							printf( '<option disabled="disabled" value="%1$s" %2$s>%3$s</option>', esc_attr( $value ), selected( $this->value(), $value, false ), $label );
					?>
				</select>
			</label>
		<?php
		}
	}
}

/**
 * Customizer Custom Control Class for Separator Title
 */
if( ! class_exists('Wbls_Customize_sep_title')) {
	class Wbls_Customize_sep_title extends WP_Customize_Control {
		public $type = 'title_sep';

		public function render_content() {?>
        	<div class="customize-sep-title"><?php echo esc_html($this->label); ?></div><?php
		}
	}
}

/**
 * Customizer Custom Control Class for Info
 */
if( ! class_exists('Wbls_Customize_Info')) {
	class Wbls_Customize_Info extends WP_Customize_Control {
		public $type = 'info';
		public $desc;
		public function render_content() {?>
			<div class="customize-sep-title"><?php echo esc_html($this->label); ?></div>
            <?php echo $this->desc;
		}
	}
}

/**
 * Customizer Custom Control Class for Info
 */
if( ! class_exists('Wbls_Customize_ExternalLinks')) {
	class Wbls_Customize_ExternalLinks extends WP_Customize_Control {
		public $type = 'externallinks';

		public function render_content() {
			?>
			<div class="alvele-info"><?php
			 printf( __( 'Do you like this theme?', 'great' ) . '<a class="promote-site" href="%1$s">%2$s</a> &nbsp;&nbsp;',
			 esc_url('https://wordpress.org/support/view/theme-reviews/great#postform'),
			 __( 'Please write a review and to promote your website!', 'great' ) );
			 
			 printf( '<a class="button button-primary" href="%1$s">%2$s</a>',
			 esc_url('https://wordpress.org/support/theme/great'),
			 __( 'Support Forums', 'great' ) );			 
			?></div>
			<?php
		}
	}
}