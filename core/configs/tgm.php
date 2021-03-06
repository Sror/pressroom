<?php
require( PR_LIBS_PATH . 'TGM_Plugin_Activation/class_tgm_plugin_activation.php' );
if (!class_exists('PR_TGM')) {
	class PR_TGM {

		public function __construct() {

			add_action( 'tgmpa_register', array( $this , 'pr_required_plugins' ));

		}

		/**
		* set required plugin for pressroom
		*
		* @void
		*/
		public function pr_required_plugins() {

			$plugins = array(
		        array(
		            'name'               => 'Posts 2 posts',
		            'slug'               => 'posts-to-posts',
		            'source'             => 'http://downloads.wordpress.org/plugin/posts-to-posts.1.6.3.zip',
		            'required'           => true,
		            'external_url'       => '',
		        ),
		    );

		    $config = array(
		        'id'           => 'pressroom',         			// Unique ID for hashing notices for multiple instances of pressroom.
		        'default_path' => '',                      	// Default absolute path to pre-packaged plugins.
		        'menu'         => 'pr-pressroom-plugins', 	// Menu slug.
		        'has_notices'  => true,                    	// Show admin notices or not.
		        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		        'dismiss_msg'  => '',                      	// If 'dismissable' is false, this message will be output at top of nag.
		        'is_automatic' => true,                    	// Automatically activate plugins after installation or not.
		        'message'      => '',                      	// Message to output right before the plugins table.
		        'strings'      => array(
		            'page_title'                      => __( 'Install Required Plugins', 'pressroom' ),
		            'menu_title'                      => __( 'Install Plugins', 'pressroom' ),
		            'installing'                      => __( 'Installing Plugin: %s', 'pressroom' ), // %s = plugin name.
		            'oops'                            => __( 'Something went wrong with the plugin API.', 'pressroom' ),
		            'notice_can_install_required'     => _n_noop( 'PressRoom plugin requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_can_install_recommended'  => _n_noop( 'This plugin recommends the following plugin: %1$s.', 'This plugin recommends the following plugins: %1$s.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this plugin: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this plugin: %1$s.', 'pressroom' ), // %1$s = plugin name(s).
		            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'pressroom' ), // %1$s = plugin name(s).
		            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'pressroom' ),
		            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'pressroom' ),
		            'return'                          => __( 'Return to Required Plugins Installer', 'pressroom' ),
		            'plugin_activated'                => __( 'Plugin activated successfully.', 'pressroom' ),
		            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'pressroom' ), // %s = dashboard link.
		            'nag_type'                        => 'error' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		        )
		    );

		    tgmpa( $plugins, $config );

		}

	}

	$PR_TGM = new PR_TGM();
}
