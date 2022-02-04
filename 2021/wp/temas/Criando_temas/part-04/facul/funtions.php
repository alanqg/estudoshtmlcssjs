<?php
    function script_customer() {
        //Chamando o estilos css    
        wp_enqueue_style('customer_main_style', get_stylesheet_uri());
    }
     
    //Chamando os estilos é os scripts 
    add_action('wp_enqueue_scripts', 'script_customer(');
?>