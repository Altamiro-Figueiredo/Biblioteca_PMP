let nOpcao = 1; // número de opções selecionadas pelo usuário

// tipoExperiencia = se é curso ou profissional (área profissional)
function adicionaOpcao(tipoExperiencia) {
    event.preventDefault();
    let id = document.getElementById(tipoExperiencia);
    // console.log(id);

    if (tipoExperiencia == 'curso') {
        id.insertAdjacentHTML("beforeend", adicionaDivCurso(nOpcao, tipoExperiencia));
    }
    else if (tipoExperiencia == 'profissao') {
        id.insertAdjacentHTML("beforeend", adicionaDivProfissao(nOpcao, tipoExperiencia));
    }

    // tooltip para o icone de informação
    $(function () { $(".informacao").tooltip(); });

    nOpcao++;
}

function adicionaDivCurso(valor, tipoExperiencia) {
    return `
            <div id="${valor}">
                <div class="col-md-12 bg-white mt-2 p-3 ml-1">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="curso">Nome do curso*:</label>
                            <input type="text" name="curso${valor}" class="form-control" list="curso${valor}" autocomplete="off">

                            <datalist id="curso${valor}">
                                <option>Nome 1</option>
                                <option>Nome 2</option>
                                <option>Nome 3</option>
                                <option>Nome 4</option>
                                <option>Nome 5</option>
                            </datalist>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="instituicao">Instituição*:</label>
                            <input type="text" name="instituicao${valor}" class="form-control" list="instituicao${valor}" autocomplete="off">

                            <datalist id="instituicao${valor}">
                                <option>Nome 2</option>
                                <option>Nome 2</option>
                                <option>Nome 3</option>
                                <option>Nome 4</option>
                                <option>Nome 5</option>
                            </datalist>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="instituicao">Nível do curso*:</label>
                            <select name="nivel${valor}" class="form-control">
                                <option value="id">Nome 2</option>
                                <option value="id">Nome 2</option>
                                <option value="id">Nome 3</option>
                                <option value="id">Nome 4</option>
                                <option value="id">Nome 5</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="instituicao">Cidade*:</label>
                            <input type="text" name="cidade${valor}" class="form-control" list="cidade${valor}" autocomplete="off">

                            <datalist id="cidade${valor}">
                                <option>Nome 2</option>
                                <option>Nome 2</option>
                                <option>Nome 3</option>
                                <option>Nome 4</option>
                                <option>Nome 5</option>
                            </datalist>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="area">Área*:</label>
                            <input type="text" name="area${valor}" class="form-control" list="area${valor}" autocomplete="off">

                            <datalist id="area${valor}">
                                <option>Nome 1</option>
                                <option>Nome 2</option>
                                <option>Nome 3</option>
                                <option>Nome 4</option>
                                <option>Nome 5</option>
                            </datalist>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inicio">Data de início*:</label>
                            <input type="date" name="dataInicio${valor}" class="form-control" id="inicio">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="termino">
                                Data de término*:
                                <i class="far fa-question-circle informacao" data-toggle="tooltip" data-placement="top" title="Também pode ser a estimativa para quando irá acabar."></i>
                            </label>
                            <input type="date" name="dataFim${valor}" class="form-control" id="termino">
                        </div>
                        <div class="form-group col-md-8 mt-auto d-flex align-items-end flex-column bd-highlight">
                            <button type="button" class="btn btn-outline-danger" onclick="remover(${valor},'${tipoExperiencia}')">
                                <i class="fas fa-trash-alt"></i> Excluir curso
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
}

function adicionaDivProfissao(valor, tipoExperiencia) {
    return `
        <div id="${valor}">
            <div class="col-md-12 bg-white mt-2 p-3 ml-1">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="curso">Função*:</label>
                        <input type="text" name="funcao${valor}" class="form-control" list="curso${valor}" autocomplete="off">

                        <datalist id="curso${valor}">
                            <option>Nome 1</option>
                            <option>Nome 2</option>
                            <option>Nome 3</option>
                            <option>Nome 4</option>
                            <option>Nome 5</option>
                        </datalist>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="instituicao">Empresa*:</label>
                        <input type="text" name="empresa${valor}" class="form-control" list="empresa${valor}" autocomplete="off">

                        <datalist id="instituicao${valor}">
                            <option>Nome 2</option>
                            <option>Nome 2</option>
                            <option>Nome 3</option>
                            <option>Nome 4</option>
                            <option>Nome 5</option>
                        </datalist>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="instituicao">Área*:</label>
                        <select name="area${valor}" class="form-control">
                            <option value="id">Nome 2</option>
                            <option value="id">Nome 2</option>
                            <option value="id">Nome 3</option>
                            <option value="id">Nome 4</option>
                            <option value="id">Nome 5</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="instituicao">Cidade*:</label>
                        <input type="text" name="cidade${valor}" class="form-control" list="cidade${valor}" autocomplete="off">

                        <datalist id="cidade${valor}">
                            <option>Nome 2</option>
                            <option>Nome 2</option>
                            <option>Nome 3</option>
                            <option>Nome 4</option>
                            <option>Nome 5</option>
                        </datalist>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inicio">Data de início*:</label>
                        <input type="month" name="dataInicio${valor}" class="form-control" id="inicio">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="termino">
                            Data de término*:
                            <i class="far fa-question-circle informacao" data-toggle="tooltip" data-placement="top" title="Caso ainda esteja executando essa função, não é necessário informar esse valor."></i>
                        </label>
                        <input type="month" name="dataFim${valor}" class="form-control" id="termino">
                    </div>
                    <div class="form-group col-md-12 mt-auto d-flex align-items-end flex-column bd-highlight">
                        <button type="button" class="btn btn-outline-danger ml-2" onclick="remover(${valor},'${tipoExperiencia}')">
                            <i class="fas fa-trash-alt"></i> Excluir experiência
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        `;
}

function remover(id, tipoExperiencia) {
    // console.log(tipoExperiencia);
    let ligacao = 'esse'; // valor e ligação 'esse' ou 'essa'
    if (tipoExperiencia == 'profissao') {
        ligacao = 'essa';
    }

    let result = confirm(`Deseja realmente excluir ${ligacao} ${tipoExperiencia}?`);
    if (result) {
        document.getElementById(id).remove();
    }
}