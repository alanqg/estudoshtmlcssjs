<?php 
    /*
        *Header file.
        *
        @package Criando Temas
    */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class('Olá Class?'); ?>><!--Adiciona várias class para todas as páginas-->

<?php wp_body_open(); ?> <!--Inserir novos scripts, depois que tab boby_calss abrir -->
<header>
    <h2>Cabeçalho</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam delectus consectetur reiciendis nihil praesentium ullam nemo esse cum iusto, molestiae quas odit reprehenderit optio vel quia? Rerum laborum ipsum nulla!
    </p>
</header>