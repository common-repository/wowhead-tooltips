<?php
/*
Copyright (C) 2012  Alexander Troshin

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
Plugin Name: WoWHead Tooltips
Plugin URI: Wordpress plugin directory.
Description: This plugin adds tooltips from World of Warcraft database site WoWHead with fancy tooltips.
Author: Alexander Troshin
Author URI: http://novium.pw
Version: 2.0.1
*/

/*  */

function novium_wowheadtooltips_header_code_function() {

	echo '<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
	<script>var wowhead_tooltips = { "iconizelinks": true, "renamelinks": true }</script>
	';

}

function novium_wowheadtooltips_shortcode( $atts, $content = null ) {
	return '<a href="http://www.wowhead.com/item=' . $atts['id'] . '">item</a>';
}

add_shortcode( 'wowhead', 'novium_wowheadtooltips_shortcode' );
add_action('wp_head','novium_wowheadtooltips_header_code_function');
?>
