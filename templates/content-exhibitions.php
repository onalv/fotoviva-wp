<?php $counter = 1; ?>

<section id="container-exhibitions">
    <div class="container-fluid">
        <div class="row">

            <?php $the_query = new WP_Query( array('post_type' => 'exhibicion', 'posts_per_page' => 100) ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="col-4 exhibition">
                    <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="page-exhibition-<?php echo $counter; ?>">
                        <?php the_post_thumbnail( array(720, 480), array( 'class' => 'img-fluid' ) ); ?>
                    </a>


                    <?php
                        /* Loop for inserting the images to the galleries only if an image was added (20 Images maximum) */
                        for ($i = 1; $i <= 20; $i++) {
                            $img = 'image' . $i;
                            if ( get_field($img) != NULL ) {
                    ?>

                        <a href="<?php the_field($img); ?>" data-lightbox="page-exhibition-<?php echo $counter; ?>"></a>

                    <?php
                            }
                        }
                    ?>

                    <h2><?php the_title(); ?></h2>
                </div>

            <?php $counter++; ?>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>