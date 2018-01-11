<section id="container-hero">
    <div class="container-fluid">
        <div class="hero owl-one owl-carousel owl-theme">

            <?php $the_query = new WP_Query( array('post_type' => 'sliders', 'posts_per_page' => 20) ); ?>
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

            <?php $the_query = new WP_Query( array('post_type' => 'product', 'posts_per_page' => 100) ); ?>
            <?php $counter = 1; ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <?php if(get_field('pagina_principal')) :  ?>

                    <div class="col-12 col-md-6 col-xl-4 grid-milo">
                        <figure class="effect-milo">
                            <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                            <figcaption>
                                <h2><?php the_field('tipo'); ?> de <span><?php the_title(); ?></span></h2>
                                <p><?php the_field('resumen'); ?></p>
<!--                                <a href="/producto/--><?php //echo sanitize_title_with_dashes( get_the_title() ); ?><!--">View more</a>-->
                            </figcaption>
                        </figure>
                        <button class="btn btn-light btn-course" data-toggle="modal" data-target=".modalCursos-<?php echo $counter; ?>">+Info</button>
                        <!-- Large modal -->
                        <div class="modal fade modalCursos-<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title"><?php the_field('tipo'); ?> de <span><?php the_title(); ?></span></h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                                                </div>
                                                <div class="col-6">
                                                    <ul>
                                                        <li>Precio: $<?php the_field('precio'); ?></li>
                                                        <li>Duración de curso: 6 semanas</li>
                                                        <li>Nivel: Intermedio</li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="/producto/<?php echo sanitize_title_with_dashes( get_the_title() ); ?>" class="btn btn-success">Comprar</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endif; ?>

            <?php $counter++; ?>
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

                    <?php $the_query = new WP_Query( array('post_type' => 'exhibicion', 'posts_per_page' => 12) ); ?>
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
                            <p>Contamos con 4 aulas disponibles para clases, conferencias o reuniones pedagógicas, equipadas con sillas, mesas, audio, video e internet. El costo es variable dependiendo de los requerimientos del solicitante. Solicita más información para conocer los requisitos y tramite de renta.</p>
                        </div>
                    </div>
                    <div class="owl3-item" id="owl3-2">
                        <div class="col-md-8 mr-auto ml-auto div-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services-2.jpg" alt="Servicio 2" class="img-fluid">
                            <p>Fotoviva cuenta con un estudio de fotografía equipado con cicloramas de papel y tela, antorchas, rebotadores, banderas y accesorios para su renta por hora. El costo para estudiantes es de $250 por hora, solicita más información para conocer los requisitos y tramite de renta.</p>
                        </div>
                    </div>
                    <div class="owl3-item" id="owl3-3">
                        <div class="col-md-8 mr-auto ml-auto div-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services-3.jpg" alt="Servicio 3" class="img-fluid">
                            <p>Para aquellas personas que necesitan asesorías personales sobre aspectos técnicos teóricos y prácticos de fotografía u otros talleres y especializaciones que impartimos, contamos con un sistema de aprendizaje individual o grupal que se pude solicitar según los horarios y necesidades del aspirante. Solicita más información para conocer el costo por hora y la disponibilidad de la materia y profesor.</p>
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

                <?php $the_query = new WP_Query( array('post_type' => 'noticias', 'posts_per_page' => 1) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <?php the_excerpt(); ?>
                <?php endwhile; wp_reset_query(); ?>

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
                    <p>Somos gente ordinaria haciendo cosas extraordinarias.</p>
                    <p>Creemos firmemente que el arte es el camino más hermoso hacia la libertad, por ello no debe ser considerado un lujo, un símbolo de estatus o condición cultural, el arte es para todos.</p>
                    <p>Desde que creamos <strong>FOTOVIVA</strong> hemos buscado rodearnos de los mejores maestros y artistas que además de impartir conocimientos, comparten su diaria experiencia, enriqueciendo el aprendizaje con referentes reales y palpables.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>nosotros" class="btn btn-lg btn-danger">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>