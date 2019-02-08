<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Selvas y su Marimba Orquesta | Inicio</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/inicioStyle.css')}}">
</head>

<body>
    <div class="pageContent">
        <div class="integrantesContent">
            <div class="integrantes">
                <p>
					Integrantes 
					- Cruz Rodas Edrey Alfredo 
					- González Ruíz Daniel Alejandro 
					- Gutiérrez Gutiérrez José Leyder 
					- Sánchez Selvas Jesús Alberto 
					- Sol Santiago Sheyla Valeria
                </p>
                <div class="integrantesButton">
                    <button type="button" class="close">Cerrar</button>
                </div>
            </div>
        </div>
        <a href="/menu">
            <div class="messageContent">
                <div class="message">
                    <p>
                        <span class="ms1">¡Bienvenido!</span>
                        <span class="ms2">¡De click para iniciar!</span>
                    </p>
                </div>
            </div>
        </a>
        <div class="integrantesButton">
            <button type="button" class="see">Integrantes</button>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/inicio.js')}}"></script>
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

        function animacionMensaje() {
            $(".ms2").removeClass('active');
            $(".ms1").addClass('active');
            setTimeout(() => {
                $(".ms1").removeClass('active');
                $(".ms2").addClass('active');
            }, 3000);

        }
        animacionMensaje();
    </script>
</body>

</html>