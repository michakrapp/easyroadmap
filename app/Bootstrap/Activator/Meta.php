<?php
namespace EasyRoadmap\Bootstrap\Activator;

defined( 'ABSPATH' ) || exit;

class Meta {

    public function register() {

        // Upvotes
        $meta_upvote_args = array(
            'show_in_rest' => true,
            'single'       => true,
            'type'         => 'string',
            'sanitize_callback' => 'wp_strip_all_tags',
            'default'      => '0',
        );
        register_meta( 'post', 'upvote', $meta_upvote_args );

        // Downvotes
        $meta_downvote_args = array(
            'show_in_rest' => true,
            'single'       => true,
            'type'         => 'string',
            'sanitize_callback' => 'wp_strip_all_tags',
            'default'      => '0',
        );
        register_meta( 'post', 'downvote', $meta_downvote_args );
    }
}
