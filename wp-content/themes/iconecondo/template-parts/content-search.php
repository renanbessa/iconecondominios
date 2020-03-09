<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    </a>
    <p>Publicado em <?php echo get_the_date(); ?>
    by<?php the_author_posts_link(); ?></p>

    <?php if( has_category() ): ?>
        <p>Categoria: <?php the_category(' '); ?></p>
    <?php endif; ?>
    <?php the_excerpt(); ?>
</article>