<?php $counter = 1; ?>

<section id="container-page-education">
    <div class="container">
        <div id="filters" class="row button-group">
            <div class="col"><button class="btn btn-block btn-dark btn-filter is-checked active" data-filter="*">Todos</button></div>
            <div class="col"><button class="btn btn-block btn-dark btn-filter" data-filter=".especializacion">Especializaciones</button></div>
            <div class="col"><button class="btn btn-block btn-dark btn-filter" data-filter=".seminario">Seminarios</button></div>
            <div class="col"><button class="btn btn-block btn-dark btn-filter" data-filter=".taller">Talleres</button></div>
            <div class="col"><button class="btn btn-block btn-dark btn-filter" data-filter=".clase">Clases abiertas</button></div>
            <div class="col"><button class="btn btn-block btn-dark btn-filter" data-filter=".masterclass">Masterclass</button></div>
        </div>
        <div class="row grid" id="isotope-container">

            <?php $the_query = new WP_Query( array('post_type' => 'product', 'posts_per_page' => 100) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="col-12 col-md-6 col-xl-4 grid-milo element-item <?php the_field('tipo'); ?>" data-category="<?php the_field('tipo'); ?>">
                    <figure class="effect-milo">
                        <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                        <figcaption>
                            <h2><?php the_field('tipo'); ?> de <span><?php the_title(); ?></span></h2>
                            <p><?php the_field('resumen'); ?></p>
<!--                            <a href="/producto/--><?php //echo sanitize_title_with_dashes( get_the_title() ); ?><!--">View more</a>-->
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
                                                    <li><strong>Precio:</strong> $<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></li>
<!--                                                    <li>Precio: $--><?php //echo get_post_meta( get_the_ID(), '_sale_price', true); ?><!--</li>-->
                                                    <li><strong>Duración:</strong> <?php the_field('duracion') ?> horas</li>
                                                    <li><strong>Fecha de inicio:</strong>
                                                        <?php
                                                            if(get_field('disponible') == False) {
                                                                echo '<span class="text-danger">No disponible</span>';
                                                            } else {
                                                                $dateformatstring = "l d F, Y";
                                                                $unixtimestamp = strtotime(get_field('fecha'));
                                                                echo date_i18n($dateformatstring, $unixtimestamp);
                                                            }
                                                        ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <?php if(get_field('disponible') == True) { ?>
                                        <a href="/producto/<?php echo sanitize_title_with_dashes( get_the_title() ); ?>" class="btn btn-success">Inscribirme</a>
                                    <?php } ?>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php $counter++; ?>
            <?php endwhile; wp_reset_query(); ?>

        </div>
    </div>
</section>