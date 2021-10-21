<?php  
   include 'conexao.php'; 

   //recuperar os valores oriundos do formulário
   $Livro_ID = trim($_POST['ID']); 
   
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM livros WHERE ID=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($Livro_ID));
        Conexao::desconectar(); 
        //echo PDO::ERRMODE_EXCEPTION; 
    

     header("location:index.php"); 

?> 