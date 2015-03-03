<?php
//-------------------------Funções de Turmas-------------------

function inserirTurma($conexao, $dados) {
    $sqlInserir = "insert into turma ("
            . "paTurma, "
            . "chTotal, "
            . "turno, "
            . "idCurso, "
            . "nomeCurso, "
            . "idDisciplina, "
            . "nomeDisciplina "
            . ")"
            . "VALUES('"
            . "{$dados['paTurma']}','"
            . "{$dados['chTotal']}','"
            . "{$dados['turno']}','"
            . "{$dados['idCurso']}','"
            . "{$dados['nomeCurso']}','"
            . "{$dados['idDisciplina']}','"
            . "{$dados ['nomeDisciplina']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a inserao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}

function pesquisarTurmaID($conexao, $id) {
    $sqlBuscar = "SELECT * FROM turma WHERE paTurma = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

function listarNomeTurmaPorId($conexao, $id) {
    $sqlBuscar = "SELECT paTurma FROM turma WHERE paTurma = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

function listagemDeTurmas($conexao) {
    $sqlBuscar = 'SELECT * FROM turma';
    $resultado = mysqli_query($conexao, $sqlBuscar);
    $resRelatorio = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resRelatorio[] = $registro;
    }
    return $resRelatorio;
}