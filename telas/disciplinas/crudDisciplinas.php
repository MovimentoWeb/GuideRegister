<?php

function inserirDisciplina($conexao, $dados) {
    $sqlInserir = "insert into disciplina ("
            . "nomeDisciplina, "
            . "codDisciplina, "
            . "ch, "
            . "idProfessor, "
            . "nomeProfessor, "
            . "idCurso, "
            . "nomeCurso, "
            . "idTurma, "
            . "paTurma"
            . ")"
            . "VALUES('"
            . "{$dados['nomeDisciplina']}','"
            . "{$dados['codDisciplina']}','"
            . "{$dados['ch']}','"
            . "{$dados['idProfessor']}','"
            . "{$dados['nomeProfessor']}','"
            . "{$dados['idCurso']}','"
            . "{$dados['nomeCurso']}','"
            . "{$dados['idTurma']}','"
            . "{$dados ['paTurma']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a inserao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}

function listarDisciplina($conexao, $dadosDiscip) {
    $sqlBuscar = "SELECT * FROM disciplina WHERE codDisciplina LIKE '%" . $dadosDiscip . "%'";
    $resultado = mysqli_query($conexao, $sqlBuscar);

    $resDisciplina = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resDisciplina[] = $registro;
    }
    return $resDisciplina;
}

function listarDisciplinaPorId($conexao, $id) {
    $sqlBuscar = "SELECT * FROM disciplina WHERE idDisciplina = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

function editarDisciplina($conexao, $dadosDiscip) {
    $sqlAtualizar = "UPDATE disciplina SET "
            . "nomeDisciplina = '{$dadosDiscip['nomeDisciplina']}', "
            . "codDisciplina = '{$dadosDiscip['codDisciplina']}', "
            . "ch = '{$dadosDiscip['ch']}', "
            . "idProfessor = '{$dadosDiscip['idProfessor']}', "
            . "nomeProfessor = '{$dadosDiscip['nomeProfessor']}'"
            . "WHERE idDisciplina = {$dadosDiscip['idDisciplina']}";
    if (mysqli_query($conexao, $sqlAtualizar)) {
        
    } else {
        echo mysqli_error($conexao);
    }
}