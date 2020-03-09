<article <?php post_class(array('class' => 'lastposts') ); ?>>
    <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array(350, 270));?>
    </a>
    <p>Publicado em <?php echo get_the_date(); ?>
    <?php the_excerpt(); ?>
</article>