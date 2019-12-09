<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'progression_studios_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function progression_studios_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		
      array(
          'name'                  => esc_html__('Boosted Elements', 'viseo-progression' ), // The plugin name
          'slug'                  => 'boosted-elements-progression', // The plugin slug (typically the folder name)
			 'source'             => get_template_directory() . '/inc/tgm-plugin-activation/plugins/boosted-elements-progression.zip', // The plugin source.
			 'required' 	=> false,
      ),

      array(
          'name'                  => esc_html__('Progression Theme Elements - Viseo', 'viseo-progression' ), // The plugin name
          'slug'                  => 'progression-elements-viseo', // The plugin slug (typically the folder name)
			 'source'             => get_template_directory() . '/inc/tgm-plugin-activation/plugins/progression-elements-viseo.zip', // The plugin source.
			 'required' 	=> false,
      ),
		
		array(
          'name'                  => esc_html__('Advanced Custom Fields', 'viseo-progression' ), // The plugin name
          'slug'                  => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name)
			 'source'             => get_stylesheet_directory() . '/inc/tgm-plugin-activation/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			 'required' 	=> false,     
      ),
		
      array(
          'name'                  => esc_html__('WP Progression Player', 'viseo-progression' ), // The plugin name
          'slug'                  => 'wp-progression-player', // The plugin slug (typically the folder name)
			 'source'             => get_template_directory() . '/inc/tgm-plugin-activation/plugins/progression-player.zip', // The plugin source.
			 'required' 	=> false,
      ),

		
		array(
			'name' 		=> esc_html__('Elementor Page Builder', 'viseo-progression' ),
			'slug' 		=> 'elementor',
			'required' 	=> false,
		),
		
		array(
			'name' 		=> esc_html__('CMB2', 'viseo-progression' ),
			'slug' 		=> 'cmb2',
			'required' 	=> false,
		),
		
		
		array(
			'name' 		=> esc_html__('Contact Form 7', 'viseo-progression' ),
			'slug' 		=> 'contact-form-7',
			'required' 	=> false,
		),
		
		array(
			'name' 		=> esc_html__('WooCommerce', 'viseo-progression' ),
			'slug' 		=> 'woocommerce',
			'required' 	=> false,
		),
		
	
		array(
			'name' 		=> esc_html__('Easy Google Fonts', 'viseo-progression' ),
			'slug' 		=> 'easy-google-fonts',
			'required' 	=> false,
		),
		
		array(
			'name' 		=> esc_html__('Theme My Login', 'viseo-progression' ),
			'slug' 		=> 'theme-my-login',
			'required' 	=> false,
		),
		
		
		array(
          'name'                  => esc_html__('Post Views Counter', 'viseo-progression' ),
          'slug'                  => 'post-views-counter', // The plugin slug (typically the folder name)
			 'required' 	=> false,     
      ),
		
		array(
          'name'                  => esc_html__('Categories Images', 'viseo-progression' ),
          'slug'                  => 'categories-images', // The plugin slug (typically the folder name)
			 'required' 	=> false,     
      ),
		


		
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'viseo-progression',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'viseo-progression' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'viseo-progression' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'viseo-progression' ), // %s = plugin name.
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'viseo-progression' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
				'viseo-progression'
			), // %1$s = plugin name(s).
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'viseo-progression'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'viseo-progression'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'viseo-progression'
			),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'viseo-progression' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'viseo-progression' ),
			'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'viseo-progression' ),
			'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'viseo-progression' ),  // %1$s = plugin name(s).
			'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'viseo-progression' ),  // %1$s = plugin name(s).
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'viseo-progression' ), // %s = dashboard link.
			'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'viseo-progression' ),

			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		),

	);

	tgmpa( $plugins, $config );
}
