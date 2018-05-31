<?php 
/**
 * Inti Theme Customizer
 * Adds settings to the WP Theme Customizer
 * and generates custom CSS/JS from those settings
 *
 * @package Inti
 * @author Anthony Wilhelm (@awshout / anthonywilhelm.com)
 * @author Samuel Wood (Otto) (@Otto42 / ottopress.com)
 * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
 * @since 1.0.0
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */
 
/**
 * Add Customizer generated CSS to header
 *
 * @since 1.0.0
 */
function inti_customizer_css() {
	do_action('inti_customizer_css');
		
	$output = '';	


	if ( 0 == get_inti_option('show_title', 'inti_customizer_options', 1) ) {
		$output .= "\n" . '.site-banner .title-area { display: none; }';
	}	
	if ( 'none' == get_inti_option('show_nav_logo_title', 'inti_customizer_options', 'none') ) {
		$output .= "\n" . '.top-bar .mobile-logo .site-logo, .top-bar .mobile-logo .site-title { display: none; }';
	} elseif ( 'image' == get_inti_option('show_nav_logo_title', 'inti_customizer_options', 'none') ) {
		$output .= "\n" . '.top-bar .mobile-logo .site-title { display: none; }  .top-bar .mobile-logo .site-logo { display: block; }';
	} else {
		$output .= "\n" . '.top-bar .mobile-logo .site-logo { display: none; } .top-bar .mobile-logo .site-title { display: block; }';
	}
	if ( 'none' == get_inti_option('show_sticky_logo_title', 'inti_customizer_options', 'none') ) {
		$output .= "\n" . '.top-bar .sticky-logo { display: none; }';
	} elseif ( 'image' == get_inti_option('show_sticky_logo_title', 'inti_customizer_options', 'none') ) {
		$output .= "\n" . '.top-bar .sticky-logo, .top-bar .site-title { display: none; } .top-bar .sticky-logo .site-logo { display: block; }';
	} else {
		$output .= "\n" . '.top-bar .sticky-logo, .top-bar .site-logo { display: none; } .top-bar .sticky-logo .site-title { display: block; }';
	}



	if ( "'Helvetica Neue', Helvetica, Arial, sans-serif" != get_inti_option('title_font', 'inti_customizer_options', "'Helvetica Neue', Helvetica, Arial, sans-serif") ) {
		$output .= "\n" . '.entry-title { font-family: ' . get_inti_option('title_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('title_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-title { color: ' . get_inti_option('title_color', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('link_color', 'inti_customizer_options') ) {
		$output .= "\n" . 'a { color: ' . get_inti_option('link_color', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('link_hover_color', 'inti_customizer_options') ) {
		$output .= "\n" . 'a:hover { color: ' . get_inti_option('link_hover_color', 'inti_customizer_options') . '; }';
	}



	if ( "'Open Sans', sans-serif" != get_inti_option('paragraph_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content, .entry-summary { font-family: ' . get_inti_option('paragraph_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('paragraph_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content p, .entry-content li, .entry-summary p, .entry-summary li { font-size: ' . get_inti_option('paragraph_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('paragraph_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content, .entry-summary { color: ' . get_inti_option('paragraph_color', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('content_link_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content a, .entry-summary a { color: ' . get_inti_option('content_link_color', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('content_link_hover_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content a:hover, .entry-summary a:hover { color: ' . get_inti_option('content_link_hover_color', 'inti_customizer_options') . '; }';
	}

	if ( "'Open Sans', sans-serif" != get_inti_option('h1_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h1, .entry-summary h1 { font-family: ' . get_inti_option('h1_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h1_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h1, .entry-summary h1 { font-size: ' . get_inti_option('h1_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h1_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h1, .entry-summary h1 { color: ' . get_inti_option('h1_color', 'inti_customizer_options') . '; }';
	}
	if ( "'Open Sans', sans-serif" != get_inti_option('h2_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h2, .entry-summary h2 { font-family: ' . get_inti_option('h2_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h2_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h2, .entry-summary h2 { font-size: ' . get_inti_option('h2_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h2_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h2, .entry-summary h2 { color: ' . get_inti_option('h2_color', 'inti_customizer_options') . '; }';
	}
	if ( "'Open Sans', sans-serif" != get_inti_option('h3_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h3, .entry-summary h3 { font-family: ' . get_inti_option('h3_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h3_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h3, .entry-summary h3 { font-size: ' . get_inti_option('h3_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h3_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h3, .entry-summary h3 { color: ' . get_inti_option('h3_color', 'inti_customizer_options') . '; }';
	}
	if ( "'Open Sans', sans-serif" != get_inti_option('h4_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h4, .entry-summary h4 { font-family: ' . get_inti_option('h4_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h4_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h4, .entry-summary h4 { font-size: ' . get_inti_option('h4_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h4_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h4, .entry-summary h4 { color: ' . get_inti_option('h4_color', 'inti_customizer_options') . '; }';
	}
	if ( "'Open Sans', sans-serif" != get_inti_option('h5_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h5, .entry-summary h5 { font-family: ' . get_inti_option('inti_customizer_options', 'h5_font') . '; }';
	}
	if ( get_inti_option('h5_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h5, .entry-summary h5 { font-size: ' . get_inti_option('h5_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h5_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h5, .entry-summary h5 { color: ' . get_inti_option('h5_color', 'inti_customizer_options') . '; }';
	}
	if ( "'Open Sans', sans-serif" != get_inti_option( 'h6_font', 'inti_customizer_options', "'Open Sans', sans-serif") ) {
		$output .= "\n" . '.entry-content h6, .entry-summary h6 { font-family: ' . get_inti_option('h6_font', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h6_size', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h6, .entry-summary h6 { font-size: ' . get_inti_option('h6_size', 'inti_customizer_options') . '; }';
	}
	if ( get_inti_option('h6_color', 'inti_customizer_options') ) {
		$output .= "\n" . '.entry-content h6, .entry-summary h6 { color: ' . get_inti_option('h6_color', 'inti_customizer_options') . '; }';
	}

	echo ( $output ) ? '<style type="text/css">' . apply_filters('inti_customizer_css', $output) . "\n" . '</style>' . "\n" : '';
}
add_action('wp_head', 'inti_customizer_css');


/**
 * JavaScript handlers to make Theme Customizer preview reload changes asynchronously.
 * Credit: Twenty Twelve 1.0
 *
 * @since 1.0.0
 */
function inti_customize_preview_js() {
	wp_enqueue_script('inti-customizer-preview-js', get_template_directory_uri() . '/framework/customizer/js/theme-customizer-preview.js', array(), filemtime(get_template_directory() . '/framework/customizer/js/theme-customizer-preview.js'), true );
}
add_action('customize_preview_init', 'inti_customize_preview_js');


/**
 * JavaScript handlers to make Theme Customizer to help custom controls do what they need to do.
 *
 * @since 1.0.10
 */
function inti_customize_controls_js() {
	wp_enqueue_script('inti-customizer-controls-js', get_template_directory_uri() . '/framework/customizer/js/theme-customizer-controls.js', '', filemtime(get_template_directory() . '/framework/customizer/js/theme-customizer-controls.js'), true );
}
add_action('customize_controls_enqueue_scripts', 'inti_customize_controls_js');


/**
 * Add CSS to the WP Theme Customizer page
 *
 * @since 1.0.10
 */
function inti_customize_control_css() {
	$output = '	
		.customize-control { margin-bottom:16px; }
		.customize-control-radio { padding:0; }
		.customize-control-checkbox label { line-height:20px; }
	</style>';

	echo ( $output ) ? '<style type="text/css">' . apply_filters('inti_customize_control_css_filter', $output) . "\n" . '</style>' . "\n" : '';
}
add_action('customize_controls_print_styles', 'inti_customize_control_css');


/**
 * Register Customizer
 *
 * 1) Defines classes for custom controls
 * 2) Removes junk from Customize
 * 3) Adds all sections and settings
 *
 * @author Samuel Wood (Otto) (@Otto42 / ottopress.com)
 * @link http://ottopress.com/2012/theme-customizer-part-deux-getting-rid-of-options-pages/
 * @since 1.0.0
 */
if ( !function_exists('inti_customize_register') ) {
	add_action('customize_register', 'inti_customize_register');

	function inti_customize_register( $wp_customize ) {
		
		do_action('inti_customize_register', $wp_customize);
		
		/**
		 * 1) Defines classes for custom controls
		 */

		/**
		 * Textarea control
		 *
		 * @since 1.0.0
		 */
		if ( !class_exists('WP_Customize_Textarea_Control') ) {
			class WP_Customize_Textarea_Control extends WP_Customize_Control {
			public $type = 'textarea';
		 
				public function render_content() { ?>
					<label><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
					</label>
				<?php
				}
			}
		}

		/**
		 * Textarea control
		 *
		 * @since 1.0.10
		 * @version 1.2.2
		 */
		if ( !class_exists('WP_Customize_WPEditor_Control') ) {
			class WP_Customize_WPEditor_Control extends WP_Customize_Control {
				public $type = 'wysiwyg';
		
				public function render_content() { 
					static $i = 1;

					// Important
					static $number_of_editors = 1; // You'll have to manually tell this control how many there'll be

					?>
					<style>
						.mce-container {
							z-index: 99999999999999 !important;
						}
						#wp-link-wrap {
							z-index: 99999999999999 !important;
						}
						#wp-link-backdrop {
							z-index: 99999999999999 !important;
						}
					</style>
					<label><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo $this->description; ?></span>
					<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>">
						<?php
						$content = $this->value();
						$editor_id = str_replace('[', '_', $this->id);
						$editor_id = str_replace(']', '', $editor_id);
						$settings = array( 
							'textarea_name' => $this->id,
							'media_buttons' => false, 
							'drag_drop_upload'=>false 
						);

						wp_editor( $content, $editor_id, $settings );

						do_action('admin_footer');

						if ($i == $number_of_editors ) {
							do_action('admin_print_footer_scripts');
						}
						$i++;

						?>
					
					</label>
				<?php
				}
			}
		}

		/**
		 * Post Categories control
		 * from wp-includes/class-wp-customize-control.php
		 *
		 * @since 1.0.0
		 */
		if ( !class_exists('WP_Customize_Dropdown_Categories_Control') ) {
			class WP_Customize_Dropdown_Categories_Control extends WP_Customize_Control {
			public $type = 'dropdown-categories';	
			
				public function render_content() {
					$dropdown = wp_dropdown_categories( 
						array( 
							'name'             => '_customize-dropdown-categories-' . $this->id,
							'echo'             => 0,
							'hide_empty'       => false,
							'show_option_none' => '&mdash; ' . __('Select Category', 'inti') . ' &mdash;',
							'hide_if_empty'    => false,
							'selected'         => $this->value(),
						 )
					 );
		
					$dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown );
		
					printf( 
						'<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
						$this->label,
						$dropdown
					 );
				}
			}
		}
		
		/** 
		 * Dropdown Pages 
		 * Shows select for pages
		 * @since 1.2.2
		 */
		if ( !class_exists('WP_Customize_Dropdown_Pages_Control') ) {
			class WP_Customize_Dropdown_Pages_Control extends WP_Customize_Control {
				public $type = 'dropdown-pages';	
				
				public function render_content() {

					$args = array(
						'post_type' => 'page',
						'orderby' => 'title',
						'order' => 'ASC',
						'posts_per_page' => 100,
					);
					$optins = new WP_Query($args);

					$dropdown = '<select name="_customize-dropdown-page-'.$this->id.'" 
										 id="_customize-dropdown-page-'.$this->id.'" 
										 class="postform">';

					$dropdown .= '<option value="-1">&mdash; ' . __('Select Page', 'inti') . ' &mdash;</option>';


					while($optins->have_posts()) : $optins->the_post();

						$dropdown .= '<option value="'. get_the_ID(). '">'.get_the_title().'</option>';

					endwhile;

						

					$dropdown .= '</select>';

					$dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown );

					printf( 
						'<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
						$this->label,
						$dropdown
					 );
				}
			}

		}
		
		/**
		 * 2) Removes junk from Customize
		 */
		$wp_customize->remove_section('title_tagline');
		$wp_customize->remove_section('colors');
		$wp_customize->remove_section('header_image');
		$wp_customize->remove_section('background_image');
		$wp_customize->remove_section('static_front_page');
		$wp_customize->remove_section('nav');
		

		/**
		 * 3) Adds all sections and settings
		 */
		// Header
		$wp_customize->add_section('inti_customizer_general', array( 
			'title'    => __('General/Header', 'inti'),
			'priority' => 5,
		 ) );

			$wp_customize->add_setting('blogname', array( 
				'default'    => get_option('blogname'),
				'type'       => 'option',
				'capability' => 'manage_options',
				'transport'  => 'postMessage',
			 ) );
				$wp_customize->add_control('blogname', array( 
					'label'    => __('Site Title', 'inti'),
					'section'  => 'inti_customizer_general',
					'priority' => 2,
				 ) );

			$wp_customize->add_setting('blogdescription', array( 
				'default'    => get_option('blogdescription'),
				'type'       => 'option',
				'capability' => 'manage_options',
				'transport'  => 'postMessage',
			 ) );
				$wp_customize->add_control('blogdescription', array( 
					'label'    => __('Tagline', 'inti'),
					'section'  => 'inti_customizer_general',
					'priority' => 4,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[show_title]', array( 
				'default'    => 1,
				'type'       => 'option',
				'capability' => 'manage_options',
				'transport'  => 'postMessage',
			 ) );	
				$wp_customize->add_control('inti_customizer_options[show_title]', array( 
					'label'    => __('Show Title & Tagline', 'inti'),
					'section'  => 'inti_customizer_general',
					'type'     => 'checkbox',
					'priority' => 6,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[logo_image]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_logo_image', array( 
					'label'    => __('Site Logo', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[logo_image]',
					'priority' => 8,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[nav_logo_image]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_nav_logo_image', array( 
					'label'    => __('Site Logo (miniature)', 'inti'),
					'description' => _('Icon or small version for use on small screens or inside the navegation bar'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[nav_logo_image]',
					'priority' => 10,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[show_nav_logo_title]', array( 
				'default'    => 'none',
				'type'       => 'option',
				'capability' => 'manage_options',
				//'transport'  => 'postMessage',
			 ) );	
				$wp_customize->add_control('inti_customizer_options[show_nav_logo_title]', array( 
					'label'    => __('What to show on nav bar on small screens', 'inti'),
					'section'  => 'inti_customizer_general',
					'type'     => 'select',
					'choices'  => array(
						'none' => __('Nothing', 'inti'),
						'image' => __('Miniature Logo', 'inti'),
						'title' => __('Site Title', 'inti')
								),
					'priority' => 12,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[show_sticky_logo_title]', array( 
				'default'    => 'none',
				'type'       => 'option',
				'capability' => 'manage_options',
				//'transport'  => 'postMessage',
			 ) );	
				$wp_customize->add_control('inti_customizer_options[show_sticky_logo_title]', array( 
					'label'    => __('What to show on nav bar on sticky navigation', 'inti'),
					'section'  => 'inti_customizer_general',
					'type'     => 'select',
					'choices'  => array(
						'none' => __('Nothing', 'inti'),
						'image' => __('Miniature Logo', 'inti'),
						'title' => __('Site Title', 'inti')
								),
					'priority' => 14,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[favicon_image]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_favicon_image', array( 
					'label'    => __('Favicon', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[favicon_image]',
					'priority' => 16,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[apple_touch_icon]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_apple_touch_icon', array( 
					'label'    => __('Apple Touch Icon', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[apple_touch_icon]',
					'priority' => 18,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[ms_tile_color]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_ms_tile_color', array( 
					'label'    => __('Windows Tile Color', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[ms_tile_color]',
					'priority' => 20,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[ms_tile_image]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_ms_tile_image', array( 
					'label'    => __('Windows Tile Image', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[ms_tile_image]',
					'priority' => 22,
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[theme_color]', array( 
				'default'    => '',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_theme_color', array( 
					'label'    => __('Theme Color', 'inti'),
					'section'  => 'inti_customizer_general',
					'settings' => 'inti_customizer_options[theme_color]',
					'priority' => 24,
				 ) ) );
		
		
		// Posts & Pages
		$theme_layouts = inti_get_theme_layouts(false);
		
		$wp_customize->add_section('inti_customizer_posts', array( 
			'title'    => __('Page Options', 'inti'),
			'priority' => 20,
		 ) );

			$wp_customize->add_setting('inti_customizer_options[site_layout]', array( 
				'default'    => '2c-l',
				'type'       => 'option',
				'capability' => 'manage_options'
			 ) );
				$wp_customize->add_control('inti_customizer_options[site_layout]', array( 
					'label'       => __('Default Layout', 'inti'),
					'description' => __('Default layout for all pages, posts, archives and custom types throughout the site if not individually changed or overwritten below','inti'),
					'section'     => 'inti_customizer_posts',
					'type'        => 'select',
					'choices'     => $theme_layouts,
					'priority'    => 4,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[page_layout]', array( 
				'default'    => '2c-l',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control('inti_customizer_options[page_layout]', array( 
					'label'       => __('Page Layout', 'inti'),
					'description' => __('Default layout for static pages','inti'),
					'section'     => 'inti_customizer_posts',
					'type'        => 'select',
					'choices'     => $theme_layouts,
					'priority'    => 5,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[post_layout]', array( 
				'default'    => '2c-l',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control('inti_customizer_options[post_layout]', array( 
					'label'       => __('Single Post Layout', 'inti'),
					'description' => __('Default layout for blog posts','inti'),
					'section'     => 'inti_customizer_posts',
					'type'        => 'select',
					'choices'     => $theme_layouts,
					'priority'    => 6,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[archive_layout]', array( 
				'default'    => '2c-l',
				'type'       => 'option',
				'capability' => 'manage_options',
			 ) );
				$wp_customize->add_control('inti_customizer_options[archive_layout]', array( 
					'label'       => __('Post Archive Layout', 'inti'),
					'description' => __('Default layout for blog post archives and index','inti'),
					'section'     => 'inti_customizer_posts',
					'type'        => 'select',
					'choices'     => $theme_layouts,
					'priority'    => 6,
				 ) );
			$wp_customize->add_setting('inti_customizer_options[sticky_sidebars]', array( 
				'default'        => 'static',
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-sticky-sidebars',
			 ) );
				$wp_customize->add_control('inti_customizer_options[sticky_sidebars]', array( 
					'label'			=> __('Sticky Sidebars', 'inti'),
					'description'	=> __( 'Keep sidebar widgets in view as you scroll down the page.', 'inti' ),
					'section'		=> 'inti_customizer_posts',
					'type'			=> 'select',
					'choices'		=> array(
						'static'  => __('Static', 'inti'),
						'sticky'  => __('Sticky', 'inti'),
					),
					'priority' => 7,
				 ) );	

			

		// Fonts 
		$font_faces = array_merge(inti_get_typography_os_fonts() , inti_get_typography_google_fonts());
		$font_sizes = inti_get_typography_font_sizes();
		
		$wp_customize->add_section('inti_customizer_main_styles', array( 
			'title'          => __('Main Styles', 'inti'),
			'priority'       => 30,
			'theme_supports' => 'inti-fonts',
		 ) );

			$wp_customize->add_setting('inti_customizer_options[title_font]', array( 
				'default'        => "'Helvetica Neue', Helvetica, Arial, sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[title_font]', array( 
					'label'    => __('Page & Post Titles Font', 'inti'),
					'section'  => 'inti_customizer_main_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[title_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_title_color', array( 
					'label'    => __('Page & Post Titles Color', 'inti'),
					'section'  => 'inti_customizer_main_styles',
					'settings' => 'inti_customizer_options[title_color]',
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[link_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_link_color', array( 
					'label'    => __('General Link Color', 'inti'),
					'section'  => 'inti_customizer_main_styles',
					'settings' => 'inti_customizer_options[link_color]',
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[link_hover_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_link_hover_color', array( 
					'label'    => __('General Link Hover Color', 'inti'),
					'section'  => 'inti_customizer_main_styles',
					'settings' => 'inti_customizer_options[link_hover_color]',
				 ) ) );




		$wp_customize->add_section('inti_customizer_content_styles', array( 
			'title'          => __('Content Styles', 'inti'),
			'priority'       => 55,
			'theme_supports' => 'inti-fonts',
		 ) );
 

			$wp_customize->add_setting('inti_customizer_options[paragraph_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[paragraph_font]', array( 
					'label'    => __('Paragraph Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[paragraph_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[paragraph_size]', array( 
					'label'    => __('Paragraph Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[paragraph_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_paragraph_color', array( 
					'label'    => __('Paragraph Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[paragraph_color]',
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[content_link_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_content_link_color', array( 
					'label'    => __('Content Link Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[content_link_color]',
				 ) ) );

			$wp_customize->add_setting('inti_customizer_options[content_link_hover_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_content_link_hover_color', array( 
					'label'    => __('Content Link Hover Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[content_link_hover_color]',
				 ) ) );

			//h1
			$wp_customize->add_setting('inti_customizer_options[h1_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h1_font]', array( 
					'label'    => __('H1 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h1_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h1_size]', array( 
					'label'    => __('H1 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h1_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h1_color', array( 
					'label'    => __('H1 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h1_color]',
				 ) ) );

			//h2
			$wp_customize->add_setting('inti_customizer_options[h2_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h2_font]', array( 
					'label'    => __('H2 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h2_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h2_size]', array( 
					'label'    => __('H2 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h2_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h2_color', array( 
					'label'    => __('H2 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h2_color]',
				 ) ) );

			//h3
			$wp_customize->add_setting('inti_customizer_options[h3_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h3_font]', array( 
					'label'    => __('H3 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h3_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h3_size]', array( 
					'label'    => __('H3 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h3_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h3_color', array( 
					'label'    => __('H3 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h3_color]',
				 ) ) );

			//h4
			$wp_customize->add_setting('inti_customizer_options[h4_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h4_font]', array( 
					'label'    => __('H4 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h4_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h4_size]', array( 
					'label'    => __('H4 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h4_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h4_color', array( 
					'label'    => __('H4 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h4_color]',
				 ) ) );

			//h5
			$wp_customize->add_setting('inti_customizer_options[h5_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h5_font]', array( 
					'label'    => __('H5 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h5_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h5_size]', array( 
					'label'    => __('H5 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h5_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h5_color', array( 
					'label'    => __('H5 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h5_color]',
				 ) ) );


			//h6
			$wp_customize->add_setting('inti_customizer_options[h6_font]', array( 
				'default'        => "'Open Sans', sans-serif",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h6_font]', array( 
					'label'    => __('H6 Font', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_faces,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h6_size]', array( 
				'default'        => "",
				'type'           => 'option',
				'capability'     => 'manage_options',
				'theme_supports' => 'inti-fonts',
			 ) );
				$wp_customize->add_control('inti_customizer_options[h6_size]', array( 
					'label'    => __('H6 Size', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'type'     => 'select',
					'choices'  => $font_sizes,
				 ) );

			$wp_customize->add_setting('inti_customizer_options[h6_color]', array( 
				'default'              => '',
				'type'                 => 'option',
				'capability'           => 'manage_options',
				'theme_supports'       => 'inti-fonts',
				'sanitize_callback'    => 'maybe_hash_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			 ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inti_h6_color', array( 
					'label'    => __('H6 Color', 'inti'),
					'section'  => 'inti_customizer_content_styles',
					'settings' => 'inti_customizer_options[h4_color]',
				 ) ) );


		// Footer
		$wp_customize->add_section('inti_customizer_footer', array( 
			'title'          => __('Footer', 'inti'),
			'priority'       => 55
		 ) );			

			$wp_customize->add_setting('inti_customizer_options[custom_copyright]', array( 
				'default'        => '',
				'type'           => 'option',
				'capability'     => 'manage_options',
			 ) );
				$wp_customize->add_control(
					new WP_Customize_WPEditor_Control(
						$wp_customize,
						'inti_customizer_options[custom_copyright]', 
						array( 
							'label'			=> __('Copyright Text', 'inti'),
							'description'	=> __('There is a custom copyright notice in the footer by default, to replace it with a custom notice, enter your text here. Leave blank to see the default notice.', 'inti') . __('To add the cookie management link (if enabled), use the shortcode <code>[cookie_manager]link text[/cookie_manager]</code>.', 'inti'),
							'section'		=> 'inti_customizer_footer',
							'settings'		=> 'inti_customizer_options[custom_copyright]',
							'type'			=> 'wysiwyg',
							'priority'		=> 1,
						)
					)
				);	


		// Login
		$wp_customize->add_section('inti_customizer_login', array( 
			'title'          => __('Login', 'inti'),
			'priority'       => 55,
			'theme_supports' => 'inti-custom-login',
		 ) );

			$wp_customize->add_setting('inti_customizer_options[login_logo]', array( 
				'default'        => '',
				'type'           => 'option',
				'capability'     => 'manage_options',
				'transport'		=> 'postMessage',
				'theme_supports' => 'inti-custom-login',
			 ) );
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'inti_login_logo', array( 
					'label'    => __('Login Logo', 'inti'),
					'section'  => 'inti_customizer_login',
					'settings' => 'inti_customizer_options[login_logo]',
				 ) ) );
				
			$wp_customize->add_setting('inti_customizer_options[login_logo_url]', array( 
				'default'        => '',
				'type'           => 'option',
				'capability'     => 'manage_options',
				'transport'		=> 'postMessage',
				'theme_supports' => 'inti-custom-login',
			 ) );
				$wp_customize->add_control('inti_customizer_options[login_logo_url]', array( 
					'label'    => __('Logo Link URL', 'inti'),
					'section'  => 'inti_customizer_login',
					'type'     => 'text',
				 ) );

			$wp_customize->add_setting('inti_customizer_options[login_logo_title]', array( 
				'default'        => '',
				'type'           => 'option',
				'capability'     => 'manage_options',
				'transport'		=> 'postMessage',
				'theme_supports' => 'inti-custom-login',
			 ) );
				$wp_customize->add_control('inti_customizer_options[login_logo_title]', array( 
					'label'    => __('Logo Title Attribute', 'inti'),
					'section'  => 'inti_customizer_login',
					'type'     => 'text',
				 ) );
				 
	}
}