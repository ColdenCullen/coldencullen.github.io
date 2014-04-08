<?php
/*
Plugin Name: Google-Code-Prettifier
Plugin URI: http://coldencullen.com
Description: Enables GCP syntax highlighing on your WordPress blog.
Version: 1.0
Author: Colden Cullen
License: GPL2
*/

/*  Copyright 2013 Colden Cullen (email : ColdenCullen@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function initGCPWordPress()
{
	// Register CSS
	wp_register_style( 'Google-Code-Prettifier', plugins_url( 'GCPWordPress/css/prettify.css' ) );
	wp_enqueue_style( 'Google-Code-Prettifier' );

	// Register JS
	wp_register_script( 'Google-Code-Prettifier', plugins_url( 'GCPWordPress/js/prettify.js' ) );
	wp_enqueue_script( 'Google-Code-Prettifier' );
}

add_action( 'init', 'initGCPWordPress' );
?>