<?php

function montheme_register_assets()
{
    wp_register_style('tailwind', 'https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css');
    wp_enqueue_style('tailwind');
};

function montheme_title()
{
    return 'Salut!';
};

function montheme_title_separator()
{
    return '|';
};

function montheme_document_title_parts($title)
{
    $title['tagline'] = 'Salut!';
    return $title;
}

add_filter('wp_title', 'montheme_title');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');

add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('wp_head', function () {
    echo "test add_action header";
});

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
