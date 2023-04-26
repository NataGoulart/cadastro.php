<?php
    include("conecta.php")
    $matricula =$_GET["M"]


    $comando = $pdo->prepare("DELETE FROM alunos 
    ?WHERE=$matricula");
    
    $resultado = $comando->execute();
    header("Location: cadastro.html");
?>