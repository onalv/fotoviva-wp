<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">

        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-black.png" alt="Logo Fotoviva" class="img-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav" id="navbar-fixed-top">
            <li class="nav-item">
                <a class="nav-link" href="tel:4564567789">Tel: (456) 4567-789 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mailto:contacto@fotoviva.mx">contacto@fotoviva.mx</a>
            </li>
            <li style="background-color: transparent;">
                <a href="https://www.instagram.com/fotoviva_oficial/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-1-gray.png" alt="Instagram Fotoviva"></a></li>
            <li style="background-color: transparent;">
                <a href="https://www.facebook.com/fotovivamx/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-2-gray.png" alt="Facebook Fotoviva"></a></li>

        </ul>

        <?php
        wp_nav_menu( array(
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'navbar-nav ml-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>

    </div> <!--container-->
</nav>