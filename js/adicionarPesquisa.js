let nPesquisa = 1; // número de opções selecionadas pelo usuário

// tipoExperiencia = se é curso ou profissional (área profissional)
function adicionaPesquisa() {
    event.preventDefault();
    let id = document.getElementById('novaPesquisa');
    // console.log(id);

    id.insertAdjacentHTML("beforeend", adicionaDivPesquisa(nPesquisa));

    nPesquisa++;
}

function adicionaDivPesquisa(valor) {
    return `
        <div id="${valor}">
            <div class="col-md-12 p-0">
                <div class="row mt-1 mt-md-0 mt-4">
                    <div class="form-group col-md-5">
                        <label for="texto">Pesquisar ${valor}</label>
                        <input type="text" name="pesquisa${valor}" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="texto">Tipo pesquisa ${valor}</label>
                        <input type="text" name="tipoPesquisa${valor}" class="form-control" autocomplete="off" list="tipoPesquisa${valor}">

                        <datalist id="tipoPesquisa${valor}">
                            <option>Pesquisa 1</option>
                            <option>Pesquisa 2</option>
                            <option>Pesquisa 3</option>
                            <option>Pesquisa 4</option>
                            <option>Pesquisa 5</option>
                        </datalist>
                    </div>

                    <div class="form-group d-flex align-items-end">
                        <button type="button" class="form-control btn-outline-danger ml-3" onclick="remover('${valor}')">
                            <i class="fas fa-trash"></i>
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
        </div>
        `;
}

function remover(id) {
    let result = confirm(`Deseja realmente não pesquisar esse valor?`);
    console.log(result);
    if (result) {
        document.getElementById(id).remove();
    }
}