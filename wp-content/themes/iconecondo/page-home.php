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
                    <a class="btn btn-primary" href="">Saiba mais</a>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="services-general">
                    <div class="services-about">
                        <h3>Alguns dos nossos serviços</h3>
                        <h2>O que fazemos?</h2>
                        <p>Temos uma equipe qualificada e comprometida em superar as expectativas dos
                        nossos clientes. Prezando sempre pela qualidade do atendimento, procurando sempre 
                        inovar para prestar o melhor serviço com máxima eficiência.
                        </p>
                        <a class="btn btn-secondary budget" href="#">Orçamento aqui</a>
                    </div>
                    <div class="services-itens">
                        <div class="item-service">
                            <div class="icon-service">
                                ...
                            </div>
                            <h3>Administração do Condomínio</h3>
                            <p>Realizar reuniões de assembleia, fiscalizar funcionários, entre outros.
                                Além disso, tomar conta de toda a parte administrativa do empreendimento.
                            </p>
                        </div>
                        <div class="item-service">
                            <div class="icon-service">
                                ...
                            </div>
                            <h3>Administração do Condomínio</h3>
                            <p>Realizar reuniões de assembleia, fiscalizar funcionários, entre outros.
                                Além disso, tomar conta de toda a parte administrativa do empreendimento.
                            </p>
                        </div>
                        <div class="item-service">
                            <div class="icon-service">
                                ...
                            </div>
                            <h3>Administração do Condomínio</h3>
                            <p>Realizar reuniões de assembleia, fiscalizar funcionários, entre outros.
                                Além disso, tomar conta de toda a parte administrativa do empreendimento.
                            </p>
                        </div>
                    </div>
                        <?php// 
                            //if(is_active_sidebar('services-1')) {
                                //dynamic_sidebar('services-1' );
                            //}
                        //?>
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
    