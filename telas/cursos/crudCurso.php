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


function listarCurso($conexao, $dados) {
    $sqlBuscar = "SELECT * FROM curso WHERE nomeCurso LIKE '%" . $dados . "%'";
    $resultado = mysqli_query($conexao, $sqlBuscar);

    $resCurso = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resCurso[] = $registro;
    }
    return $resCurso;
}

function editarCurso($conexao, $dadosCurso) {
    $sqlAtualizar = "UPDATE curso SET "
            . "nomeCurso = '{$dadosCurso['nomeCurso']}', "
            . "chTotal = '{$dadosCurso['chTotal']}'"
            . "WHERE idCurso = {$dadosCurso['idCurso']}";
    if (mysqli_query($conexao, $sqlAtualizar)) {
        
    } else {
        echo mysqli_error($conexao);
    }
}



function listarCursoPorId($conexao, $id) {
    $sqlBuscar = "SELECT * FROM curso WHERE idCurso = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}
