<?php get_header(); ?>
<?php
    //Busca consulta
    while(have_posts()){
        the_post();
?>
    
    <!--Comando para chamar os titlos WP-->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!--Comando para chamar o contúdo-->
    <?php the_content(); ?>
    <hr><!--Divisão dos posts-->

    <?php }

?>

<?php get_footer(); ?>
