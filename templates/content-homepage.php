<?php //the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<section id="container-hero">
    <div class="container-fluid">
        <div class="hero owl-carousel">
            <div class="owl-item" id="owl-1">
                <a href="#">
                    <img src="img/bg-hero-1.jpg" alt="Hero 1">
                </a>
            </div>
            <div class="owl-item" id="owl-2">
                <a href="#">
                    <img src="img/bg-hero-2.jpg" alt="Hero 1">
                </a>
            </div>
            <div class="owl-item" id="owl-3">
                <a href="#">
                    <img src="img/bg-hero-3.jpg" alt="Hero 1">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="courses">
    <div class="container">
        <!--<h1 class="text-center">Nuestros <span>Cursos</span></h1>-->
        <div id="courses-wrapper">
            <!--<div class="row">
                <div class="col">
                    <div class="course-box">
                        <img src="img/course-1.jpg" alt="Course 1">
                    </div>
                </div>
                <div class="col">
                    <div class="course-box">
                        <img src="img/course-2.jpg" alt="Course 1">
                    </div>
                </div>
                <div class="col">
                    <div class="course-box">
                        <img src="img/course-1.jpg" alt="Course 1">
                    </div>
                </div>
            </div>-->

            <div class="row">
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-1.jpg" alt=""/>
                        <figcaption>
                            <h2>Fotografía contemporanea</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-2.jpg" alt="img12"/>
                        <figcaption>
                            <h2>Fotografía básica</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-3.jpg" alt="img19"/>
                        <figcaption>
                            <h2>Proyectos fotográficos personales</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-4.jpg" alt=""/>
                        <figcaption>
                            <h2>Fotografía contemporanea</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-5.jpg" alt="img12"/>
                        <figcaption>
                            <h2>Retrato de moda</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 grid">
                    <figure class="effect-dexter">
                        <img src="img/course-6.jpg" alt="img19"/>
                        <figcaption>
                            <h2>Fotografía para cine</h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="div-btn text-center">
            <!--<a href="#" class="btn btn-lg btn-info">Ver todos los cursos</a>-->
            <!--<div class="svg-wrapper">-->
            <!--<a href="#">-->
            <!--<svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">-->
            <!--<rect class="shape" height="60" width="320" />-->
            <!--<div class="text">VER CURSOS</div>-->
            <!--</svg>-->
            <!--</a>-->
            <!--</div>-->
            <a href="#" class="btn btn-lg" id="btn-cursos">Ver cursos</a>
        </div>
    </div>
</section>

<section id="services" class="text-center">
    <h1>Servicios</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cupiditate mollitia neque sit suscipit temporibus unde.</p>
    <a href="#" class="btn btn-lg btn-light">Conoce nuestros servicios</a>
</section>

<section id="news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8" id="div-left-news">
            </div>
            <div class="col-4">
                <div id="div-right-news">
                    <h1>Lo <span>+Nuevo</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque consectetur fuga fugiat neque nisi odio quae rerum soluta, voluptas!</p>
                    <ul>
                        <li>Eventos Recientes</li>
                        <li>Colaboraciones</li>
                        <li>Viajes</li>
                        <li>Prácticas</li>
                        <li>Exhibiciones</li>
                        <li>Prensa</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-primary">Más información</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="exhibitions">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div id="div-left-exhibitions">
                    <h1>Exhibiciones</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque consectetur fuga fugiat neque nisi odio quae rerum soluta, voluptas!</p>
                    <ul>
                        <li>Selección oficial de alumnos</li>
                        <li>Selección oficial de maestros</li>
                        <li>Muestras colectivas</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-warning">Ver galerías</a>
                </div>
            </div>
            <div class="col-8" id="div-right-exhibitions">
            </div>
        </div>
    </div>
</section>

<section id="us">
    <div class="container-fluid">
        <div class="row" id="row-us">
            <div class="col-6 ml-auto">
                <div id="div-us-text">
                    <h1>¿Quiénes somos?</h1>
                    <p>Creemos firmemente que el <strong>arte</strong> es el camino más hermoso hacia la libertad, por ello no debe ser considerado un lujo, un símbolo de estatus o condición cultural, el <strong>arte</strong> es para todos.</p>
                    <p>Desde que creamos <strong>FOTOVIVA</strong> hemos buscado rodearnos de los mejores maestros y <strong>artistas</strong> que además de impartir conocimientos, comparten su diaria experiencia en este camino.</p>
                    <p>Nuestros programas de estudio están planeados cuidadosamente para mezclar teoría, práctica y experiencia, de una forma dinámica y relajada, para que con ello el alumno avance progresivamente de manera libre y personal. Además de estar avalados ante la Secretaría de Eduación a nivel Nacional.</p>
                    <p>Las instalaciones y el equipo de <strong>FOTOVIVA</strong> son un esfuerzo por otorgar una experiencia de calidad y comodidad a quienes aprenden en nuestros espacios.</p>
                    <a href="#" class="btn btn-lg btn-danger">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>