<?php $counter = 1; ?>

<section id="container-page-education">
    <div class="container">
        <div id="filters" class="row button-group">
            <div class="col"><button class="btn btn-block btn-dark is-checked active" data-filter="*">Todos</button></div>
            <div class="col"><button class="btn btn-block btn-dark" data-filter=".especializacion">Especializaciones</button></div>
            <div class="col"><button class="btn btn-block btn-dark" data-filter=".seminario">Seminarios</button></div>
            <div class="col"><button class="btn btn-block btn-dark" data-filter=".taller">Talleres</button></div>
            <div class="col"><button class="btn btn-block btn-dark" data-filter=".clase">Clases abiertas</button></div>
            <div class="col"><button class="btn btn-block btn-dark" data-filter=".masterclass">Masterclass</button></div>
        </div>
        <div class="row grid" id="isotope-container">

            <?php $the_query = new WP_Query( array('post_type' => 'cursos', 'posts_per_page' => 100) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="col-4 element-item <?php the_field('tipo'); ?>" data-category="<?php the_field('tipo'); ?>">
                    <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                    <h2><?php the_field('tipo'); ?> de <span><?php the_title(); ?></span></h2>

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
                                    <button type="button" class="btn btn-success">Comprar</button>
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