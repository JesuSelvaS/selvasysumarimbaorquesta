<!DOCTYPE html>
<html class="{{$nameActividad}}" lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="http://selvasysumarimbaorquesta.creativasoftline.com">
    <meta name="owner" content="Selvas y su Marimba Orquesta">
    <meta name="subject" content="Selvas y su Marimba Orquesta: Desarrollo Web">
    <meta property="og:type" content="article" />
    <meta name="keywords" content="hacer una pagina, comprar paginas online, cotizar paginas, paginas web" />
    <title>Práctica 1 | Selvas y su Marimba Orquesta</title>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleTopicos.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>


@yield('content')

<footer>
    <p>© 2019 - Powered By <a href="http://selvasysumarimbaorquesta.creativasoftline.com/actividad1">Selvas y su Marimba Orquesta</a></p>
</footer>

    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    @stack('menu')
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').fadeIn(600);
            $('a').click(function(event) {
                event.preventDefault();
                newLocation = $(this).attr("href");
                $('body').fadeOut(600, newpage);
            });
            function newpage() {
                window.location = newLocation;
            }
        });
    </script>
</body>

</html>