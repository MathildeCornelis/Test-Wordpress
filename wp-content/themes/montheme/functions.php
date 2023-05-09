<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_action('wp_test', function () {
        echo "test add_action test";
    });
};

function montheme_register_assets()
{
    wp_register_style('tailwind', 'https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css');
    wp_enqueue_style('tailwind');
};

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
