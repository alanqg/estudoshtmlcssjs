<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Tema</title>
</head>
<body>
<?php
    //Busca consulta
    while(have_posts()){
        the_post();
?>
    
    <!--Comando para chamar os titlos WP-->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!--Comando para chamar o contúdo-->
    <?php the_excerpt(); ?>
    <hr><!--Divisão dos posts-->

    <?php }

?>
</body>
</html>