$(document).ready(function() {
    $('.form_eliminar_alumno').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estas seguro de querer eliminar?',
            text: "No podrás revertir esto.!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECC71',
            cancelButtonColor: '#E74C3C ',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El anumno no se elimino!'
                })
            }
        })
    });

    $('.form_eliminar_doc').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estas seguro de querer eliminar?',
            text: "No podrás revertir esto.!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECC71',
            cancelButtonColor: '#E74C3C ',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El docente no se elimino!'
                })
            }
        })
    });
    $('.form_eliminar_nomina').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estas seguro de querer eliminar?',
            text: "No podrás revertir esto.!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECC71',
            cancelButtonColor: '#E74C3C ',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El pago no se elimino!'
                })
            }
        })
    });
    $('.form_eliminar_event').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estas seguro de querer eliminar?',
            text: "No podrás revertir esto.!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2ECC71',
            cancelButtonColor: '#E74C3C ',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El evento no se elimino!'
                })
            }
        })
    });
});