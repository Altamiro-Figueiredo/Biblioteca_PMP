function visivel() {
    var senha = document.getElementById("senha");
    var icone = document.getElementById("icone");
    if (senha.type === "password") {
        senha.type = "text";
        icone.innerHTML = `<i class="far fa-eye-slash"></i>`
    } else {
        senha.type = "password";
        icone.innerHTML = `<i class="far fa-eye"></i>`;
    }
}