function mostrarContrasena(){
        let tipo = document.getElementById("clave");
        if(tipo.type == "password"){
            tipo.type = "text";
            $('.icono').removeClass('bi bi-eye-slash').addClass('bi bi-eye');
        }else{
            tipo.type = "password";
            $('.icono').removeClass('bi bi-eye').addClass('bi bi-eye-slash');
        }
    }


function mostrarContrasenaNueva(){
     let tipo = document.getElementById("clave_new");
    if(tipo.type == "password"){
        tipo.type = "text";
        $('.icono_nuevo').removeClass('bi bi-eye-slash').addClass('bi bi-eye');
    }else{
        tipo.type = "password";
        $('.icono_nuevo').removeClass('bi bi-eye').addClass('bi bi-eye-slash');
    }
}

function mostrarConfContrasenaNueva(){
    let tipo = document.getElementById("conf_clave_new");
   if(tipo.type == "password"){
       tipo.type = "text";
       $('.icono_nuevoconf').removeClass('bi bi-eye-slash').addClass('bi bi-eye');
   }else{
       tipo.type = "password";
       $('.icono_nuevoconf').removeClass('bi bi-eye').addClass('bi bi-eye-slash');
   }
}



