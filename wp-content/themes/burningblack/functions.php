<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

/* Filter Tiny MCE Default Settings */
add_filter( 'tiny_mce_before_init', 'my_switch_tinymce_p_br' );

/**
 * Switch Default Behaviour in TinyMCE to use "<br>"
 * On Enter instead of "<p>"
 *
 * @link http://shellcreeper.com/?p=1041
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/tiny_mce_before_init
 * @link http://www.tinymce.com/wiki.php/Configuration:forced_root_block
 */
function my_switch_tinymce_p_br( $settings ) {

    $settings['forced_root_block'] = false;
    return $settings;
}

?>

