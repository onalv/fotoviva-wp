<section id="new">
    <div class="card-columns">

        <?php $the_query = new WP_Query( array('post_type' => 'noticias') ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="card">
                <?php the_post_thumbnail( array(480, 360), array( 'class' => 'card-img-top' ) ); ?>
                <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text entry-date"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; wp_reset_query(); ?>

    </div>
</section>