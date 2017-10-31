<section id="container-hero">
    <div class="container-fluid">
        <div class="hero owl-one owl-carousel owl-theme">

            <?php $the_query = new WP_Query( array('post_type' => 'sliders', 'posts_per_page' => 6) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="owl-item">
                    <a href="<?php echo esc_url(home_url('/')) ?>educacion">
                        <?php the_post_thumbnail( array(1600, 400), array( 'class' => 'img-fluid' ) ); ?>
                    </a>
                </div>

            <?php endwhile; wp_reset_query(); ?>

        </div>
    </div>
</section>

<section id="container-courses">
    <div class="container">
        <div class="row">

            <?php $the_query = new WP_Query( array('post_type' => 'cursos', 'posts_per_page' => 100) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <?php if(get_field('pagina_principal')) :  ?>

                    <div class="col-12 col-md-6 col-xl-4 grid-milo">
                        <figure class="effect-milo">
                            <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                            <figcaption>
                                <h2><?php the_field('tipo'); ?> de <span><?php the_title(); ?></span></h2>
                                <p><?php the_field('resumen'); ?></p>
                                <a href="<?php echo esc_url(home_url('/')) ?>educacion">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <?php endif; ?>

            <?php endwhile; wp_reset_query(); ?>

        </div>
        <div class="text-center">
            <a href="<?php echo esc_url(home_url('/')) ?>educacion" class="btn btn-lg" id="btn-courses">Ver cursos</a>
        </div>
    </div>
</section>

<section id="carousels">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 div-carousel text-center" id="div-exhibitions">
                <h1>Exhibiciones</h1>
                <div class="owl-two owl-carousel owl-theme">

                    <?php $the_query = new WP_Query( array('post_type' => 'exhibicion', 'posts_per_page' => 6) ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <div class="owl2-item">
                            <figure>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>exhibiciones">
                                        <?php the_post_thumbnail( array(720, 480), array( 'class' => 'img-fluid' ) ); ?>
                                    </a>
                                    <figcaption>
                                        <h4><?php the_title(); ?></h4>
                                    </figcaption>
                            </figure>
                        </div>

                    <?php endwhile; wp_reset_query(); ?>

                </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>exhibiciones" class="btn btn-lg" id="btn-exhibitions">Ver Exhibiciones</a>
            </div>
            <div class="col-12 col-lg-6 div-carousel text-center" id="div-services">
                <h1>Servicios</h1>
                <div class="owl-three owl-carousel owl-theme">
                    <div class="owl3-item" id="owl3-1">
                        <div class="col-md-8 mr-auto ml-auto div-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services-1.jpg" alt="Servicio 1" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur facilis inventore obcaecati odio officia quam quod sapiente? Cumque harum ipsa nam quidem. Adipisci aut ducimus eius esse laboriosam reprehenderit sunt.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur facilis inventore obcaecati odio officia quam quod sapiente? Cumque harum ipsa nam quidem. Adipisci aut ducimus eius esse laboriosam reprehenderit sunt.</p>
                        </div>
                    </div>
                    <div class="owl3-item" id="owl3-2">
                        <div class="col-md-8 mr-auto ml-auto div-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services-2.jpg" alt="Servicio 2" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur corporis cupiditate doloremque dolorum, ea eligendi harum illum incidunt iste laborum magnam molestias necessitatibus neque perspiciatis, recusandae suscipit temporibus voluptatibus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur corporis cupiditate doloremque dolorum, ea eligendi harum illum incidunt iste laborum magnam molestias necessitatibus neque perspiciatis, recusandae suscipit temporibus voluptatibus.</p>
                        </div>
                    </div>
                    <div class="owl3-item" id="owl3-3">
                        <div class="col-md-8 mr-auto ml-auto div-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services-3.jpg" alt="Servicio 3" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus quasi rerum similique unde. Dolorum, est eum ex inventore minus molestias nobis nulla provident quas quo reprehenderit veritatis vero voluptas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus quasi rerum similique unde. Dolorum, est eum ex inventore minus molestias nobis nulla provident quas quo reprehenderit veritatis vero voluptas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus quasi rerum similique unde. Dolorum, est eum ex inventore minus molestias nobis nulla provident quas quo reprehenderit veritatis vero voluptas.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="container-new" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 mr-auto ml-auto">
                <h1>Lo +Nuevo</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cupiditate mollitia neque sit suscipit temporibus unde.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>lo-nuevo" class="btn btn-lg btn-light">Más información</a>
            </div>
        </div>
    </div>
</section>


<section id="container-us">
    <div class="container">
        <div class="row" id="row-us">
            <div class="col-xs-12 col-md-8 ml-md-auto mr-md-auto col-lg-7 ml-lg-auto mr-lg-0">
                <div id="div-us-text">
                    <h1>¿Quiénes somos?</h1>
                    <p>Creemos firmemente que el <strong>arte</strong> es el camino más hermoso hacia la libertad, por ello no debe ser considerado un lujo, un símbolo de estatus o condición cultural, el <strong>arte</strong> es para todos.</p>
                    <p>Desde que creamos <strong>FOTOVIVA</strong> hemos buscado rodearnos de los mejores maestros y <strong>artistas</strong> que además de impartir conocimientos, comparten su diaria experiencia en este camino.</p>
                    <p>Nuestros programas de estudio están planeados cuidadosamente para mezclar teoría, práctica y experiencia, de una forma dinámica y relajada, para que con ello el alumno avance progresivamente de manera libre y personal. Además de estar avalados ante la Secretaría de Eduación a nivel Nacional.</p>
                    <p>Las instalaciones y el equipo de <strong>FOTOVIVA</strong> son un esfuerzo por otorgar una experiencia de calidad y comodidad a quienes aprenden en nuestros espacios.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>nosotros" class="btn btn-lg btn-danger">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>