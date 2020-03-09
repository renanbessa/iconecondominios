<?php get_header(); ?>    
    <main>
        <section class="banner">
        <!-- Aqui poderá colocar algum plugin de slider ou banner -->
            <div class="container">
                <div class="content-banner">
                    <h2>Somos a ícone gestão de condomínios</h2>
                    <h1>A escolha certa para as soluções do seu condomínio</h1>
                    <p>Conheça nossos serviços para as mais diversas áreas, especialmente
                    em portaria, limpeza e administração de condomínios.</p>
                    <a class="btn" href="">Saiba mais</a>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h1>Alguns de nossos serviços</h1>
                <div class="services-general">
                    <div class="services-item">
                        <?php 
                            if(is_active_sidebar('services-1')) {
                                dynamic_sidebar('services-1' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <p>About</p>
            </div>
        </section>

        <section class="cases">
            <div class="container">
                <p>Cases</p>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <p>Contato</p>
            </div>
        </section>

        <section class="deppoiments">
            <div class="container">
                <p>Depoimentos</p>
            </div>
        </section>

        <section class="blog">
            <div class="container">
                <div class="posts">
                   <?php 
                   //Adicionar o loop dos 3 ultimos posts //
                        $args = array (
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );
                        // the query
                        $the_query = new WP_Query( $args );  

                        if ( $the_query->have_posts() ) : 
                            // the loop //
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <!--Chamar arquivo content lastposts-->
                    <?php get_template_part('template-parts/content', 'lastposts'); ?> 
                    <?php
                            endwhile; 
                        // end of the loop //

                        // pagination here //
                            wp_reset_postdata();
                        endif; 
                    ?>
                </div>
            </div>
        </section>

        <section class="newsletter">
            <div class="container">
                <p>Newsletter</p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
    