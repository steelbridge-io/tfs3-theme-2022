<?php

function tfs_gutenberg_setup() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'tfs_gutenberg_setup' );

function tfs_theme_setup_gutenberg_support() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'themeLangDomain' ),
'slug' => 'strong-magenta',
'color' => '#a156b4',
),
array(
    'name' => __( 'light grayish magenta', 'themeLangDomain' ),
'slug' => 'light-grayish-magenta',
'color' => '#d0a5db',
),
array(
    'name' => __( 'very light gray', 'themeLangDomain' ),
'slug' => 'very-light-gray',
'color' => '#eee',
),
array(
    'name' => __( 'very dark gray', 'themeLangDomain' ),
'slug' => 'very-dark-gray',
'color' => '#444',
),
) );
}

add_action( 'after_setup_theme', 'tfs_theme_setup_gutenberg_support' );


