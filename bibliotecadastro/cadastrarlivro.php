<?php
include 'conexao.php'; 

function alert($msg) {
     echo "<script type='text/javascript'>alert('$msg');</script>";
 }
 
//recuperar os valores oriundos do formulário

$Livro_Codigo = trim($_POST['CODIGO']);
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
     $sql = "INSERT INTO livros (CODIGO, TITULO, AUTOR, CATEGORIA, EDICAO, EDITORA, ANO, LINHA, ESTANDE, LOCALIDADE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     $query = $pdo->prepare($sql); 
     $query->execute (array($Livro_Codigo, $Livro_Titulo, $Livro_Autor, $Livro_Categoria, $Livro_Edicao, $Livro_Editora, $Livro_Ano, $Livro_Linha, $Livro_Estande, $Livro_Localidade));
     Conexao::desconectar(); 
     echo PDO::ERRMODE_EXCEPTION;
      
   
     header("location:index.php"); 
     

    
?>
