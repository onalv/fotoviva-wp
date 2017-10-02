<footer id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.png" width="120px" alt="Logo Fotoviva blanco" id="logo-white"></a>
                <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit. A ad asper natur culpa dignis simos harum inven tore ipsam</p>
                <ul>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-1.png" alt="Instagram Fotoviva"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-2.png" alt="Facebook Fotoviva"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-3.png" alt="Youtube Fotoviva"></a></li>
                </ul>
                <ul>
                    <li>Email: correo@fotoviva.com</li>
                    <li>Tel: 456 798 32 56</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <div id="div-form">
                    <?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]' ); ?>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div id="div-map">
                    <div class="map">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/map.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<footer id="contacto">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#">
                    <img src="img/logo-white.png" width="160px" alt="Logo Fotoviva">
                </a>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Educación</a></li>
                    <li><a href="#">Lo +nuevo</a></li>
                    <li><a href="#">Exhibiciones</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="col" id="footer-social-networks">
                <ul>
                    <li><a href="#"><img src="img/social-1.png" alt="Instagram Fotoviva"></a></li>
                    <li><a href="#"><img src="img/social-2.png" alt="Facebook Fotoviva"></a></li>
                    <li><a href="#"><img src="img/social-3.png" alt="Youtube Fotoviva"></a></li>
                </ul>
                <p>correo@fotoviva.com</p>
                <p>Tel: 456 798 32 56</p>
            </div>
        </div>
    </div>
</footer>-->