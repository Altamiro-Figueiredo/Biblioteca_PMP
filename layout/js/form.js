// código usado para selecionar todos os caracteres ao clicar em um input
$(function() {
    var focusedElement;
    $(document).on('focus', 'input', function() {
        if (focusedElement == this) return; //already focused, return so user can now place cursor at specific point in input.
        focusedElement = this;
        setTimeout(function() {
            focusedElement.select();
        }, 100); //select all text in any field on focus for easy re-entry. Delay sightly to allow focus to "stick" before selecting.
    });
});