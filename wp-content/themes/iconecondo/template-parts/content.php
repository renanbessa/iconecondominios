<!--<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array(275, 275));?>
    </a>
    <p>Publicado em <?php echo get_the_date(); ?>
    by<?php the_author_posts_link(); ?></p>
    <p>Categoria: <?php the_category(' '); ?></p>
    <p><?php the_tags( 'Tags: ', ', '); ?></p>
    <?php the_content(); ?>
</article>-->

<article <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>">
	<div class="wrapper" style="background-color: #3197d6;">
		...
	</div>
	<h3>Artigos</h3>
	<h1><?php the_title(); ?></h1>
</a>
</article> 