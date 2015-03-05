<?php

//--------------------Funções  CURSOS -------------------

function inserirCurso($conexao, $dados) {
    $sqlInserir = "insert into curso ("
            . "nomeCurso, "
            . "chTotal "
            . ")"
            . "VALUES('"
            . "{$dados['nomeCurso']}','"
            . "{$dados ['chTotal']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a insercao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}
