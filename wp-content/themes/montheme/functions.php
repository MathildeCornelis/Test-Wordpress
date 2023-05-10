<?php

function montheme_register_assets()
{
    wp_register_style('tailwind', 'https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css');
    wp_enqueue_style('tailwind');
};

add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('wp_head', function () {
    echo "test add_action header";
});

add_theme_support('title-tag');
