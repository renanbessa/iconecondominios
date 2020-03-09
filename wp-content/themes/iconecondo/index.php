                            <!-- Arquivo padrão que possui a listagem de posts (Página Blog), mas aqui é o fallback -->

<?php get_header(); ?>  

<!-- Imagem de cabeçalho no customizer support theme -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
     width="<?php echo get_custom_header()->width; ?>" alt="" /> 

    <main>
		<section class="bannerarticles">
			<div class="container">
				<div class="content-bannerarticles">
					<h2>Artigos memoráveis</h2>
					<h1>Tudo o que você precisa para alcançar o próximo nível</h1>	
				</div>
			</div>
		</section>
		
        <section class="posts">
			<div class="container">
				<div class="widget_body">
                    <?php 
                    //Se houver algum post
                    if( have_posts() ):
                        //Enquanto houver posts, mostre-os pra gente
                        while( have_posts() ): the_post();    
                    ?>
                    <!-- Chamando função para o formato de posts do conteúdo -->
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

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
    