<?php

/**
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Imagedirect Wordpress Pro for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
require_once get_theme_file_path('lib/tgm-plugin-activation/class-tgm-plugin-activation.php');

add_action('tgmpa_register', 'imagedirect_register_plugins');

if (!function_exists('imagedirect_get_plugin_registry')) :


    function imagedirect_get_plugin_registry(): array
    {

       return [
            [ 
            /**
                         * Login with Google
                         *
                         * @link https://en-au.wordpress.org/plugins/disable-user-password-reset-emails/
                         * @since 1.0.15
                         * ---------------- */
                        'name'             => 'Disable Password Reset Emails',
                        'slug'             => 'disable-user-password-reset-emails',
                        'required'         => false,
                        'force_activation' => false,
            
            ],
                    [
                        /**
                         * Login with Google
                         *
                         * @link https://en-au.wordpress.org/plugins/login-with-google/
                         * @since 1.0.14
                         * ---------------- */
                        'name'             => 'Log in with Google',
                        'slug'             => 'login-with-google',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * MailerSend – Official SMTP Integration
                         *
                         * @link https://en-au.wordpress.org/plugins/mailersend-official-smtp-integration/
                         * @since 1.0.14
                         * ---------------- */
                        'name'             => 'MailerSend – Official SMTP Integration',
                        'slug'             => 'mailersend-official-smtp-integration',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Carousel Slider Block for Gutenberg
                         *
                         * @link   https://wordpress.org/plugins/carousel-block/
                         * @since  1.0.13
                         * ---------------- */
                        'name'             => 'Carousel Slider Block for Gutenberg',
                        'slug'             => 'carousel-block',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Disable Comments
                         *
                         * @link   https://en-au.wordpress.org/plugins/disable-comments/
                         * @since  1.0.12
                         * ---------------- */
                        'name'             => 'Disable Comments',
                        'slug'             => 'disable-comments',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Default Featured Image
                         *
                         * @link   https://wordpress.org/plugins/default-featured-image/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Default Featured Image',
                        'slug'             => 'default-featured-image',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Redirection
                         *
                         * @link   https://en-au.wordpress.org/plugins/redirection/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Redirection',
                        'slug'             => 'redirection',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Prime Mover
                         *
                         * @link   https://en-au.wordpress.org/plugins/prime-mover/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Prime Mover',
                        'slug'             => 'prime-mover',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Admin Notices Manager
                         *
                         * @link   https://wordpress.org/plugins/admin-notices-manager/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Admin Notices Manager',
                        'slug'             => 'admin-notices-manager',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Optimize Database after Deleting Revisions
                         *
                         * @link   https://wordpress.org/plugins/rvg-optimize-database/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Optimize Database after Deleting Revisions',
                        'slug'             => 'rvg-optimize-database',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * WP Map Block
                         *
                         * @link   https://wordpress.org/plugins/wp-map-block/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'WP Map Block',
                        'slug'             => 'wp-map-block',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Enable Media Replace
                         *
                         * @link   https://en-au.wordpress.org/plugins/enable-media-replace/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Enable Media Replace',
                        'slug'             => 'enable-media-replace',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Meta pixel for WordPress
                         *
                         * @link   https://en-au.wordpress.org/plugins/official-facebook-pixel/
                         * @since  1.0.7
                         * ---------------- */
                        'name'             => 'Meta pixel for WordPress',
                        'slug'             => 'official-facebook-pixel',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * SVG Icon
                         *
                         * @link   https://en-au.wordpress.org/plugins/svg-block/
                         * @since  1.0.8
                         * ---------------- */
                        'name'             => 'SVG Block',
                        'slug'             => 'svg-block',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Icon Separator
                         *
                         * @link   https://en-au.wordpress.org/plugins/icon-separator/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Icon Separator',
                        'slug'             => 'icon-separator',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * SVG Support
                         *
                         * @link   https://en-au.wordpress.org/plugins/svg-support/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'SVG Support',
                        'slug'             => 'svg-support',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Super Block Slider
                         *
                         * @link   https://en-au.wordpress.org/plugins/super-block-slider/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Super Block Slider *',
                        'slug'             => 'super-block-slider',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Instant Images
                         *
                         * @link   https://en-au.wordpress.org/plugins/instant-images/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Instant Images *',
                        'slug'             => 'instant-images',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Breadcrumb Block
                         *
                         * @link   https://en-au.wordpress.org/plugins/breadcrumb-block/
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Breadcrumb Block',
                        'slug'             => 'breadcrumb-block',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Blocks Animation
                         *
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Blocks Animation',
                        'slug'             => 'blocks-animation',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Akismet Antispam
                         *
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Akismet Antispam',
                        'slug'             => 'akismet',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Jetpack
                         *
                         * @link   https://en-au.wordpress.org/plugins/jetpack/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Jetpack',
                        'slug'             => 'jetpack',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Post Type Switcher
                         *
                         * @link  https://en-au.wordpress.org/plugins/post-type-switcher/
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Post Type Switcher',
                        'slug'             => 'post-type-switcher',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Duplicate Post
                         *
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Duplicate Post',
                        'slug'             => 'duplicate-post',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Disable Plugin Update Emails
                         *
                         * @link   https://wordpress.org/plugins/disable-theme-and-plugin-auto-update-emails/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Disable Plugin Update Emails',
                        'slug'             => 'disable-theme-and-plugin-auto-update-emails',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Disable Emojis
                         *
                         * @link   https://wordpress.org/plugins/disable-emojis/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Disable Emojis',
                        'slug'             => 'disable-emojis',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Wordpress Gutenberg
                         *
                         * @link   https://en-au.wordpress.org/plugins/gutenberg/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Gutenberg',
                        'slug'             => 'gutenberg',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Performance Lab
                         *
                         * @link   https://en-au.wordpress.org/plugins/performance-lab/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Performance Lab',
                        'slug'             => 'performance-lab',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Google Site Kit
                         *
                         * @link   https://en-au.wordpress.org/plugins/google-site-kit/
                         * @since  1.0.3
                         * ---------------- */
                        'name'             => 'Google Site Kit',
                        'slug'             => 'google-site-kit',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                    [
                        /**
                         * Health Check
                         *
                         * @since 1.0.3
                         * ---------------- */
                        'name'             => 'Health Check',
                        'slug'             => 'health-check',
                        'required'         => false,
                        'force_activation' => false,
                    ],
                ];
    }

endif;

if (!function_exists('imagedirect_register_plugins')) :


    function imagedirect_register_plugins()
    {

        $config = array(
            'domain'       => 'imagedirect-wordpress-pro',
            'default_path' => '',
            'menu'         => 'install-required-plugins',
            'parent_slug'  => 'themes.php',
            'capability'   => 'edit_theme_options',
            'has_notices'  => false,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
            'strings'      => array(
                'page_title'                      => __('Install Recommended Plugins', 'imagedirect-wordpress-pro'),
                'menu_title'                      => __('Theme Plugins', 'imagedirect-wordpress-pro'),
                // translators: %s: plugin name.
                'installing'                      => __('Installing Plugin: %s', 'imagedirect-wordpress-pro'),
                // translators: %s: plugin name.
                'updating'                        => __('Updating Plugin: %s', 'imagedirect-wordpress-pro'),
                'oops'                            => __('Something went wrong with the plugin API.', 'imagedirect-wordpress-pro'),
                'notice_can_install_required'     => _n_noop(
                    // translators: 1: plugin name(s).
                    'This theme requires the following plugin: %1$s.',
                    'This theme requires the following plugins: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'notice_can_install_recommended'  => _n_noop(
                    // translators: 1: plugin name(s).
                    'This theme recommends the following plugin: %1$s.',
                    'This theme recommends the following plugins: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'notice_ask_to_update'            => _n_noop(
                    // translators: 1: plugin name(s).
                    'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                    'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'notice_ask_to_update_maybe'      => _n_noop(
                    // translators: 1: plugin name(s).
                    'There is an update available for: %1$s.',
                    'There are updates available for the following plugins: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'notice_can_activate_required'    => _n_noop(
                    // translators: 1: plugin name(s).
                    'The following required plugin is currently inactive: %1$s.',
                    'The following required plugins are currently inactive: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'notice_can_activate_recommended' => _n_noop(
                    // translators: 1: plugin name(s).
                    'The following recommended plugin is currently inactive: %1$s.',
                    'The following recommended plugins are currently inactive: %1$s.',
                    'imagedirect-wordpress-pro'
                ),
                'install_link'                    => _n_noop(
                    'Begin installing plugin',
                    'Begin installing plugins',
                    'imagedirect-wordpress-pro'
                ),
                'update_link'                     => _n_noop(
                    'Begin updating plugin',
                    'Begin updating plugins',
                    'imagedirect-wordpress-pro'
                ),
                'activate_link'                   => _n_noop(
                    'Begin activating plugin',
                    'Begin activating plugins',
                    'imagedirect-wordpress-pro'
                ),
                'return'                          => __('Return to Required Plugins Installer', 'imagedirect-wordpress-pro'),
                'plugin_activated'                => __('Plugin activated successfully.', 'imagedirect-wordpress-pro'),
                'activated_successfully'          => __('The following plugin was activated successfully:', 'imagedirect-wordpress-pro'),
                // translators: 1: plugin name.
                'plugin_already_active'           => __('No action taken. Plugin %1$s was already active.', 'imagedirect-wordpress-pro'),
                // translators: 1: plugin name.
                'plugin_needs_higher_version'     => __('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'imagedirect-wordpress-pro'),
                // translators: 1: dashboard link.
                'complete'                        => __('All plugins installed and activated successfully. %1$s', 'imagedirect-wordpress-pro'),
                'dismiss'                         => __('Dismiss this notice', 'imagedirect-wordpress-pro'),
                'notice_cannot_install_activate'  => __('There are one or more required or recommended plugins to install, update or activate.', 'imagedirect-wordpress-pro'),
                'contact_admin'                   => __('Please contact the administrator of this site for help.', 'imagedirect-wordpress-pro'),
                'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
            ),
        );

        tgmpa(
            imagedirect_get_plugin_registry(),
            $config
        );
    }











endif;
