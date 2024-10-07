<?php
defined('ABSPATH') || exit;

function starter_theme_scripts() {
    $modificated_starter_theme_version_css = (file_exists(get_template_directory() . '/assets/css/main.css')) ? date('YmdHi', filemtime(get_template_directory() . '/assets/css/main.css')) : 1;

    wp_enqueue_style('main', get_template_directory_uri() . '/build/style-index.css', array(), $modificated_starter_theme_version_css);

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false);

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);

    function enqueue_custom_scripts_in_footer() {
        $modificated_starter_theme_version_js = date('YmdHi', filemtime(get_template_directory() . '/build/index.js'));

        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/build/index.js', null, $modificated_starter_theme_version_js, true);

        wp_localize_script('custom-scripts', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('wp_rest')
        ));
    }

    add_action('wp_footer', 'enqueue_custom_scripts_in_footer');
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');

function defer_parsing_of_js($url) {
    if (is_admin()) return $url;
    if (false === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.min.js')) return $url;
    return str_replace(' src', ' defer="defer" src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);
