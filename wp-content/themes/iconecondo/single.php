<!-- Arquivo de visualização única de cada post -->

<?php get_header(); ?>
<div class="container">
    <?php

        while( have_posts() ): the_post();
            get_template_part( 'template-parts/content', 'single' );

            ?>
            <!-- Páginação por nome do post -->
            <div class="item-pages">
                <div class="pages">
                    <?php next_post_link( '&laquo; %link' ); ?>
                </div>
                <div class="pages">
                    <?php previous_post_link( '%link &raquo;' ); ?>
                </div>
            </div>

            <?php

            if(comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
    ?>
</div>
<?php get_footer(); ?>

