<?php

/* 
Template Name: General Template
*/

?>

<?php get_header(); ?>  
  
<!-- Imagem de cabeçalho no customizer support theme -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
     width="<?php echo get_custom_header()->width; ?>" alt="" />

    <main>
        <section class="Banner">
            <div class="container">
                <div class="general-template">
                    <?php 
                    //Se houver algum post
                    if( have_posts() ):
                        //Enquanto houver posts, mostre-os pra gente
                        while( have_posts() ): the_post();    
                    ?>
                    
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>

                    <?php
                        endwhile;
                    else:    
                    ?>

                    <p> Não existe nenhum post a ser mostrado...</p>

                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
    