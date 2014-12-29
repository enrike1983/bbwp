<?php
/**
 * @package bb-loader
 * @version 1.0
 */
/*
Plugin Name: Bb loader
Description: Plugin that loads custom stuffs for Burning Black theme
Author: Eric Antonello
Author URI: http://ericantonello.com
*/

function bb_custom_post_types() {
    register_post_type( 'bb_news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' )
            ),
            'public' => true,
            'has_archive' => true,
        ));
}

add_action( 'init', 'bb_custom_post_types' );