@extends('master.master') @section('content')

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Modelo Educativo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Modelo Educativo <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Modelo Educativo <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav></header>

<main class="pageContent">
    <section class="gallery">
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </section>
    <section class="miniAbout">
        <div class="informacionServiciosContent container">
            <div class="aboutDescription row">
                <div class="imageDescription col-md-4">
                    <figure>
                        <!--<img src="" alt="imageAbout">-->
                        <i class="fas fa-info-circle"></i>
                    </figure>
                </div>
                <div class="info col-md-8">
                    <h2>¿Qué ofrece nuestro modelo educativo?</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate inventore consequatur reiciendis itaque autem, optio repellendus omnis eius fuga accusamus voluptate, error blanditiis ex, unde voluptates tenetur qui dolorum? Ipsam!</p>
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
                    </div>
                    <div class="descService">
                        <h3>Calidad</h3>
                        <p>Aquí información breve del servicio</p>
                    </div>
                </div>
                <div class="serviceItem col-md-4">
                    <div class="iconService">
                        <!-- Aquí va el ícono -->
                    </div>
                    <div class="descService">
                        <h3>Seguridad</h3>
                        <p>Aquí información breve del servicio</p>
                    </div>
                </div>
                <div class="serviceItem col-md-4">
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
        <div class="modulosContent container">
            <div class="row">
                <div class="modulo col-md-4">
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
                <div class="modulo col-md-4">
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
                <div class="modulo col-md-4">
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
                <div class="modulo col-md-4">
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
                <div class="modulo col-md-4">
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
                <a href="#"><button>IR A CONTACTOS</button></a>
            </div>
        </div>
    </div>
</footer>

@endsection