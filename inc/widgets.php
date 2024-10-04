<?php

defined('ABSPATH') || exit;

if (!function_exists('starter_theme_widgets_init')) :

    function starter_theme_widgets_init() {
        register_sidebar(array(
            'name'          => esc_html__('Footer', 'starter_theme'),
            'id'            => 'footer-bottom',
            'description'   => esc_html__('Add widgets here.', 'starter_theme'),
            'before_widget' => '<div class="widget footer_widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        ));
    }

    add_action('widgets_init', 'starter_theme_widgets_init');

endif;