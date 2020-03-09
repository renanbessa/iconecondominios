<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Publicado em <?php echo get_the_date(); ?>
    by<?php the_author_posts_link(); ?></p>
    <p>Categoria: <?php the_category(' '); ?></p>

    <div class="content">
        <?php the_content(); ?>
    </div>
</article>