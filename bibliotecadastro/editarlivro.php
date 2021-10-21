<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Livro_ID = trim($_POST['ID']);
   $Livro_Titulo = trim($_POST['TITULO']); 
   $Livro_Autor = trim($_POST['AUTOR']); 
   $Livro_Categoria = trim($_POST['CATEGORIA']);
   $Livro_Edicao= trim($_POST['EDICAO']);
   $Livro_Editora = trim($_POST['EDITORA']);
   $Livro_Ano = trim($_POST['ANO']);
   $Livro_Linha= trim($_POST['LINHA']);
   $Livro_Estande = trim($_POST['ESTANDE']);
   $Livro_Localidade = trim($_POST['LOCALIDADE']);
   
   
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE livros SET TITULO=?, AUTOR=?, CATEGORIA=?,
         EDICAO=?, EDITORA=?, ANO=?, LINHA=?, ESTANDE=?, LOCALIDADE=? WHERE ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array( $Livro_Titulo, $Livro_Autor, $Livro_Categoria, $Livro_Edicao, $Livro_Editora, $Livro_Ano, $Livro_Linha, $Livro_Estande, $Livro_Localidade, $Livro_ID));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
   

   header("location:index.php"); 

?> 