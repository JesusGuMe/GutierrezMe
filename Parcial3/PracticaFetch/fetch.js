$(document).ready(function() {
    document.getElementById("btnFetch").addEventListener("click", function() {
        let promesa = fetch('Json.php');
        promesa.then(respuesta => respuesta.json() ).then(datos => console.log(datos));
    });
});

$(document).ready( function() {
    $("#btnAJAX").click(ajaxFunction);

    function ajaxFunction() {
    
        var ajaxRequest;
        ajaxRequest = new XMLHttpRequest();
    
    
        ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4)                                
            { document.getElementById("resultado").innerHTML = ajaxRequest.responseText; } 
        };
    
        ajaxRequest.open("GET","ajax.php",true);  
        ajaxRequest.send();                                  
    }

});
$(document).ready(function() {
    $('#btnCambiaHeaderP').click(function() {
        new Promise(function(resolve, reject) { 
            var solicitud = new XMLHttpRequest();
            solicitud.onreadystatechange = function() {
                if(solicitud.readyState == 4 && solicitud.status == 200) {
                    resolve(solicitud.responseText);
                }
            };
            solicitud.open("GET", "encabezado.txt", true);
            solicitud.send();
        }).then(value => document.getElementById("header").innerHTML = value);
        
    });
});

$(document).ready(function() {
$('#btnjson').click(function() {
  $.post('Json.php',{},function(data){

        console.log(data);
        $('#Titulo').val(data.Titulo);
        $('#idClave').val(data.idClave);
        $('#carrera').val(data.carrera);
        $('#nomEscuela').val(data.nomEscuela);
        $('#grupos').val(data.grupos);
        $('#alumnos').val(data.alumnos);
        $('#ciudad').val(data.ciudad);
        $('#estado').val(data.estado);
        $('#pais').val(data.pais);

    },'json');
});});