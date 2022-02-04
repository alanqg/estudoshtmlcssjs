
<?php
//Chamando o cabeçalho
    get_header();
    while (have_posts()) {
        the_post(); ?>
        <h1>Códido para página não para psot</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    

<?php }
//Chamando o footer
get_footer();

?>
