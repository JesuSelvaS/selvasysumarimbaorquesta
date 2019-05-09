<!DOCTYPE html>
<html class="{{$nameActividad}}" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad 4</title>
    <link rel="stylesheet" href="{{asset('css/styleTopicos.css')}}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/menu">Menú</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Contenido de la página -->
        <section class="addPostSide">

            <div class="formPostContent">
                <form id="formPost" method="POST">
                    <h3>Añadir un Post</h3>
                    <div class="input-group">
                        <input type="text" name="title" placeholder="Título del postit...">
                    </div>
                    <div class="input-group">
                        <textarea name="description" id="description" placeholder="Inserte la descripción del Post"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="color" name="color" placeholder="Seleccione un color">
                    </div>
                    <div class="input-group">
                        <select name="priority" id="priority">
                            <option value="0">Seleccione prioridad</option>
                            <option value="1">Estándar</option>
                            <option value="2">Cold</option>
                            <option value="3">Hot</option>
                        </select>
                    </div>
                    <button class="addPost" type="button"><i class="fas fa-plus"></i> Añadir Post</button>
                </form>
            </div>
        </section>
        <section class="historyPost">
            <h3>Historial de Posts</h3>
            <!-- <div class="filterContent">
                <form action="">
                    <select name="filter" id="filter">
                        <option value="0">Ordenar por...</option>
                        @foreach($prioridades as $item)
                        <option value="{{$item->idprioridad}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </form>
            </div> -->
            <div class="postContent">
                @foreach($posts as $item)
                <div class="postItem" style="background-color: {{$item->colorPost}}">
                    <form action="">
                        <input name="idP" type="hidden" value="{{$item->idPost}}">
                        <select disabled="true" name="prioridad" style="background-color: {{$item->colorPrioridad}}" class="addOnPriority">
                            <option style="background-color: {{$item->colorPrioridad}}" value="{{$item->idprioridad}}">{{$item->nombrePrioridad}}</option>
                            @foreach($prioridades as $itemB)
                            @if($itemB->idprioridad != $item->idprioridad)
                            <option style="background-color: {{$itemB->color}}" value="{{$itemB->idprioridad}}">{{$itemB->nombre}}</option>
                            @endif
                            @endforeach
                        </select>
                        
                        <div class="title">
                            <input type="text" name="post" readonly value="{{$item->titulo}}">
                        </div>
                        <div class="description">
                            <textarea readonly name="descPost">{{$item->desc}}</textarea>
                        </div>
                        <div class="actions">
                            <ul>
                                <li class="delete"><i class="fas fa-trash"></i></li>
                                <li class="edit"><i class="fas fa-pencil-alt"></i></li>
                                <li class="none save"><i class="far fa-save"></i></li>
                            </ul>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <div class="alertMessage">
        <div class="icon"><i class="fas fa-exclamation-circle"></i></div>
        <div class="message"><p>¿Está seguro de eliminar este post?</p></div>
        <div class="button">
            <button class="info">Aún no</button>
            <button class="success">Gárchatelo</button>
        </div>
    </div>

    <footer>
        <h3>Integrantes</h3>
        <ul>
            <li>Cruz Rodas Edrey Alfredo - #15270733</li>
            <li>González Ruíz Daniel Alejandro - #15270738</li>
            <li>Gutiérrez Gutiérrez José Leyder - #15270740</li>
            <li>Sánchez Selvas Jesús Alberto - #15270794</li>
            <li>Sol Santiago Sheyla Valeria - #15270796</li>
        </ul>
        <p>© 2019 - Impulsado por Selvas y su Marimba Orquesta - Todos los derechos reservados.</p>
    </footer>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/fontawesome-all.js')}}"></script>
    <script src="{{asset('js/post.js')}}"></script>
</body>

</html>