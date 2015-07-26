<?php
/*
Plugin Name: Blood Moon Night theme for WordPress
Description: This plugin add new color theme for admin section
Version: 1.0
Author: Alex Space
Author URI: spwanderer@mail.ru
*/


/*
Copyright 2015 Alex Space

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class SPL_Color_Schemes {

	/**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering colors-fresh dependency.
	 */
	private $colors = array(
		'blacky_wood'
	);

	function __construct() {
		add_action( 'admin_init' , array( $this, 'add_colors' ) );
	}

	/**
	 * Register color schemes.
	 */
	function add_colors() {
		
		wp_admin_css_color(
			'blacky_wood', __( 'Blood Moon Night', 'admin_schemes' ),
			plugins_url( "blood-moon-night/blacky-wood.css", __FILE__ ),
			array( '#000', '#9C684F', '#BEBEBE', '#3C3C3C' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);

	}

}

global $spl_colors;
$spl_colors = new SPL_Color_Schemes;