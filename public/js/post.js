var valores = new Array();
var temp;

$(".addPost").click(function() {

    $.ajax({
        type: 'get',
        url: '/addPost',
        datatype: 'json',
        data: $("#formPost").serialize(),
        success: function(data) {

            valores = JSON.parse(data);
            var titulo = valores[0].titulo,
                descripcion = valores[0].descripcion,
                colorPost = valores[0].colorPost,
                colorPrioridad = valores[0].colorPrioridad,
                nombrePrioridad = valores[0].nombrePrioridad,
                idPost = valores[0].idPost;




            $(".postContent").append(`
            <div class="postItem" style="background-color: ` + colorPost + `">
                    <form action="">
                        <input type="hidden" name="idP" value="` + idPost + `">
                        <div style="background-color: ` + colorPrioridad + `" class="addOnPriority"><p>` + nombrePrioridad + `</p></div>
                        <div class="title">
                            <input type="text" name="post" readonly value="` + titulo + `">
                        </div>
                        <div class="description">
                        <textarea readonly name="descPost">` + descripcion + `</textarea>
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
            `);
        },
        error: function(error) {
            console.log("error");
        }

    });

    console.log(valores);



});

// variable de almacenamiento para eliminar

var eraseTemp;

$(document).on("click", ".delete", function() {
    eraseTemp = $(this).parent().parent().parent().parent().find('input[type="hidden"]').val();
    console.log(eraseTemp);
    $(".alertMessage").addClass('active');
});

$(".info").click(function() {
    $(".alertMessage").removeClass('active');
});
$(".success").click(function() {
    $(".alertMessage").removeClass('active');
    var element = $(`form:has(input[value="` + eraseTemp + `"])`);
    var dataPost = element.serialize();
    console.log(dataPost);
    $.ajax({
        type: 'get',
        url: '/removePost',
        data: dataPost,
        success: function(data) {
            $(element).parent().remove();
        },
        error: function(error) {
            console.log("error");
        }
    });
});

// editar

var editTemp;
var colorTemp;
$(document).on("click", ".edit", function() {
    $(this).parent().find(`li[class*="save"]`).removeClass("none");
    var formEditing = $(this).parent().parent().parent();
    formEditing.find(`select[name="prioridad"]`).prop('disabled', false);
    formEditing.find(`input[name="post"]`).prop('readonly', false);
    formEditing.find(`textarea[name="descPost"]`).prop('readonly', false);
});
$(document).on("click", ".save", function() {
    $(this).addClass('none');
    var formEditing = $(this).parent().parent().parent();

    $.ajax({
        type: 'get',
        url: '/editPost',
        data: formEditing.serialize(),
        success: function(data) {
            console.log("hola");
            formEditing.find(`select[name="prioridad"]`).prop('disabled', true);
            formEditing.find(`input[name="post"]`).prop('readonly', true);
            formEditing.find(`textarea[name="descPost"]`).prop('readonly', true);
        },
        error: function(error) {
            console.log("error");
        }
    });
});

// asignando color
$(document).on("click", `option`, function() {
    alert("hola");
    var color = $(this).css('background-color');
    $(this).parent().css('background-color', color);
});

$(document).on("change", "select[name='prioridad']", function() {
    if ($(this).val() == 1) {
        $(this).css('background-color', '#CCCCCC');
    } else if ($(this).val() == 2) {
        $(this).css('background-color', '#0A6EB5');
    } else if ($(this).val() == 3) {
        $(this).css('background-color', '#E44E44')
    }
});