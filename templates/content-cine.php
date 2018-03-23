<div id="video">
    <video id="bgvid" playsinline controls autoplay>
        <source src="<?php echo get_template_directory_uri(); ?>/video/video_fotocine.webm" type='video/webm; codecs="vp8, vorbis"' />
        <source src="<?php echo get_template_directory_uri(); ?>/video/video_fotocine.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
        <source src="<?php echo get_template_directory_uri(); ?>/video/video_fotocine.ogv" type='video/ogg; codecs="theora, vorbis"' />
        Video tag not supported.
    <video>
</div>

<?php while(have_posts()) : the_post(); ?>
<section id="cine">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Diplomado en Artes y Ciencias Cinematográficas</h1>
                <?php the_content(); ?>
            </div>
        </div>
        <h3>Áreas a cursar</h3>
        <div class="row">
            <div class="col-12 col-md-7">
                <h4>Módulo 1</h4>
                <ul>
                    <li>Lenguaje y apreciación cinematográfica (LAC)</li>
                    <li>Guion 1</li>
                    <li>Cinefotografía 1</li>
                    <li>Producción (PREPRODUCCIÓN)</li>
                    <li>Actuación</li>
                </ul>
                <h4>Módulo 2</h4>
                <ul>
                    <li>Sonido Directo</li>
                    <li>Guion 2</li>
                    <li>Dirección 1</li>
                    <li>Cinefotografía 2</li>
                    <li>Producción 1 (PRODUCCIÓN)</li>
                    <li>Montaje</li>
                </ul>
                <h4>Módulo 3</h4>
                <ul>
                    <li>Documental</li>
                    <li>Producción 2 (POSTPRODUCCIÓN)</li>
                    <li>Dirección 2</li>
                    <li>Corrección de color</li>
                    <li>Diseño sonoro</li>
                </ul>
            </div>
            <div class="col-12 col-md-5">
                <p>
                    <span><strong>INSCRIPCIÓN:</strong> $<?php the_field('costo'); ?></span><br>
                    <span><strong>COSTO POR MÓDULO:</strong> $<?php the_field('costo_por_modulo'); ?></span><br>
                    <span><strong>DESCUENTO MASTER</strong></span><br>
                    <span><strong>CLASES OPCIONALES:</strong> 60%</span><br>
                </p>
                <p class="mt-5">
                    <strong>REQUISITOS DE INSCRIPCIÓN:</strong>
                </p>
                <ul>
                    <li>Acta de Nacimiento</li>
                    <li>Identificación Oficial</li>
                    <li>En caso de menores de edad:</li>
                    <li>firma de padre o tutor</li>
                    <li>Comprobante de Domicilio</li>
                    <li>CURP</li>
                    <li>Último grado de estudios</li>
                    <li>Aplicar favorablemente Test de selección</li>
                </ul>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSenUM4gv2i3i4KqibHfgxcOSAGJPSLwbZ4GecuyrBSPjEOtTw/viewform" target="_blank" class="btn btn-primary mt-5">Aplicar</a>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>