<?php

//--------------------Funções  ALUNO -------------------

function inserirAluno($conexao, $dados) {
    $sqlInserir = "insert into aluno ("
            . "nomeAluno, "
            . "matricula, "
            . "dtNascimento, "
            . "cpf, "
            . "rg"
            . ")"
            . "VALUES('"
            . "{$dados['nomeAluno']}','"
            . "{$dados['matricula']}','"
            . "{$dados['dtNascimento']}','"
            . "{$dados['cpf']}','"
            . "{$dados ['rg']}')";
    mysqli_query($conexao, $sqlInserir);
    unset($_POST);
}

function listarAluno($conexao, $dadosAluno) {
    $sqlBuscar = "SELECT * FROM aluno WHERE nomeAluno LIKE '%" . $dadosAluno . "%'";
    $resultado = mysqli_query($conexao, $sqlBuscar);

    $resAluno = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resAluno[] = $registro;
    }
    return $resAluno;
}

function listarAlunoPorId($conexao, $id) {
    $sqlBuscar = "SELECT * FROM aluno WHERE idAluno = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

function editarAluno($conexao, $dadosAluno) {
    $sqlAtualizar = "UPDATE aluno SET "
            . "nomeAluno = '{$dadosAluno['nomeAluno']}', "
            . "matricula = '{$dadosAluno['matricula']}', "
            . "dtNascimento = '{$dadosAluno['dtNascimento']}', "
            . "rg = '{$dadosAluno['rg']}', "
            . "cpf = '{$dadosAluno['cpf']}'"
            . "WHERE idAluno = {$dadosAluno['idAluno']}";
    if (mysqli_query($conexao, $sqlAtualizar)) {
        
    } else {
        echo mysqli_error($conexao);
    }
}

function desativarAluno($conexao, $id) {
    $sqlAtualizar = "UPDATE aluno SET "
            . "ativo = 0 "
            . "WHERE idAluno = " . $id;
    if (mysqli_query($conexao, $sqlAtualizar)) {
        
    } else {
        echo mysqli_error($conexao);
    }
}

function listarNomeUsuarioPorId($conexao, $id) {
    $sqlBuscar = "SELECT nomeUsuario FROM usuarios WHERE idUsuario = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}