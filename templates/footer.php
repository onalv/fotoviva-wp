<footer id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <a href="<?php echo esc_url(home_url()); ?>" class="d-none d-lg-block"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.png" width="140px" alt="Logo Fotoviva blanco" id="logo-white"></a>
                <ul>
                    <li><a href="https://www.instagram.com/fotoviva_oficial/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-1.png" alt="Instagram Fotoviva"></a></li>
                    <li><a href="https://www.facebook.com/fotovivamx/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-2.png" alt="Facebook Fotoviva"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/social-3.png" alt="Youtube Fotoviva"></a></li>
                </ul>
                <ul>
                    <li><strong>Email:</strong> correo@fotoviva.com</li>
                    <li><strong>Tel:</strong> 456 798 32 56</li>
                </ul>
            </div>
            <div class="col-12 col-lg-4">
                <div id="div-form">
                    <h3>Contáctanos</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]' ); ?>
                </div>
            </div>
            <div class="col-12 col-lg-4 ml-auto">
                <div id="div-map">
                    <div class="map">
                        <iframe
                                width="100%"
                                height="280"
                                frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDhtPB4jhPZAcvPOXhwJjDTA0tV3cCTQgM&q=Fotoviva,Morelia+Michoacán" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>