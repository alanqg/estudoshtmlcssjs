<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <!--Buscando o titulo do site, nome que foi dado ao fazer a instalação ou quando é editado no personalizar do tema-->
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' );  ?></a></h1>
        <!--Segunda titulo para motrar a descrição do tema, descrição essa que será editada no personalizar do tema-->
        <h4><?php bloginfo( 'description' ); ?></h4>
    </header>