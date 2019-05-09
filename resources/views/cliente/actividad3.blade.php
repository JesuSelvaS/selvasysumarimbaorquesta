<!DOCTYPE html>
<html class="{{$nameActividad}}" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad 3</title>
    <link rel="stylesheet" href="{{asset('css/styleTopicos.css')}}">
</head>

<body>
    <header>
        <!-- Implementar nav de Bootstrap 4, solo copia y pega :3 desde la página oficial-->
        <div class="blackCap"></div>
        <div class="switchNav">
            <button><i class="fas fa-bars"></i></button>
        </div>
        <nav>
            <div class="logo">
                <figure>
                    
                </figure>
            </div>
            <div class="actionsNav">
                <ul>
                    <li class="menu"><a href="#">Modelo Educativo</a></li>
                    <li class="menu"><a href="#">Carreras</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#">Acerca de Nosotros</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="pageContent">
        <section class="gallery">
            <!-- Insertar la galería de Bootstrap 4 con las descripciones, indicadores, y botones, solo copia y pega desde la página oficial :3 -->
            <div class="imageItem">
                <figure>
                    <img src="{{asset('img/fondo_image.jpg')}}" alt="">
                    <figcaption>
                        <div class="titleImage">
                            <h3>NUEVO MODELO EDUCATIVO</h3>
                        </div>
                        <div class="descImage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perferendis possimus facilis commodi deleniti iusto earum sit magni, voluptatum repudiandae dolorum officia laudantium asperiores, dolore porro animi fugiat ab
                                id.
                            </p>
                        </div>
                        <div class="actionsImage">
                            <div class="action">
                                <button>Ver más</button>
                            </div>
                            <div class="action">
                                <button>Consultar</button>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>
        <section class="miniAbout">
            <div class="informacionServiciosContent container">
                <div class="aboutDescription row">
                    <div class="imageDescription col-md-4">
                        <figure>
                            <img src="{{asset('img/money_edy.png')}}" alt="imageAbout">
                        </figure>
                    </div>
                    <div class="info col-md-8">
                        <h2>¿Qué ofrece nuestro modelo educativo?</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate inventore consequatur reiciendis itaque autem, optio repellendus omnis eius fuga accusamus voluptate, error blanditiis ex, unde voluptates tenetur qui dolorum?
                            Ipsam!
                        </p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sequi at sunt quas distinctio ipsum quos. Nobis dolorum ex culpa officia, ipsam quos iusto harum cum voluptatibus numquam dolor tenetur.</p>
                    </div>
                </div>
                <div class="servicesContent row">
                    <div class="titleServices col-md-12">
                        <h2>¿Porqué Elegirnos?</h2>
                    </div>
                    <div class="serviceItem col-md-4">
                        <div class="iconService">
                            <!-- Aquí va el ícono -->
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="descService">
                            <h3>Calidad</h3>
                            <p>Aquí información breve del servicio</p>
                        </div>
                    </div>
                    <div class="serviceItem col-md-4">
                        <div class="iconService">
                            <!-- Aquí va el ícono -->
                            <i class="fas fa-unlock-alt"></i>
                        </div>
                        <div class="descService">
                            <h3>Seguridad</h3>
                            <p>Aquí información breve del servicio</p>
                        </div>
                    </div>
                    <div class="serviceItem col-md-4">
                        <div class="iconService">
                            <!-- Aquí va el ícono -->
                            <i class="fas fa-award"></i>
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
        <h3>Nuestros mejores módulos</h3>
            <div class="modulosContent container">
                <div class="row">
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Sistemas Computacionales</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Gestión Empresarial</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Bioquímica</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Bioquímica</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Bioquímica</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                    <div class="modulo col-md-4">
                        <div class="moduloImage" style="background-image: url({{asset('img/ges1.jpg')}})">
                            
                        </div>
                        <div class="moduloTitle">
                            <h3>Ingeniería en Mecatrónica</h3>
                        </div>
                        <div class="descModulo">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia! Nihil quod, quia nesciunt sed cupiditate pariatur iste vel repellendus debitis libero facere assumenda, consequuntur, error mollitia et natus eum.</p>
                        </div>
                        <div class="moduloActions">
                            <button>Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container">
        <div class="row">
            <div class="footerCol col-md-4">
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
            <div class="footerCol col-md-4">
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
            <div class="footerCol col-md-4">
                <div class="title">
                    <h3>Contacto</h3>
                </div>
                <div class="description">
                    <p>Vaya a la sección de contactos por cualquier duda.</p>
                    <button>IR A CONTACTOS</button>
                </div>
            </div>
            <p>© 2019 - Impulsado por Selvas y su Marimba Orquesta y los boletitos del Cesa - Todos los derechos reservados</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/fontawesome-all.js')}}"></script>
    <script>
        $(".switchNav button").click(function(){
            $(".blackCap, nav").toggleClass('active');
        });
        $(".blackCap").click(function(){
            $("nav,.blackCap").removeClass('active');
        });
    </script>
</body>

</html>