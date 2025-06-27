<?php
// Enqueue Tailwind CSS and Font Awesome
function pushpa_store_enqueue_styles() {
  wp_enqueue_style('tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.3.5');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
}
add_action('wp_enqueue_scripts', 'pushpa_store_enqueue_styles');

// Register custom menus
function pushpa_store_register_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'pushpa-store'),
  ));
}
add_action('init', 'pushpa_store_register_menus');
?>