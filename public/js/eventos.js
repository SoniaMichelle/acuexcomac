document.addEventListener('DOMContentLoaded', function() {
    /* DELECCIONAR EL FORMULARIO PARA RECOLECTAR LOS DATOS */
    let formulario = document.querySelector("#formEventos");
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        displayEventTime: false,
        selectable: true,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
        },
        /* MOSTRAR LA INFORMACION */
        /*  events: baseURL + "/evento/mostrar", */
        eventSources: {
            url: baseURL + "/evento/mostrar",
            method: "POST",
            extraParams: {
                _token: formulario._token.value,
            }
            /*  color: "#62DA96",
             textColor: "pink" */
        },
        /* 1.MOSTRANDO EL MODAL */
        dateClick: function(info) {
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;

            $('#evento').modal("show");
        },
        /* ACTUALIZAR DATOS */
        eventClick: function(info) {
            var evento = info.event;
            console.log(evento);
            axios.post(baseURL + "/evento/editar/" + info.event.id).
            then(
                (respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    formulario.costo_event.value = respuesta.data.costo_event;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    formulario.color.value = respuesta.data.color;
                    $('#evento').modal("show");
                }
                /* SI GENERA UN ERROR LO ATRAPA AQUI*/
            ).catch(
                error => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                }
            )
        }
    });
    calendar.render();
    /* OBTENIENDO LOS DATOS DEL FORMULARIO */
    document.getElementById("btnGuardar").addEventListener("click", function() { /*-> Capturando la accion del boton para guardar los datos ingresados*/
        enviarDatos("/evento/agregar");
    });
    document.getElementById("btnModificar").addEventListener("click", function() {
        enviarDatos("/evento/actualizar/" + formulario.id.value);
    });
    document.getElementById("btnEliminar").addEventListener("click", function() {
        enviarDatos("/evento/borrar/" + formulario.id.value);
    });
    /* METODO PARA GUARAR Y ELIMINAR INFORMACION */
    function enviarDatos(url) {
        /* Recuperar la informacion */
        const datos = new FormData(formulario);
        const nuevaURL = baseURL + url;
        /*  console.log(datos); */
        /* Capturar los datos por medio de axios que nos permite enviar informacion a travez de una URL*/
        /* const axios = require('axios'); */
        axios.post(nuevaURL, datos).
        then(
            (respuesta) => {
                /* RECARGAR LA VISTA AL GUARDAR */
                calendar.refetchEvents();
                $('#evento').modal("hide");
            }
            /* SI GENERA UN ERROR LO ATRAPA AQUI*/
        ).catch(
            error => {
                if (error.response) {
                    console.log(error.response.data);
                }
            }
        )
    }
});