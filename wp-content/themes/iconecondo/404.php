                            <!-- Arquivo de erro 404 quando o usuário não encontrar a página -->

                            <?php get_header(); ?>  

<!-- Imagem de cabeçalho no customizer support theme -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
     width="<?php echo get_custom_header()->width; ?>" alt="" /> 

    <main>
        <section class="middle-area">
            <div class="container">
                <div class="error-404">
                    <h1>Página não encontrada</h1>
                    <p>Infelizmente, a página que você tentou acessar não existe nesse site</p>
                </div>
                <div class="error">
                    <p>Que tal fazer uma pesquisa?</p>
                    <?php get_search_form(); ?>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array( 
                        'title' => 'Posts recentes',
                        'number' => 3
                        ) 
                    ); 
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
    