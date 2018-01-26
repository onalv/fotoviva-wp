<div id="video">
    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay loop>
        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
        <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
    </video>
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
                <a href="#" class="btn btn-primary mt-5">Descargar</a>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>