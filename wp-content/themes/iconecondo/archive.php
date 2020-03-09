                            <!-- Arquivo do archive (ao clicar em data, autor, categoria) -->

                            <?php get_header(); ?>  

<!-- Imagem de cabeçalho no customizer support theme -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
     width="<?php echo get_custom_header()->width; ?>" alt="" /> 

    <main>
        <section class="blog">
            <div class="container">
                <div class="posts">
                    <?php 
                    // Título e descrição da pesquisa archive 
                    the_archive_title( '<h1 class="archive-title">', '</h1>');
                    the_archive_description();
                    
                    //Se houver algum post
                    if( have_posts() ):
                        //Enquanto houver posts, mostre-os pra gente
                        while( have_posts() ): the_post();    
                    ?>
                    <!-- Chamando função para o formato de posts do conteúdo -->
                    <?php get_template_part( 'template-parts/content', 'archive' ); ?>

                    <?php
                        endwhile;
                        // Paginação de posts
                            the_posts_pagination(
                                array (
                                    'prev_text' => 'Anterior',
                                    'next_text' => 'Próximo',
                                    'screen_reader_text' => ' '
                                )
                            );
                        ?>
                        <?php
                    else:    
                    ?>

                    <p> Não existe nenhum post a ser mostrado, hahaha...</p>

                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
    