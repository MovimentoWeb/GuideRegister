<?php

function inserirProfessor($conexao, $dados) {
    $sqlInserir = "insert into usuarios ("
            . "nomeUsuario, "
            . "dtNascimento, "
            . "rg, "
            . "cpf, "
            . "dtAdmissao"
            . ")"
            . "VALUES('"
            . "{$dados['nomeUsuario']}','"
            . "{$dados['dtNascimento']}','"
            . "{$dados['rg']}','"
            . "{$dados['cpf']}','"
            . "{$dados ['dtAdmissao']}')";
    mysqli_query($conexao, $sqlInserir);
    unset($_POST);
}

function listarProfessorPorId($conexao, $id) {
    $sqlBuscar = "SELECT * FROM usuarios WHERE idUsuario = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

function listarProfessor($conexao, $dadosProfessor) {
    $sqlBuscar = "SELECT * FROM usuarios WHERE nomeUsuario LIKE '%" . $dadosProfessor . "%'";
    $resultado = mysqli_query($conexao, $sqlBuscar);
    $resProfessor = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resProfessor[] = $registro;
    }
    return $resProfessor;
}

function editarProfessor($conexao, $dadosProfessor) {
    $sqlAtualizar = "UPDATE usuarios SET "
            . "nomeUsuario = '{$dadosProfessor['nomeUsuario']}', "
            . "dtNascimento = '{$dadosProfessor['dtNascimento']}', "
            . "rg = '{$dadosProfessor['rg']}', "
            . "cpf = '{$dadosProfessor['cpf']}', "
            . "dtAdmissao = '{$dadosProfessor['dtAdmissao']}'"
            . "WHERE idUsuario = {$dadosProfessor['idUsuario']}";
    if (mysqli_query($conexao, $sqlAtualizar)) {
        
    } else {
        echo mysqli_error($conexao);
    }
}

function desativarProfessor($conexao, $id) {
    $sqlAtualizar = "UPDATE usuarios SET "
            . "ativo = 0 "
            . "WHERE idUsuario = " . $id;
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

