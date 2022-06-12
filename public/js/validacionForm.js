/* VALIDACION ALUMNOS */
function validarAlum() {
    var nombre_alumno = document.getElementById('nombre_alumno');
    var ap_paterno_alumno = document.getElementById('ap_paterno_alumno');
    var ap_materno_alumno = document.getElementById('ap_materno_alumno');
    var curp_alumno = document.getElementById('curp_alumno');
    var edad_alumno = document.getElementById('edad_alumno');
    var tel_casa = document.getElementById('tel_casa');
    var cel_tutor = document.getElementById('cel_tutor');
    var ciudad_alumno = document.getElementById('ciudad_alumno');
    var alcaldia_alumno = document.getElementById('alcaldia_alumno');
    var colonia_alumno = document.getElementById('colonia_alumno');
    var calle_alumno = document.getElementById('calle_alumno');
    var cp_alumno = document.getElementById('cp_alumno');
    var nombre_curso = document.getElementById('nombre_curso');
    var grado = document.getElementById('grado_id');
    var ciclo_escolar = document.getElementById('ciclo_escolar');
    var fecha_ingreso = document.getElementById('fecha_ingreso');
    var estatus = document.getElementById('estatus');

    if (nombre_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el nombre del alumno</strong></small>';
        nombre_alumno.focus();
        return false;
    } else if (soloLetras(nombre_alumno.value) == false) {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        nombre_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML = '';
    }
    if (ap_paterno_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el apellido paterno del alumno</strong></small>';
        ap_paterno_alumno.focus();
        return false;
    } else if (soloLetras(ap_paterno_alumno.value) == false) {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ap_paterno_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta1").innerHTML = '';
    }
    if (ap_materno_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el aprellido materno del alumno</strong></small>';
        ap_materno_alumno.focus();
        return false;
    } else if (soloLetras(ap_materno_alumno.value) == false) {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ap_materno_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta2").innerHTML = '';
    }
    if (curp_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta3").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el CURP del alumno</strong></small>';
        curp_alumno.focus();
        return false;
    } else if (validacionCurp(curp_alumno.value) == false) {
        document.getElementById("alerta3").innerHTML = '<small style="color: #EC7063 "> <strong>* CURP incorrecto</strong></small>';
        curp_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta3").innerHTML = '';
    }
    if (edad_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta4").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la edad del alumno</strong></small>';
        edad_alumno.focus();
        return false;
    } else if (soloNumeros(edad_alumno.value) == false) {
        document.getElementById("alerta4").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        edad_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta4").innerHTML = '';
    }
    if (nombre_tutor.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta5").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el nombre del padreo o tutor</strong></small>';
        nombre_tutor.focus();
        return false;
    } else if (soloLetras(nombre_tutor.value) == false) {
        document.getElementById("alerta5").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        nombre_tutor.focus();
        return false;
    } else {
        document.getElementById("alerta5").innerHTML = '';
    }
    if (tel_casa.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta6").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el telefono de casa</strong></small>';
        tel_casa.focus();
        return false;
    } else if (soloNumeros(tel_casa.value) == false) {
        document.getElementById("alerta6").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        tel_casa.focus();
        return false;
    } else if (numCel(tel_casa.value) == false) {
        document.getElementById("alerta6").innerHTML = '<small style="color: #EC7063 "> <strong>* Numero de telefono</strong></small>';
        tel_casa.focus();
        return false;
    } else {
        document.getElementById("alerta6").innerHTML = '';
    }
    if (cel_tutor.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el telefono celular</strong></small>';
        cel_tutor.focus();
        return false;
    } else if (numCel(cel_tutor.value) == false) {
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Numero de celular</strong></small>';
        cel_tutor.focus();
        return false;
    } else if (soloNumeros(cel_tutor.value) == false) {
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        cel_tutor.focus();
        return false;
    } else {
        document.getElementById("alerta7").innerHTML = '';
    }
    if (ciudad_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta8").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la ciudad</strong></small>';
        ciudad_alumno.focus();
        return false;
    } else if (soloLetras(ciudad_alumno.value) == false) {
        document.getElementById("alerta8").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ciudad_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta8").innerHTML = '';
    }
    if (alcaldia_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta9").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la alcaldia</strong></small>';
        alcaldia_alumno.focus();
        return false;
    } else if (soloLetras(alcaldia_alumno.value) == false) {
        document.getElementById("alerta9").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        alcaldia_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta9").innerHTML = '';
    }
    if (colonia_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta10").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la clonia</strong></small>';
        colonia_alumno.focus();
        return false;
    } else if (soloLetras(colonia_alumno.value) == false) {
        document.getElementById("alerta10").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        colonia_alumn.focus();
        return false;
    } else {
        document.getElementById("alerta10").innerHTML = '';
    }
    if (calle_alumno.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta11").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la calle y el numero</strong></small>';
        calle_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta11").innerHTML = '';
    }
    if (cp_alumno.value == "") {
        document.getElementById("alerta12").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el CP</strong></small>';
        cp_alumno.focus();
        return false;
    } else if (soloNumeros(cp_alumno.value) == false) {
        document.getElementById("alerta12").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        cp_alumno.focus();
        return false;
    } else {
        document.getElementById("alerta12").innerHTML = '';
    }
    if (nombre_curso.value == "") {
        document.getElementById("alerta13").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el Curso</strong></small>';
        nombre_curso.focus();
        return false;
    } else {
        document.getElementById("alerta13").innerHTML = '';
    }
    if (grado.value == "") {
        document.getElementById("alerta14").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el Grado</strong></small>';
        grado.focus();
        return false;
    } else {
        document.getElementById("alerta14").innerHTML = '';
    }
    if (ciclo_escolar.value == "") {
        document.getElementById("alerta15").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el Ciclo Escolar</strong></small>';
        ciclo_escolar.focus();
        return false;
    } else {
        document.getElementById("alerta15").innerHTML = '';
    }
    if (fecha_ingreso.value == "") {
        document.getElementById("alerta16").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el Fecha Ingreso</strong></small>';
        fecha_ingreso.focus();
        return false;
    } else {
        document.getElementById("alerta16").innerHTML = '';
    }
    if (estatus.value == "") {
        document.getElementById("alerta17").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el Status</strong></small>';
        estatus.focus();
        return false;
    } else {
        document.getElementById("alerta17").innerHTML = '';
    }

    Swal.fire(
        'Exito!',
        'El alumno ha sido registrado.',
        'success'
    );
}
/* VALIDACION DOCENTES */
function valDocenet() {
    var nombre_docente = document.getElementById('nombre_docente');
    var ap_paterno_docente = document.getElementById('ap_paterno_docente');
    var ap_materno_docente = document.getElementById('ap_materno_docente');
    var edad_docente = document.getElementById('edad_docente');
    var curp_docente = document.getElementById('curp_docente');
    var rfc_docente = document.getElementById('rfc_docente');
    var email_docente = document.getElementById('email_docente');
    var tel_casa_docente = document.getElementById('tel_casa_docente');
    var cel_docente = document.getElementById('cel_docente');
    var ciudad_docente = document.getElementById('ciudad_docente');
    var alcaldia_docente = document.getElementById('alcaldia_docente');
    var colonia_docente = document.getElementById('colonia_docente');
    var calle_docente = document.getElementById('calle_docente');
    var cp_docente = document.getElementById('cp_docente');
    var cedula_docente = document.getElementById('cedula_docente');
    var especialidad = document.getElementById('especialidad');
    var profesion = document.getElementById('profesion');

    if (nombre_docente.value == "") {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el nombre</strong></small>';
        nombre_docente.focus();
        return false;
    } else if (soloLetras(nombre_docente.value) == false) {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        nombre_docente.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML = '';
    }
    if (ap_paterno_docente.value == "") {
        /* alert("ingrese nombre"); */
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el apellido paterno</strong></small>';
        ap_paterno_docente.focus();
        return false;
    } else if (soloLetras(ap_paterno_docente.value) == false) {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ap_paterno_docente.focus();
        return false;
    } else {
        document.getElementById("alerta1").innerHTML = '';
    }
    if (ap_materno_docente.value == "") {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el aprellido materno</strong></small>';
        ap_materno_docente.focus();
        return false;
    } else if (soloLetras(ap_materno_docente.value) == false) {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ap_materno_docente.focus();
        return false;
    } else {
        document.getElementById("alerta2").innerHTML = '';
    }
    if (edad_docente.value == "") {
        document.getElementById("alerta3").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la edad</strong></small>';
        edad_docente.focus();
        return false;
    } else if (soloNumeros(edad_docente.value) == false) {
        document.getElementById("alerta3").innerHTML = '<small style="color: #EC7063 "> <strong>* Solo numeros</strong></small>';
        edad_docente.focus();
        return false;
    } else {
        document.getElementById("alerta3").innerHTML = '';
    }
    if (curp_docente.value == "") {
        document.getElementById("alerta4").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el CURP</strong></small>';
        curp_docente.focus();
        return false;
    } else if (validacionCurp(curp_docente.value) == false) {
        document.getElementById("alerta4").innerHTML = '<small style="color: #EC7063 "> <strong>* CURP incorrecto</strong></small>';
        curp_docente.focus();
        return false;
    } else {
        document.getElementById("alerta4").innerHTML = '';
    }
    if (rfc_docente.value == "") {
        document.getElementById("alerta5").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el RFC</strong></small>';
        rfc_docente.focus();
        return false;
    } else if (valRFC(rfc_docente.value) == false) {
        document.getElementById("alerta5").innerHTML = '<small style="color: #EC7063 "> <strong>* RFC incorrecto</strong></small>';
        rfc_docente.focus();
        return false;
    } else {
        document.getElementById("alerta5").innerHTML = '';
    }
    if (email_docente.value == "") {
        document.getElementById("alerta6").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el email</strong></small>';
        email_docente.focus();
        return false;
    } else if (valEmail(email_docente.value) == false) {
        document.getElementById("alerta6").innerHTML = '<small style="color: #EC7063 "> <strong>* Email incorrecto</strong></small>';
        email_docente.focus();
        return false;
    } else {
        document.getElementById("alerta6").innerHTML = '';
    }
    if (tel_casa_docente.value == "") {
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el telefono de casa</strong></small>';
        tel_casa_docente.focus();
        return false;
    } else if (soloNumeros(tel_casa_docente.value) == false) {
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Solo numeros</strong></small>';
        tel_casa_docente.focus();
        return false;
    } else if (numCel(tel_casa_docente.value) == false) {
        document.getElementById("alerta7").innerHTML = '<small style="color: #EC7063 "> <strong>* Numero de casa incorrecto</strong></small>';
        tel_casa_docente.focus();
        return false;
    } else {
        document.getElementById("alerta7").innerHTML = '';
    }
    if (cel_docente.value == "") {
        document.getElementById("alerta8").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el celular</strong></small>';
        cel_docente.focus();
        return false;
    } else if (soloNumeros(cel_docente.value) == false) {
        document.getElementById("alerta8").innerHTML = '<small style="color: #EC7063 "> <strong>* Solo numeros</strong></small>';
        cel_docente.focus();
        return false;
    } else if (numCel(cel_docente.value) == false) {
        document.getElementById("alerta8").innerHTML = '<small style="color: #EC7063 "> <strong>* Numero celular incorrecto</strong></small>';
        cel_docente.focus();
        return false;
    } else {
        document.getElementById("alerta8").innerHTML = '';
    }
    if (ciudad_docente.value == "") {
        document.getElementById("alerta9").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la ciudad</strong></small>';
        ciudad_docente.focus();
        return false;
    } else if (soloLetras(ciudad_docente.value) == false) {
        document.getElementById("alerta9").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        ciudad_docente.focus();
        return false;
    } else {
        document.getElementById("alerta9").innerHTML = '';
    }
    if (alcaldia_docente.value == "") {
        document.getElementById("alerta10").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la alcaldia</strong></small>';
        alcaldia_docente.focus();
        return false;
    } else if (soloLetras(alcaldia_docente.value) == false) {
        document.getElementById("alerta10").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        alcaldia_docente.focus();
        return false;
    } else {
        document.getElementById("alerta10").innerHTML = '';
    }
    if (colonia_docente.value == "") {
        document.getElementById("alerta11").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la colonia</strong></small>';
        colonia_docente.focus();
        return false;
    } else if (soloLetras(colonia_docente.value) == false) {
        document.getElementById("alerta11").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        colonia_docente.focus();
        return false;
    } else {
        document.getElementById("alerta11").innerHTML = '';
    }
    if (calle_docente.value == "") {
        document.getElementById("alerta12").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la calle y numero</strong></small>';
        calle_docente.focus();
        return false;
    } else {
        document.getElementById("alerta12").innerHTML = '';
    }
    if (cp_docente.value == "") {
        document.getElementById("alerta13").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el CP</strong></small>';
        cp_docente.focus();
        return false;
    } else if (soloNumeros(cp_docente.value) == false) {
        document.getElementById("alerta13").innerHTML = '<small style="color: #EC7063 "> <strong>* Solo numeros</strong></small>';
        cp_docente.focus();
        return false;
    } else {
        document.getElementById("alerta13").innerHTML = '';
    }
    if (cedula_docente.value == "") {
        document.getElementById("alerta14").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la cedula</strong></small>';
        cedula_docente.focus();
        return false;
    } else {
        document.getElementById("alerta14").innerHTML = '';
    }
    if (especialidad.value == "") {
        document.getElementById("alerta15").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la especialidad</strong></small>';
        especialidad.focus();
        return false;
    } else if (soloLetras(especialidad.value) == false) {
        document.getElementById("alerta15").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        especialidad.focus();
        return false;
    } else {
        document.getElementById("alerta15").innerHTML = '';
    }
    if (profesion.value == "") {
        document.getElementById("alerta16").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la profesion</strong></small>';
        profesion.focus();
        return false;
    } else if (soloLetras(profesion.value) == false) {
        document.getElementById("alerta16").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        profesion.focus();
        return false;
    } else {
        document.getElementById("alerta16").innerHTML = '';
    }
    Swal.fire(
        'Exito!',
        'El docente ha sido registrado.',
        'success'
    );
}

function valPago() {
    var docente = document.getElementById('docente');
    var fecha_nomina = document.getElementById('fecha_nomina');
    var cantidad_nomina = document.getElementById('cantidad_nomina');

    if (docente.value == "") {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar al Docente</strong></small>';
        docente.focus();
        return false;
    } else if (soloLetras(docente.value) == false) {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        docente.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML = '';
    }
    if (fecha_nomina.value == "") {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la fecha</strong></small>';
        fecha_nomina.focus();
        return false;
    } else {
        document.getElementById("alerta1").innerHTML = '';
    }
    if (cantidad_nomina.value == "") {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la cantidad</strong></small>';
        cantidad_nomina.focus();
        return false;
    } else if (soloNumeros(cantidad_nomina.value) == false) {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        cantidad_nomina.focus();
        return false;
    } else {
        document.getElementById("alerta2").innerHTML = '';
    }
    Swal.fire(
        'Exito!',
        'El pago ha sido registrado.',
        'success'
    );
}


function valPagoAlum() {
    var alum = document.getElementById('alum');
    var fecha_alum = document.getElementById('fecha_alum');
    var cantidad_alum = document.getElementById('cantidad_alum');
    var concepto_alum = document.getElementById('concepto_alum');

    if (alum.value == "") {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el nombre</strong></small>';
        alum.focus();
        return false;
    } else if (soloLetras(alum.value) == false) {
        document.getElementById("alerta").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        alum.focus();
        return false;
    } else {
        document.getElementById("alerta").innerHTML = '';
    }
    if (concepto_alum.value == "") {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el concepto</strong></small>';
        concepto_alum.focus();
        return false;
    } else if (soloLetras(concepto_alum.value) == false) {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo letras</strong></small>';
        concepto_alum.focus();
        return false;
    } else {
        document.getElementById("alerta1").innerHTML = '';
    }
    if (cantidad_alum.value == "") {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la cantidad</strong></small>';
        cantidad_alum.focus();
        return false;
    } else if (soloNumeros(cantidad_alum.value) == false) {
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar solo numeros</strong></small>';
        cantidad_alum.focus();
        return false;
    } else {
        document.getElementById("alerta2").innerHTML = '';
    }
    if (fecha_alum.value == "") {
        document.getElementById("alerta3").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar la fecha</strong></small>';
        fecha_alum.focus();
        return false;
    } else {
        document.getElementById("alerta3").innerHTML = '';
    }

    Swal.fire(
        'Exito!',
        'El pago ha sido registrado.',
        'success'
    );
}

function soloLetras(parametro) {
    if (!/^[a-zA-Z\ áéíóúÁÉÍÓÚñÑ\s]*$/.test(parametro.trim())) {
        return false;
    } else {
        return true;
    }
}

function soloNumeros(parametro) {
    if (!/^([0-9])*$/.test(parametro)) {
        return false;
    } else {
        return true;
    }
}

function numCel(parametro) {
    var telefono = /(55|56)[ -]*([0-9][ -]*){8}/;
    if (!telefono.test(parametro)) {
        return false;
    } else {
        return true;
    }
}

function validacionCurp(parametro) {
    var curp = /^([A-Z&]|[a-z&]{1})([AEIOU]|[aeiou]{1})([A-Z&]|[a-z&]{1})([A-Z&]|[a-z&]{1})([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([HM]|[hm]{1})([AS|as|BC|bc|BS|bs|CC|cc|CS|cs|CH|ch|CL|cl|CM|cm|DF|df|DG|dg|GT|gt|GR|gr|HG|hg|JC|jc|MC|mc|MN|mn|MS|ms|NT|nt|NL|nl|OC|oc|PL|pl|QT|qt|QR|qr|SP|sp|SL|sl|SR|sr|TC|tc|TS|ts|TL|tl|VZ|vz|YN|yn|ZS|zs|NE|ne]{2})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([0-9]{2})$/g;
    if (!curp.test(parametro)) {
        return false;
    } else {
        return true;
    }
}

function valEmail(parametro) {
    /*  var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/; */
    var email = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    if (!email.test(parametro)) {
        return false;
    } else {
        return true;
    }
}

function valRFC(parametro) {
    var rfc = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    if (!rfc.test(parametro)) {
        return false;
    } else {
        return true;
    }
}