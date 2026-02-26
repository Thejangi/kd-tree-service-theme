<?php

/**
 * KD Tree Service Theme functions.
 *
 * @package kd-tree-service
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue front-end assets.
 */
function kdts_theme_enqueue_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'kdts-theme',
        get_theme_file_uri('assets/css/theme.css'),
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'kdts-theme',
        get_theme_file_uri('assets/js/theme.js'),
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'kdts_theme_enqueue_assets');

/**
 * Register block patterns from /patterns/*.php
 */
function kdts_register_patterns(): void
{
    $patterns = array(
        'hero',
        'services-grid',
        'cta-strip',
        'trust-badges',
        'locations-preview',
    );

    foreach ($patterns as $pattern) {
        $file = get_theme_file_path('patterns/' . $pattern . '.php');
        if (file_exists($file)) {
            require $file;
        }
    }
}
add_action('init', 'kdts_register_patterns');
