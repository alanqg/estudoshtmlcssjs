<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
</head>
<body>


    <?php if( have_posts() ) :?>
        <?php while(have_posts() ) : the_post(); ?>
        <!--Criando um link e um titulo para cada post-->
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <!--Chamando o conteúdo de todos os posts-->
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else :?>
            <p>Existem Posts</p>
        <?php endif;?>
