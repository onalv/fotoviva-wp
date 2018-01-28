<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 p-2">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
