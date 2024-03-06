function mostrarSenha(idCampoSenha) {
    var campoSenha = document.getElementById(idCampoSenha);
    if (campoSenha.type === "password") {
        campoSenha.type = "text";
    } else {
        campoSenha.type = "password";
    }
}
