<?php
/*
Plugin Name: √ WP Header and Footer Log
Plugin URI: http://slangji.wordpress.com/wp-header-footer-log/
Description: This plugin explain how to insert and Show Informational Text Log (sample) on Header and Footer when Plugin is Activated, available and visible with view source browser function, without add nothing to wp_option database!
Version: 2013.0218.0933
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 2.1
Tested up to: 3.8
License: GPLv2 (or later)
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU (style coding standard)
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * DEVELOPMENT Release: Version 2013 Build 0000-BUGFIX Revision 2014-DEVELOPMENTAL
 *
 * √ LICENSING
 *
 * [WP Header and Footer Log](http://wordpress.org/extend/plugins/wp-header-footer-log/) Insert and Show Informational Text Log on Header and Footer when Plugin is Activated.
 *
 * Copyright (C) 2008-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ THERMS
 *
 * This uses code derived from
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 sLa (email: <slangji[at]gmail[dot]com>)
 *
 * √ DISCLAIMER
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
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/extend/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */
/**
 * @package WP Header and Footer Log 
 * @subpackage WordPress PlugIn
 * @since 2.1.0
 * @version 2013.0218.0933
 * @status STABLE (release)
 * @author sLa
 * @license GPLv2 (or later)
 * @indentation GNU (style coding standard)
 * @keybit oRBjljV2RNjAy8GpN8TkMxxbFjDR3NYVUwrdsQJr1qqZplUxWxmvLhXQp1GSzyRKu
 * @keysum 68FC4A0197FE863C03BF2F9C560476D0
 * @keytag f398e6e416dd406673529fbd0b3e4dce
 */
	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			exit();
		} //!function_exists( 'add_action' )

	function wp_log_info_class() //Informational Text and Key Tag to Add and Show on Header and Footer
		{
			echo "\n<!--Plugin Header and Footer Log 2013.0218.0933 Active - Key Tag: ".md5(md5("oRBjljV2RNjAy8GpN8TkMxxbFjDR3NYVUwrdsQJr1qqZplUxWxmvLhXQp1GSzyRKu"."68FC4A0197FE863C03BF2F9C560476D0"))."-->\n\n";
		}

	add_action( 'admin_head', 'wp_log_info_class' );	//Insert on Backend Header (Admin)
	add_action( 'admin_footer', 'wp_log_info_class' );	//Insert on Backend Footer (Admin)
	add_action( 'login_head', 'wp_log_info_class' );	//Insert on Login Header (All Admin/User)
	add_action( 'login_footer', 'wp_log_info_class' );	//Insert on Login Footer (All Admin/User)
	add_action( 'wp_head', 'wp_log_info_class' );		//Insert on Frontend Header (User)
	add_action( 'wp_footer', 'wp_log_info_class' );		//Insert on Frontend Footer (User)
?>