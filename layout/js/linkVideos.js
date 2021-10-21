function mudarLink(event, codigo){
    let linkAlteravel = document.getElementById('linkAlteravel');
    let teste = document.querySelectorAll('button.txtPrincipal')[0];
    if(teste){
        teste.classList.remove('txtPrincipal');
    }

    linkAlteravel.src = "https://www.youtube.com/embed/" + codigo;
    event.classList.add('txtPrincipal');
}