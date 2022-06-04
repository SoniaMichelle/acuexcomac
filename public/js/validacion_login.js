function valLogin() {
    /* var email, password;

    email = document.getElementById("email");
    password = document.getElementById("password"); */

    var email = document.getElementById('email');
    var password = document.getElementById('password');

    if (email.value == "") {
        /*  alert("campos vacios correo") */
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el email</strong></small>';
        email.focus();
        return false;
    } else if (valEmail(email.value) == false) {
        document.getElementById("alerta1").innerHTML = '<small style="color: #EC7063 "> <strong>* Email incorrecto</strong></small>';
        email.focus();
        return false;
    } else {
        document.getElementById("alerta1").innerHTML = '';
    }
    if (password.value == "") {
        /* alert("password vacio") */
        document.getElementById("alerta2").innerHTML = '<small style="color: #EC7063 "> <strong>* Favor de ingresar el password</strong></small>';
        password.focus();
        return false;
    } else {
        document.getElementById("alerta2").innerHTML = '';
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