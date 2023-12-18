<?php

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
add_action( 'wp_enqueue_scripts', 'theme_style' );
add_action( 'widgets_init', 'register_my_widgets' );



function theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

function theme_scripts() {
    wp_enqueue_script('');
}

function register_my_widgets(){
	register_sidebar( array(
		'name' => 'Минимально стилизованный виджет',
		'id' => 'homepage-sidebar',
		'description' => 'Выводиться как боковая панель только на главной странице сайта.',
		'before_widget' => '<li class="homepage-widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
}
