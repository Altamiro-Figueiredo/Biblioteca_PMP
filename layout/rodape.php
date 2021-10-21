<footer class="corPrincipal text-white pt-4 pb-4">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm"></div>
            <div class="col-sm-4 pt-1 text-center">
                <p class="font-weight-bold h6 m-0">
                    Prefeitura Municipal de Palmital-SP
                </p>
                <p class="pt-2 m-0">
                    Rua Joaquim Nascimento Lourenço, 119 - Centro - Palmital-SP
                </p>
                <p class="pt-2 m-0">
                    CNPJ: 44.543.981/0001-99 - CEP: 19.970-074
                </p>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</footer>

<script>
    // código usado para as tootips aparecerem
    $(function() {
        $('[data-toggle="tooltip"]').tooltip({
            html: true
        });
    });

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
</script>

<script src="<?= __ROOT__ ?>/layout/js/mascaras.js"></script>

</body>

</html>