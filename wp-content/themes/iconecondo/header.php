<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- A tag title agora está na página functions.php incluindo no theme_support por recomendação do Wordpress desde a versão 4.1 -->
    <!--<title></title>-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="main-header">
                <div class="logo">
                    Sua Logo Aqui
                </div>
                <div class="menu">
                    <nav>
                        <?php
                            wp_nav_menu (
                                array (
                                    'theme_location' => 'my_main_menu'
                                )
                            );
                        ?>
                        <!-- Campo de pesquisa <li><?php/* get_search_form(); */?></li>-->
                    </nav>
                </div>
            </div>    
        </div>
    </header>