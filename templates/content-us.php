<section id="container-hero-us">
    <div class="container-fluid">
        <div class="hero owl-one owl-carousel owl-theme">
            <div class="owl-item" id="owl-1">
                <a href="#">
                    <img src="https://placeimg.com/1600/400/any" alt="Hero 1">
                </a>
            </div>
            <div class="owl-item" id="owl-2">
                <a href="#">
                    <img src="https://placeimg.com/1620/400/any" alt="Hero 1">
                </a>
            </div>
            <div class="owl-item" id="owl-3">
                <a href="#">
                    <img src="https://placeimg.com/1610/400/any" alt="Hero 1">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="container-nuestro-centro">
    <div class="container">
        <div class="row">
            <div class="col-6 div-text">
                <h1>Nuestro Centro</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta hic libero nostrum similique? Dolores, earum eos esse fuga impedit neque perspiciatis quasi? Beatae commodi dolor ducimus inventore nesciunt, quam?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta hic libero nostrum similique? Dolores, earum eos esse fuga impedit neque perspiciatis quasi? Beatae commodi dolor ducimus inventore nesciunt, quam?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta hic libero nostrum similique? Dolores, earum eos esse fuga impedit neque perspiciatis quasi? Beatae commodi dolor ducimus inventore nesciunt, quam?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta hic libero nostrum similique? Dolores, earum eos esse fuga impedit neque perspiciatis quasi? Beatae commodi dolor ducimus inventore nesciunt, quam?</p>
            </div>
            <div class="col-6 div-img">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/estudio.jpg" alt="Foto Estudio" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="container-colaboradores-nacionales">
    <div class="container">
        <h1 class="text-center">Colaboradores Nacionales</h1>
        <div class="row">
            <div class="owl-two owl-carousel owl-theme">

                <?php $the_query = new WP_Query( array('post_type' => 'col_nacionales', 'posts_per_page' => 10) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                    <div class="owl-item">
                        <figure>
                            <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                            <figcaption>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('intro'); ?></p>
                            </figcaption>
                        </figure>
                    </div>

                <?php endwhile; wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>
<section id="container-colaboradores-internacionales">
    <div class="container">
        <h1 class="text-center">Colaboradores Internacionales</h1>
        <div class="row">

            <div class="owl-three owl-carousel owl-theme">
                <?php $the_query = new WP_Query( array('post_type' => 'col_internacionales', 'posts_per_page' => 10) ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                    <div class="owl-item">
                        <figure>
                            <?php the_post_thumbnail( array(480, 360), array( 'class' => 'img-fluid' ) ); ?>
                            <figcaption>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('intro'); ?></p>
                            </figcaption>
                        </figure>
                    </div>

                <?php endwhile; wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>