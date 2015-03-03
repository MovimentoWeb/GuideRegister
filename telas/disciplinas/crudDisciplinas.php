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
            . "PAturma"
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
            . "{$dados ['PAturma']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a inserao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}