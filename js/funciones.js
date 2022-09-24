function mostrarContrasena(){
    window.addEventListener("load", function() {
        showPassword = document.querySelector('.MostrarContrasena');
        showPassword.addEventListener('click', () => {

            clave = document.querySelector('.clave');

            if ( clave.type === "text" ) {
                clave.type = "password"
                showPassword.classList.remove('bi-eye');
            } else {
                clave.type = "text"
                showPassword.classList.toggle("bi-eye");
            }
            })
    });
}

/* function mostrarContrasenaNueva(){
    window.addEventListener("load", function() {
        showPassword = document.querySelector('.iconoClaveNueva');
        showPassword.addEventListener('click', () => {
            clave_nueva = document.querySelector('.clave_new');
            conf_clave_nueva=document.querySelector('.conf_clave_new');

            if (clave_nueva.type === "text" ) {
                clave_nueva.type = "password"
                conf_clave_nueva.type = "password"
                showPassword.classList.remove('bi-eye-slash');
            } else {
                clave_nueva.type = "text"
                conf_clave_nueva.type = "text"
                showPassword.classList.toggle("bi-eye-slash");
            }
            })
    }); */

