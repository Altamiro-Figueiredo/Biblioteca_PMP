function comparaSenha() {
    let senha = document.getElementById('senha');
    let confirmar = document.getElementById('confirmar');

    if (senha.value != '' && confirmar.value != '') {

        if (senha.value != confirmar.value) {
            confirmar.classList.remove('is-valid');
            confirmar.classList.add('is-invalid');

        } else {
            confirmar.classList.remove('is-invalid');
            confirmar.classList.add('is-valid');
        }
    }
}