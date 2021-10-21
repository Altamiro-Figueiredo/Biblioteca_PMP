// Para mostrar o modal, de forma customizada
$('#foto').on('shown.bs.modal', function() {
    var width = $(window).width();
    // caso a Tela tenha mais que 576px, ele vai permitir visualizar o modal,
    // caso não, o modal será fechado
    if (width < 576) {
        $(this).modal('hide');
    } else {
        $(this).modal('show')
    }
});

// Para setar a pagina que o modal, ao clicar, irá iniciar
function slide(pagina) {
    $('#foto').carousel(pagina);
}