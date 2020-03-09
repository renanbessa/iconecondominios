<?php

// Carregando nossos scripts e folhas de estilos //
function load_scripts () {
    // Chama função javascript do bootstrap //
    /*wp_enqueue_script ( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 
    array ('jquery'),'4.4.1', true);
    // Chama função css do bootstrap //
    wp_enqueue_style ('bootstrap-cs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', 
    array(), '4.4.1', 'all' );*/
    wp_enqueue_style ('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Função de Configuração do Tema
function iconecondo_config() {
    // Registrando nossos menus //
    register_nav_menus (
        array (
            'my_main_menu' => 'Main Menu',
            'my_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    // Função cabeçalho customizado //
    add_theme_support( 'custom-header', $args);
    // Função adicionar miniaturas thumbnails // Existe uma função chamada add_image_size que faz praticamente tudo
    add_theme_support( 'post-thumbnails' ); 
    // Função adicionar formato de posts
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    // Função para adicionar título da página
    add_theme_support ( 'title-tag' );
}
// Ganho: Hook para a função iconecondo_config //
add_action( 'after_setup_theme', 'iconecondo_config', 0 );

// Ganho: Hook e Função para adicionar widgets no tema //
add_action('widgets_init','iconecondo_sidebars');
function iconecondo_sidebars () {
    register_sidebar(
        array (
            'name' => 'Footer Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar para serem usados no footer',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array (
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'Serviço 1 no sidebar Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    // Função para limitar caracteres resumo //
    function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
}