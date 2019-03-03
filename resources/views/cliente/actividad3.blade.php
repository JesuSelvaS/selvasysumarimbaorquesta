@extends('master.master') @section('content')

<header>
    <!-- Implementar nav de Bootstrap 4 -->
</header>

<main class="pageContent">
    <section class="gallery">
        <!-- Insertar la galería de Bootstrap 4 con las descripciones, indicadores, y botones  -->
    </section>
    <section class="miniAbout">
        <div class="informacionServiciosContent">
            <div class="aboutDescription">
                <div class="imageDescription">
                    <figure>
                        <img src="" alt="imageAbout">
                    </figure>
                </div>
                <div class="info">
                    <h2>¿Qué ofrece nuestro modelo educativo?</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate inventore consequatur reiciendis itaque autem, optio repellendus omnis eius fuga accusamus voluptate, error blanditiis ex, unde voluptates tenetur qui dolorum? Ipsam!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sequi at sunt quas distinctio ipsum quos. Nobis dolorum ex culpa officia, ipsam quos iusto harum cum voluptatibus numquam dolor tenetur.</p>
                </div>
            </div>
            <div class="servicesContent">
                <div class="titleServices">
                    <h2>¿Porqué Elegirnos?</h2>
                </div>
                <div class="serviceItem">
                    <div class="iconService">
                        <!-- Aquí va el ícono -->
                    </div>
                    <div class="descService">
                        <h3>Calidad</h3>
                        <p>Aquí información breve del servicio</p>
                    </div>
                </div>
                <div class="serviceItem">
                    <div class="iconService">
                        <!-- Aquí va el ícono -->
                    </div>
                    <div class="descService">
                        <h3>Seguridad</h3>
                        <p>Aquí información breve del servicio</p>
                    </div>
                </div>
                <div class="serviceItem">
                    <div class="iconService">
                        <!-- Aquí va el ícono -->
                    </div>
                    <div class="descService">
                        <h3>Certificación</h3>
                        <p>Aquí información breve del servicio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bestModulos">
        <div class="modulosContent">
            <div class="modulo">
                <div class="moduloImage">
                    <figure>
                        <img src="" alt="moduloImage">
                    </figure>
                </div>
                <div class="moduloTitle">
                    <h3>Ingeniería en Sistemas Computacionales</h3>
                </div>
                <div class="descModulo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                </div>
            </div>
            <div class="modulo">
                <div class="moduloImage">
                    <figure>
                        <img src="" alt="moduloImage">
                    </figure>
                </div>
                <div class="moduloTitle">
                    <h3>Ingeniería en Gestión Empresarial</h3>
                </div>
                <div class="descModulo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                </div>
            </div>
            <div class="modulo">
                <div class="moduloImage">
                    <figure>
                        <img src="" alt="moduloImage">
                    </figure>
                </div>
                <div class="moduloTitle">
                    <h3>Ingeniería en Bioquímica</h3>
                </div>
                <div class="descModulo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="footerCol">
        <div class="title">
            <h3>Integrantes</h3>
        </div>
        <div class="description">
            <ul>
                <li>Cruz Rodas Edrey Alfredo - 15270733</li>
                <li>González Ruíz Daniel Alejandro - 15270738</li>
                <li>Gutiérrez Gutiérrez José Leyder - 15270740</li>
                <li>Sánchez Selvas Jesús Alberto - 15270794</li>
                <li>Sol Santiago Sheyla Valeria - 15270796</li>
            </ul>
        </div>
    </div>
    <div class="footerCol">
        <div class="title">
            <h3>Links de interés</h3>
        </div>
        <div class="description">
            <ul>
                <li><a href="#">Ing. En Gestión</a></li>
                <li><a href="#">Ing. En Mecánica</a></li>
                <li><a href="#">Ing. Industrial</a></li>
                <li><a href="#">Ing. Bioquímica</a></li>
            </ul>
        </div>
    </div>
    <div class="footerCol">
        <div class="title">
            <h3>Contacto</h3>
        </div>
        <div class="description">
            <p>Vaya a la sección de contactos por cualquier duda.</p>
            <a href="#"><button>IR A CONTACTOS</button></a>
        </div>
    </div>
</footer>

@endsection