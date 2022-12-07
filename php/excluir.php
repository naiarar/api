<?php
    //Incluir conexão
    include("conexao.php");

    //Obter dados JSON
    $obterDados = file_get_contents("php: //input");

    //Extrair dados JSON
    $extrair = json_decode($obterDados);

    //Separar os dados do JSON
    $idCurso = $extrair->cursos->idCurso;


    //SQL
    $sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
    mysqli_query($conexao, $sql);

  


?>