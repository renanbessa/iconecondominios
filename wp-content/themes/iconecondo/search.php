<!-- Arquivo para pesquisa -->

<?php get_header(); ?>
<div class="container">
    <h2>Resultados para:</h2><?php echo get_search_query(); ?>
    <?php

    get_search_form();

        while( have_posts() ): the_post();
            get_template_part( 'template-parts/content', 'search' );

            if(comments_open() || get_comments_number() ) :
                comments_template();
            endif;
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
</div>
<?php get_footer(); ?>