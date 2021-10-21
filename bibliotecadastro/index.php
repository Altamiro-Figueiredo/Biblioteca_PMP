<?php
define('__ROOT__', '..');
require_once(__ROOT__ . '/layout/cabecalhoCidadao.php');

include 'conexao.php'; 



?>
<section class="pt-5 pb-5" style="text-align:center">

    <div  class="container"  id="borda" >
     <br>
    <form action="cadastrarlivro.php" method="POST" id="frmcadastrolivro.php"  name="frmcadastrolivro.php">

    <h3 style="text-align:left">Ficha de Cadastro Para Livros:</h3>
    <br>
 <div  class="form-row">


                <div class="form-group col-md-6" style="text-align:left">
                    <label for="codigo">Codigo:</label>
                    <input type="text" name="CODIGO" id="CODIGO" class="form-control" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                </div>

            <div class="form-group col-lg-6 col-12" style="text-align:left">
                <label for="titulo">Titulo: </label>
                <input type="text" name="TITULO" id="TITULO" class="form-control" maxlength="100" required >
            </div>
            <div class="form-group col-lg-6 col-12" style="text-align:left">
                <label for="titulo">Autor: </label>
                <input type="text" name="AUTOR" id="AUTOR" class="form-control" maxlength="100" required >
            </div>
                
                <div class="form-group col-lg-6 col-12" style="text-align:left">
                    <label for="categoria">Categoria: </label>&nbsp;<select name="CATEGORIA" id="CATEGORIA" class="form-control" required>
                        <option value="" selected disabled hidden>Selecione uma Categoria...</option>
                        <option>Ação e aventura</option>
						<option>Agricultura</option>
						<option>Antologias</option>
						<option>Arte</option>
						<option>Biografias e memórias</option>
						<option>Ciência Política e Atualidades</option>
						<option>Clássicos</option>
						<option>Computadores e Internet</option>
						<option>Contos</option>
						<option>Culinária, comida, vinho e bebidas espirituosas</option>
						<option>Entretenimento</option>
						<option>Escrita e Publicação</option>
						<option>Faça você mesmo e artesanato</option>
						<option>Fantasia </option>
						<option>Fantasia épica</option>
						<option>Ficção científica</option>
						<option>Filosofia</option>
						<option>Fotografia</option>
						<option>Gestão de negócios</option>
						<option>Guias de carreira</option>
						<option>História</option>
						<option>Horror</option>
						<option>Humor e comédia</option>
						<option>Infantil</option>
						<option>Jogos e LitRPG</option>
						<option>Legislação</option>
						<option>Livros de imagens</option>
						<option>Matemática e Ciências</option>
						<option>Medicina, enfermagem e odontologia</option>
						<option>Mistério</option>
						<option>Peças e roteiros</option>
						<option>Poesia</option>
						<option>Projeto</option>
						<option>Psicologia</option>
						<option>Quadrinhos e romances gráficos</option>
						<option>Questões Sociais e Familiares</option>
						<option>Religião e Espiritualidade</option>
						<option>Romance</option>
						<option>Saúde e Bem-Estar</option>
						<option>Sexo e Relacionamentos</option>
						<option>Sociologia</option>
						<option>Temáticas e motivações</option>
						<option>Thriller e Suspense</option>

                    </select>
                </div>
                
                <div class="form-group col-lg-6 col-12" style="text-align:left"> 
                    <label for="edicao">Edição: </label>
                    <input type="text" name="EDICAO" id="EDICAO" class="form-control" maxlength="2"  size="23" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                <div class="form-group col-lg-6 col-12" style="text-align:left">
                     <label for="editora">Editora: </label>
                     <input type="text" name="EDITORA" id="EDITORA" class="form-control" maxlength="50" size="23" >
                </div>


                <div class="form-group col-lg-6 col-12" style="text-align:left">
                  <label for="ano">Ano: </label>
                  <input type="text" name="ANO" id="ANO" class="form-control" maxlength="4"  size="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                
                <div class="form-group col-md-6" style="text-align:left">
                    <label for="estande" >Estande:</label>
                    <input type="text" name="ESTANDE" id="ESTANDE" class="form-control" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                </div>
                
                <div class="form-group col-md-6" style="text-align:left">
                    <label for="linha">Linha:</label>
                    <input type="text" name="LINHA" id="LINHA" class="form-control" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>

                <div class="form-group col-lg-6 col-12" style="text-align:left">
                     <label for="local">Local: </label>
                     <input type="text" name="LOCALIDADE" id=LOCALIDADE class="form-control" maxlength="100" size="23" required>
                </div>
                
                  <div class="form-row" style="background-color:white;">
                    <div class="col">
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                    </div>
                    <div class="col">
                    <button type="reset" class="btn btn-outline-primary">Limpar</button>
                    </div>
                  </div>
 </form>
</div>

<br><br>
<h3  style="text-align:left">Lista de Livros Cadastrados:</h3>
<div class="table-responsive-md">
<table class="table table-striped" >
<thead>
<div class="container mt-4">
	<div class="row">
    <div class="col-12" >
        <div class="mx-auto order-0 pb-2 pt-2">
            <form class="form" method="POST" action="index.php">
                <div class="input-group">
                    <div>
                   <select name="FILTRO" id="FILTRO" class="form-control" required>
                   <option value="" selected disabled hidden>Selecione um Filtro</option>
                        <option>Listar</option>
                        <option>Código</option>
						<option>Titulo</option>
						<option>Local</option>
                   </select>
                    </div>
                    <input type="search" class="form-control" placeholder=" Informe o Filtro Desejado e Procure Pelo Livro..." aria-label="Recipient's username"  name="BUSCA">
                    <div class="input-group-append">
                        <button  class="btn btn-outline-primary" type="search" ><i class="fas fa-search"></i> 
						Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    
    <tr>
      <th scope="col" style="text-align:center">Titulo</th>
      <th scope="col" style="text-align:center">Autor</th>
      <th scope="col" style="text-align:center">Estande</th>
      <th scope="col" style="text-align:center">Linha</th>
      <th scope="col" style="text-align:center">Local</th>  
      <th scope="col" style="text-align:center" >Operações </th>
    
      
    
    </tr>
  </thead>
    <!-- prencher tabela com dados -->
    <?php
    $filtro = @$_POST["FILTRO"];
    $busca = @$_POST["BUSCA"];
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT * FROM livros ORDER BY ID ";
    $resultado = $pdo->query($sql);

    if($filtro == "Titulo"){
       $sql = "SELECT * FROM livros WHERE TITULO LIKE '%".$busca."%'" ;
       $resultado = $pdo->query($sql);
    }
        if($filtro == "Código"){
        $sql = "SELECT * FROM livros WHERE CODIGO LIKE '%".$busca."%'";
        $resultado = $pdo->query($sql);
    }
        if($filtro == "Local"){
        $sql = "SELECT * FROM livros WHERE LOCALIDADE LIKE '%".$busca."%'";
        $resultado = $pdo->query($sql);
    }

        if($filtro == 'Listar'){
        $sql = "SELECT * FROM livros ORDER BY ID ";
        $resultado = $pdo->query($sql);
    }
    
    

    $buscaLivros = @$resultado;
    
    Conexao::desconectar(); 
    foreach($buscaLivros as $buscalivro){

    
    ?>
     <tbody> 
     <td style="text-align:center" ><?php echo  $buscalivro['TITULO']; ?></td>
     <td style="text-align:center" ><?php echo  $buscalivro['AUTOR']; ?></td>
     <td style="text-align:center" ><?php echo  $buscalivro['ESTANDE']; ?></td>
     <td style="text-align:center" ><?php echo  $buscalivro['LINHA']; ?></td>
     <td style="text-align:center"  ><?php echo  $buscalivro['LOCALIDADE']; ?></td>

     <td style="text-align:center"><div  >
    
     <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal<?php echo $buscalivro['ID']; ?>" >
     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
     <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
     <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
     </svg></button>
    
     <button  type="button" class="btn btn-outline-warning "  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $buscalivro['ID']; ?>" data-whatevercodigo="<?php echo $buscalivro['CODIGO']; ?>" data-whatevertitulo="<?php echo $buscalivro['TITULO']; ?>" data-whateverautor="<?php echo $buscalivro['AUTOR']; ?>" data-whatevercategoria="<?php echo $buscalivro['CATEGORIA']; ?>" data-whateverlinha="<?php echo $buscalivro['LINHA']; ?>" data-whateverestande="<?php echo $buscalivro['ESTANDE']; ?>" data-whatevereditora="<?php echo $buscalivro['EDITORA']; ?>" data-whateveredicao="<?php echo $buscalivro['EDICAO']; ?>" data-whateverano="<?php echo $buscalivro['ANO']; ?>" data-whateverlocalidade="<?php echo $buscalivro['LOCALIDADE']; ?>">
     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
     <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
     <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
     </svg></button> 
     
     <form action="removerlivro.php" method="POST" class="btn p-0">
     <input type="hidden" name="ID" id="ID" value="<?php echo $buscalivro['ID']; ?>">  
     <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem Certeza Que Deseja Remover o Livro Selecionado?')"> 
     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
     <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
     <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
     </svg></button></form></div></td>

     
     <!-- Visualizar informações do livro em modal -->
                     <form>
                        <div class="modal fade" id="myModal<?php echo $buscalivro['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title text-center" id="myModalLabel">Visualizar Detalhes:</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           </div>
                                <div class="modal-body">
                                  <div class="form-row">

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Codigo:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['CODIGO']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Titulo:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['TITULO']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Autor:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['AUTOR']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Categoria:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['CATEGORIA']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Edição:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['EDICAO']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Editora:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['EDITORA']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Ano:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['ANO']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Estande:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['ESTANDE']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Linha:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['LINHA']; ?>" >
                                           </div>

                                           <div class="form-group col-md-6" style="text-align:left">
                                           <label>Local:</label>
                                           <input type="text" class="form-control" maxlength="10" required disabled="disabled" value ="<?php echo $buscalivro['LOCALIDADE']; ?>" >
                                           </div>
                                           </div>
                                           <div class="modal-footer">
                                             <button type="button" class="btn btn-outline-danger " data-dismiss="modal">Sair</button>
                                           </div>
                                    </div>
                                 </div>
                              </div>
                          </div>
                       </div>
                   </form>
                                
                           
     </tbody>


    <?php } ?>
   
    
  
</table> 
</div>
<br>

<!-- Editar dados com modal -->
<form action="editarlivro.php" method="POST" class="btn p-0">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" >Editar Livro:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      
 <div  class="form-row">
     
     <input type="hidden" name="ID" id="ID"> 
     
            <div class="form-group col-md-6" style="text-align:left">
                <label for="codigo">Codigo:</label>
                <input type="text" name="CODIGO" id="CODIGO" class="form-control" maxlength="10" required disabled="disabled" >
            </div>

            <div class="form-group col-lg-6 col-12" style="text-align:left">
                <label for="titulo">Titulo: </label>
                <input type="text" name="TITULO" id="TITULO" class="form-control" maxlength="100" required >
            </div>
            <div class="form-group col-lg-6 col-12" style="text-align:left">
                <label for="titulo">Autor: </label>
                <input type="text" name="AUTOR" id="AUTOR" class="form-control" maxlength="100" required >
            </div>
                
                <div class="form-group col-lg-6 col-12" style="text-align:left">
                    <label for="categoria">Categoria: </label>&nbsp;<select name="CATEGORIA" id="CATEGORIA" class="form-control" required>
                        <option value="" selected disabled hidden>Selecione uma Categoria...</option>
                        <option>Ação e aventura</option>
						<option>Agricultura</option>
						<option>Antologias</option>
						<option>Arte</option>
						<option>Biografias e memórias</option>
						<option>Ciência Política e Atualidades</option>
						<option>Clássicos</option>
						<option>Computadores e Internet</option>
						<option>Contos</option>
						<option>Culinária, comida, vinho e bebidas espirituosas</option>
						<option>Entretenimento</option>
						<option>Escrita e Publicação</option>
						<option>Faça você mesmo e artesanato</option>
						<option>Fantasia </option>
						<option>Fantasia épica</option>
						<option>Ficção científica</option>
						<option>Filosofia</option>
						<option>Fotografia</option>
						<option>Gestão de negócios</option>
						<option>Guias de carreira</option>
						<option>História</option>
						<option>Horror</option>
						<option>Humor e comédia</option>
						<option>Infantil</option>
						<option>Jogos e LitRPG</option>
						<option>Legislação</option>
						<option>Livros de imagens</option>
						<option>Matemática e Ciências</option>
						<option>Medicina, enfermagem e odontologia</option>
						<option>Mistério</option>
						<option>Peças e roteiros</option>
						<option>Poesia</option>
						<option>Projeto</option>
						<option>Psicologia</option>
						<option>Quadrinhos e romances gráficos</option>
						<option>Questões Sociais e Familiares</option>
						<option>Religião e Espiritualidade</option>
						<option>Romance</option>
						<option>Saúde e Bem-Estar</option>
						<option>Sexo e Relacionamentos</option>
						<option>Sociologia</option>
						<option>Temáticas e motivações</option>
						<option>Thriller e Suspense</option>

                    </select>
                </div>
                
                <div class="form-group col-lg-6 col-12" style="text-align:left"> 
                    <label for="edicao">Edição: </label>
                    <input type="text" name="EDICAO" id="EDICAO" class="form-control" maxlength="2"  size="23" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                </div>
                <div class="form-group col-lg-6 col-12" style="text-align:left">
                     <label for="editora">Editora: </label>
                     <input type="text" name="EDITORA" id="EDITORA" class="form-control" maxlength="50" size="23" >
                </div>


                <div class="form-group col-lg-6 col-12" style="text-align:left">
                  <label for="ano">Ano: </label>
                  <input type="text" name="ANO" id="ANO" class="form-control" maxlength="4"  size="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                </div>

                <div class="form-group col-md-6" style="text-align:left">
                    <label for="estande" >Estande:</label>
                    <input type="text" name="ESTANDE" id="ESTANDE" class="form-control" maxlength="2" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                </div>
                
                <div class="form-group col-md-6" style="text-align:left">
                    <label for="linha">Linha:</label>
                    <input type="text" name="LINHA" id="LINHA" class="form-control" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
                </div>


                <div class="form-group col-lg-6 col-12" style="text-align:left">
                     <label for="local">Local: </label>
                     <input type="text" name="LOCALIDADE" id=LOCALIDADE class="form-control" maxlength="100" size="23" required>
                </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger " data-dismiss="modal">Sair</button>
            <button type="submit" class="btn btn-outline-primary">Editar</button>
        </div>
    </div>
</div>
</div>
</form>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/personalizado.js"></script>
 

    <script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  var recipientcodigo = button.data('whatevercodigo');
  var recipienttitulo = button.data('whatevertitulo');
  var recipientautor = button.data('whateverautor');
  var recipientcategoria = button.data('whatevercategoria');
  var recipientlinha = button.data('whateverlinha');
  var recipientestande = button.data('whateverestande');
  var recipienteditora = button.data('whatevereditora');
  var recipientedicao = button.data('whateveredicao');
  var recipientano = button.data('whateverano');
  var recipientlocalidade = button.data('whateverlocalidade');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
  modal.find('#ID').val(recipient)
  modal.find('#CODIGO').val(recipientcodigo)
  modal.find('#TITULO').val(recipienttitulo)
  modal.find('#AUTOR').val(recipientautor)
  modal.find('#CATEGORIA').val(recipientcategoria)
  modal.find('#LINHA').val(recipientlinha)
  modal.find('#ESTANDE').val(recipientestande)
  modal.find('#EDITORA').val(recipienteditora)
  modal.find('#EDICAO').val(recipientedicao)
  modal.find('#ANO').val(recipientano)
  modal.find('#LOCALIDADE').val(recipientlocalidade)
})
</script>

   
</section>


<style>
    #borda{
        
     border-width: 2px;
     border-color: black;
     border-style: solid;
     display: inline-block;
     border-radius: 20px;

}

  table {
  table-layout: auto;
  width: 200px;
}
th, td {
  
  width: 100px;
  overflow: hidden;
  word-break: break-word
}


</style>

<?php

//require_once(__ROOT__ . '/layout/rodape.php');

?>