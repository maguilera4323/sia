function mostrarContrasena(){
    var tipo = document.getElementById("clave");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}


