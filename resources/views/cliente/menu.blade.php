@extends('master.master')

@section('content')

    <div class="pageContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- Lado izquierdo. Aquí se mostrarán las actividades -->
                    <div class="leftSideContent">
                        <div class="actividadesContent">
                            <div class="actividadItem">
                                <a href="/actividad1">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="actividadInfo">
                                                <div class="name"><p>Actividad 1 - Información de Integrantes</p></div>
                                                <div class="fecha"><p>05/Febrero/2019</p></div>
                                                <div class="descripcion"><p>Se implementó una página básica que contiene información básica de los integrantes del equipo.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="actividadItem">
                                <a href="/actividad2">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="actividadInfo">
                                                <div class="name"><p>Actividad 2 - Primera estructura web</p></div>
                                                <div class="fecha"><p>12/Febrero/2019</p></div>
                                                <div class="descripcion"><p>Se creó una estructura en base a la página de educación a distancia de it aguascalientes. Solamente se creó estructura conservando, o bien, guiándonos del concepto que ya maneja la página de it aguascalientes.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="actividadItem">
                                <a href="/actividad3">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="actividadInfo">
                                                <div class="name"><p>Actividad 3 - Añadiendo estilo</p></div>
                                                <div class="fecha"><p>03/Marzo/2019</p></div>
                                                <div class="descripcion"><p>Con la estructura anterior (aunque con algunos cambios), se añadió CSS3 a la página.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                   
                            
                            
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Lado derecho. Aquí se moestrarán las imágenes de fondo, este no aparecerá en la versión responsive -->
                    <div class="rightSideContent">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('menu')
<script src="{{asset('js/fontawesome-all.js')}}"></script>
<script>
$(document).ready(function(){
    $(window).load(function(){
        var final = $(".actividadItem").length;
        var cont = 0;
        console.log("final: " + final + " cont " + cont);
        do {
            cont++;
            actMenu(cont);
        }while(cont <= final);
    });
});
// Pendiente animación

function actMenu(cont){
    $(".actividadesContent .actividadItem:nth-of-type("+ cont +")").addClass("show");
}
</script>
@endpush