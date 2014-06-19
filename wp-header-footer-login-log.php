<?php
/*
Plugin Name: WP Header Footer Login Log
Plugin URI: http://slangji.wordpress.com/wp-header-footer-log/
Description: add src nfo txt log (visible with show view source browser function) on header footer and login when plugin is activated without add nothing to wp_option database table
Version: 2014.0610.0410
Author: slangjis
Author URI: http://slangji.wordpress.com/
Requires at least: 2.1
Tested up to: 4.1
Donate link: http://slangji.wordpress.com/donate/
Network: true
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
Humans: We are the humans behind
Humans URI: http://humanstxt.org/Standard.html
 *
 * LICENSING (license.txt)
 *
 * [WP Header Footer Log](//wordpress.org/plugins/wp-header-footer-log/)
 *
 * Add and Show Info Text Log on Header Footer and Login when Plugin is Activated
 *
 * Copyright (C) 2008-2014 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](//wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](//www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](//www.gnu.org/licenses/gpl-2.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008-2013 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * sLa2sLaNGjIs.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2013 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author
 * and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [slangjis](//slangji.wordpress.com/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](//www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](//wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](//www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](//wordpress.org/plugins/about/validator/) directives.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * HUMANS (humans.txt)
 *
 * We are the Humans behind this project [humanstxt.org](//humanstxt.org/Standard.html)
 *
 * This software meet detailed humans rights belongs to your own author and to their respective other authors.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 */

	/**
	 * @package WP Header Footer Log
	 * @subpackage WordPress PlugIn
	 * @description Add and Show Info Text Log on Header Footer and Login when Plugin is Activated
	 * @author slangjis
	 * @since 2.1.0
	 * @tested 3.9.1
	 * @version 2014.0610.0410
	 * @status STABLE (trunk) release
	 * @development Code in Becoming!
	 * @install The configuration of this Plugin is Automattic!
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keybit oRBjljV2RNjAy8GpN8TkMxxbFjDR3NYVUwrdsQJr1qqZplUxWxmvLhXQp1GSzyRKu
	 * @keysum 1DF27FCEEC89A5704B72A0097B5260B1
	 * @keytag ebbc29555a519a59a31f888df25fa56f
 	 */

	if ( ! function_exists( 'add_action' ) )

		{

			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );

				exit();

		}

	add_action( 'admin_head'   , 'wp_log_info_source_text' ); // Insert on Backend Header (Admin User Roles Only)
	add_action( 'admin_footer' , 'wp_log_info_source_text' ); // Insert on Backend Footer (Admin User Roles Only)
	add_action( 'login_head'   , 'wp_log_info_source_text' ); // Insert on Login Header (All Admin and User Roles)
	add_action( 'login_footer' , 'wp_log_info_source_text' ); // Insert on Login Footer (All Admin and User Roles)
	add_action( 'wp_head'      , 'wp_log_info_source_text' ); // Insert on Frontend Header (User Roles Only)
	add_action( 'wp_footer'    , 'wp_log_info_source_text' ); // Insert on Frontend Footer (User roles Only)

	new Header_Footer_Login_Text();

	class Header_Footer_Login_Text

		{

			public function __construct()

				{

					function wp_log_info_source_text_1st()

						{

							$wp_path_to_this_file = preg_replace( '/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
							$this_plugin		  = plugin_basename( trim( $wp_path_to_this_file ) );
							$active_plugins	   = get_option( 'active_plugins' );
							$this_plugin_key	  = array_search( $this_plugin, $active_plugins );

							if ( $this_plugin_key )

								{

									array_splice( $active_plugins, $this_plugin_key, 1 );
									array_unshift( $active_plugins, $this_plugin );
									update_option( 'active_plugins', $active_plugins );

								}

						}

					add_action( 'activated_plugin' , 'wp_log_info_source_text_1st' , 1000 );

					function wp_log_info_source_text() // info text log and key tag to insert and show on header or footer or login source

						{

							echo "\n<!--Plugin WP Header Footer Login Log 2014.0610.0410 Active - Tag ".md5(md5("oRBjljV2RNjAy8GpN8TkMxxbFjDR3NYVUwrdsQJr1qqZplUxWxmvLhXQp1GSzyRKu"."1DF27FCEEC89A5704B72A0097B5260B1"))."-->\n\n";

						}

				}

		}

?>