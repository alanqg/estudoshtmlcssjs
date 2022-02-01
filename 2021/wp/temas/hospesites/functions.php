<?php
function carrega_scripts(){

    //bootstrap
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
//Css
wp_enqueue_style( 'customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');

//js
wp_enqueue_script( 'customer', get_template_directory_uri(). '/js/customer.js', array(), null, true);

}
//Chamano os scrips & estilos 
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

//Menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
	)
);