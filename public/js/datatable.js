/* $(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
        autowidth: false,
        //para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },
        dom: 'Bfrtilp',
        buttons: [{
                extends: 'excelHtml5',
                text: 'Excel',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extends: 'pdfHtml5',
                text: 'PDF',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                extends: 'print',
                text: 'Imprmir',
                titleAttr: 'Imprmir',
                className: 'btn btn-info'
            }
        ]
    });
}); */
$(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
        autowidth: false,
        language: {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',
        buttons: [{
                extend: 'excelHtml5',
                text: 'Excel ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                extend: 'print',
                text: 'Imprimir ',
                titleAttr: 'Imprimir',
                className: 'btn btn-primary'
            },
        ]
    });
});