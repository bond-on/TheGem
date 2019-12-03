<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'thegem_styles' );

echo get_template_directory_uri(). '/css/header.css';
echo file_exists(get_template_directory_uri(). '/css/header.css');

function thegem_styles() {
	
	wp_enqueue_style( 'thegem-style', get_stylesheet_uri() );
	wp_enqueue_style( 'thegem-style-main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'thegem-style-header', get_template_directory_uri() . '/css/header.css' );
	wp_enqueue_style( 'thegem-core_features', get_template_directory_uri() . '/css/core_features.css' );
	wp_enqueue_style( 'thegem-extra_features', get_template_directory_uri() . '/css/extra_features.css' );
    wp_enqueue_style( 'thegem-proud', get_template_directory_uri() . '/css/proud.css' );
	wp_enqueue_style( 'thegem-new_messaging', get_template_directory_uri() . '/css/new_messaging.css' );
	wp_enqueue_style( 'thegem-user', get_template_directory_uri() . '/css/user.css' );
	wp_enqueue_style( 'thegem-new_world', get_template_directory_uri() . '/css/new_world.css' );	
	wp_enqueue_style( 'thegem-get_social', get_template_directory_uri() . '/css/get_social.css' );	
	wp_enqueue_style( 'thegem-jenifer', get_template_directory_uri() . '/css/jenifer.css' );
	wp_enqueue_style( 'thegem-choose', get_template_directory_uri() . '/css/choose.css' );
	wp_enqueue_style( 'thegem-download', get_template_directory_uri() . '/css/download.css' );	
	wp_enqueue_style( 'thegem-frequently', get_template_directory_uri() . '/css/frequently.css' );
	wp_enqueue_style( 'thegem-footer', get_template_directory_uri() . '/css/footer.css' );	
	wp_enqueue_style( 'thegem-obnulator2',get_template_directory_uri() . '/css/footer.css' );
	wp_enqueue_style( 'stylesheet-sourcesanspro', get_template_directory_uri() . '/fonts/Montserrat/sourcesanspro.css');

}
// add_theme_support( 'custom-logo');
// the_custom_logo( $blog_id )
?>
