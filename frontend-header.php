<?php

if ( defined('ABSPATH') )
	require_once(ABSPATH . 'load.php');
else
	require_once('load.php');
/**
 * Admin Sidebar
 *
 */
function get_sidebar(){
    include_once 'sidebar.php';
}
/**
 * Top Menu bar
 * 
 */
function get_topmenu(){
    include_once 'menu.php';
}
?>
