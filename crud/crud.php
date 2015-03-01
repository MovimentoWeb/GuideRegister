<?php

include_once 'crud/conexao.php';

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
    $sqlAtualizar = "UPdate aluno SET "
            . "nomeAluno = '{$dadosAluno['nomeAluno']}', "
            . "nomeAluno = '{$dadosAluno['matricula']}', "
            . "dtNascimento = '{$dadosAluno['dtNascimento']}', "
            . "rg = '{$dadosAluno['rg']}', "
            . "cpf = '{$dadosAluno['cpf']}', "
            . "turno = '{$dadosAluno['turno']}', "
            . "curso = '{$dadosAluno['curso']}', "
            . "WHERE idAluno = {$dadosAluno['idAluno']}";
}

//--------------------Funções  PROFESSOR -------------------

function inserirProfessor($conexao, $dados) {
    $sqlInserir = "insert into professor ("
            . "nomeProfessor, "
            . "dtNascimento, "
            . "rg, "
            . "cpf, "
            . "dtAdmissao"
            . ")"
            . "VALUES('"
            . "{$dados['nomeProfessor']}','"
            . "{$dados['dtNascimento']}','"
            . "{$dados['rg']}','"
            . "{$dados['cpf']}','"
            . "{$dados ['dtAdmissao']}')";
    mysqli_query($conexao, $sqlInserir);
    unset($_POST);
}

function listarProfessorPorId($conexao, $dadosProfessor) {
    $sqlBuscar = "SELECT * FROM professor WHERE idProfessor = {$dadosProfessor['idProfessor']}";
}

function listarProfessor($conexao, $dadosProfessor) {
    $sqlBuscar = "SELECT * FROM professor WHERE nomeProfessor LIKE '%" . $dadosProfessor . "%'";
    $resultado = mysqli_query($conexao, $sqlBuscar);
    $resProfessor = array();
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $resProfessor[] = $registro;
    }
    return $resProfessor;
}

//--------------------Funções  TURMA -------------------

function pesquisarTurmaID($conexao, $id) {
    $sqlBuscar = "SELECT * FROM turma WHERE PAturma = " . $id;
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


function listarAviso($conexao, $id) {
    $sqlBuscar = 'SELECT * FROM aviso WHERE id = ';
    $resultado = msyqli_query($conexao, $sqlBuscar);
    $projeto = array();
    while ($projeto = mysqli_fetch_assoc($resultado)) {
        $projeto[] = $projeto;
    }
    return $projeto;
}

function inserirAviso($conexao, $projeto) {
    $sqlInserir = "insert into aviso("
            . "aviso)"
            . "VALUES ('{$projeto['aviso']}

    ')";
    mysqli_query($conexao, $sqlInserir);
}

function editarAviso($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Aviso SET "
            . "Aviso = '{$projeto['Aviso']},"
            . "WHERE idAviso ='{$projeto['idAviso']}

    , ";
    mysqli_query($conexao, $sqlAtualizar
    );
}

function editarProfessor($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Professor SET"
            . "nome = '{$projeto['nome']},"
            . "telefone = '{$projeto['telefone']}

    , "
            . "endereco  = '{$projeto['endereco']},"
            . "rg ='{$projeto['rg']}

    , "
            . " 

     cpf 

      =  

     '{$projeto['cpf']},"
            . "WHERE idProfessor ='{$projeto['idProfessor']}, ";
    mysqli_query($conexao, $sqlAtualizar
    );
}

function editarRelatorio($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Relatorio SET"
            . "nomerelatorio = '{$projeto['nomerelatorio']},"
            . "tiporelatorio ='{$projeto['tiporelatorio']}, "
            . "WHERE idRelatorio = '{$projeto['idRelatorio ']},";
    mysqli_query($conexao, $sqlAtualizar);
}
