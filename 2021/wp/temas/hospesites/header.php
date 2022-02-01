<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospeSites</title>
    <?php wp_head(); ?>
</head>

<header>
    <div class="logo">
        <h1>HospeSites <span>Desenvolvimento</span></h1>
    </div>

    <nav>
        <ul>
            <li>
            <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal') ); ?>
            </li>
        </ul>
    </nav>
</header>