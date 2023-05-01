<?php

/**
 * @package imageDirect
 *
 * Plugin Name: imageDirect Plugin Registry
 *
 * Description: Registry of recommended plugins
 * Version: 1.0.12
 *
 *  Author: ImageDirect WebTeam
 * Author URI: https://www.imagedirect.com.au/
 *
 * Text Domain: imageDirect-plugin-registry
 * Domain Path: /languages
 *
 * License:     GNU General Public License (Version 2 - GPLv2)
 * Plugin Registry is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Plugin Registry is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with imageDirect Plugin Registry. If not, see <http://www.gnu.org/licenses/>.
 *
 * -------------------------------------------------- */
/**
 * Abort if this file is called directly.
 *
 * @since 1.0.0
 *
 * -------------------------------------------------- */
defined('WPINC') || die;

/**
 *
 * Load plugin after set_up_theme
 *
 * @since 1.0.0
 *
 * -------------------------------------------------- */
add_action('init', function (): void
{

        /**
         * Register plugins.
         * @since  1.0.4
         * ----------------- */
        require_once plugin_dir_path(__FILE__) . '/inc/register-plugins.php';
        require_once plugin_dir_path(__FILE__) . '/lib/tgm-plugin-activation/class-tgm-plugin-activation.php';
});
