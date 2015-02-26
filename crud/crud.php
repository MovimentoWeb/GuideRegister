<?php

include_once 'crud/conecao.php';

function listarAluno($conexao, $id) {
    $sqlBuscar = 'SELECT * FROM aluno WHERE id =';
    $resultado = msyqli_query($conexao, $sqlBuscar);
    $projeto = array();
    while ($projeto = mysqli_fetch_assoc($resultado)) {
        $projeto[] = $projeto;
    }
    return $projeto;
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

function listarProfessor($conexao, $id) {
    $sqlBuscar = 'SELECT * FROM professor WHERE id = ';
    $resultado = msyqli_query($conexao, $sqlBuscar);
    $projeto = array();
    while ($projeto = mysqli_fetch_assoc($resultado)) {
        $projeto[] = $projeto;
    }
    return $projeto;
}

function listarRelatorio($conexao, $id) {
    $sqlBuscar = 'SELECT * FROM relatorio WHERE id = ';
    $resultado = msyqli_query($conexao, $sqlBuscar);
    $projeto = array();
    while ($projeto = mysqli_fetch_assoc($resultado)) {
        $projeto[] = $projeto;
    }
    return $projeto;
}

function listarTurma($conexao, $id) {
    $sqlBuscar = 'SELECT * FROM turma WHERE id =';
    $resultado = msyqli_query($conexao, $sqlBuscar);
    $projeto = array();
    while ($projeto = mysqli_fetch_assoc($resultado)) {
        $projeto[] = $projeto;
    }
    return $projeto;
}

function inserirAluno($conexao, $dados) {
    $sqlInserir = "insert into aluno (nomeAluno, matricula, dtNascimento, cpf, rg)"
            . "VALUES('{$dados['nomeAluno']}','{$dados['matricula']}','{$dados['dtNascimento']}','{$dados['cpf']}','{$dados ['rg']}')";
    mysqli_query($conexao, $sqlInserir);
}

function inserirAviso($conexao, $projeto) {
    $sqlInserir = "insert into aviso("
            . "aviso)"
            . "VALUES ('{$projeto['aviso']}')";
    mysqli_query($conexao, $sqlInserir);
}

function inserirProfessor($conexao, $projeto) {
    $sqlInserir = "INSERT INTO professor ("
            . "nome, telefone, endereco, rg, cpf) "
            . "VALUES('{$projeto['nome']}','{$projeto['telefone']}','"
            . "{$projeto['endereco']}','{$projeto['rg']}','"
            . "{$projeto['cpf']}')";
    mysqli_query($conexao, $sqlInserir);
}

function inserirRelatorio($conexao, $projeto) {
    $sqlInserir = "insert into relatorio ("
            . "nomerelatorio,tiporelatrio)"
            . "VALUES('{$projeto['nomerelatorio']}','{$projeto['tiporelatorio']}','";
    mysqli_query($conexao, $sqlInserir);
}

function inserirTurma($conexao, $projeto) {
    $sqlInserir = "insert into turma("
            . "nomerelatorio,tiporelatorio)"
            . "VALUES('{$projeto['nomerelatorio']}','{$projeto['tiporelatorio']}','";
    mysqli_query($conexao, $sqlInserir);
}

function editarAluno($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Aluno SET"
            . "matricula = '{$projeto['matricula']},"
            . "nome ='{$projeto['nome']},"
            . "telefone =' {$projeto['telefone']},"
            . "endereco =' {$projeto['endereco']},"
            . "cpf = '{$projeto['cpf']},"
            . "rg ='{$projeto['rg']},"
            . "WHERE idAluno ='{$projeto['idAluno']},";
    mysqli_query($conexao, $sqlAtualizar);
}

function editarAviso($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Aviso SET "
            . "Aviso = '{$projeto['Aviso']},"
            . "WHERE idAviso ='{$projeto['idAviso']},";
    mysqli_query($conexao, $sqlAtualizar);
}

function editarProfessor($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Professor SET"
            . "nome = '{$projeto['nome']},"
            . "telefone = '{$projeto['telefone']},"
            . "endereco = '{$projeto['endereco']},"
            . "rg ='{$projeto['rg']},"
            . "cpf ='{$projeto['cpf']},"
            . "WHERE idProfessor ='{$projeto['idProfessor']},";
    mysqli_query($conexao, $sqlAtualizar);
}

function editarRelatorio($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Relatorio SET"
            . "nomerelatorio ='{$projeto['nomerelatorio']},"
            . "tiporelatorio ='{$projeto['tiporelatorio']},"
            . "WHERE idRelatorio = '{$projeto['idRelatorio']},";
    mysqli_query($conexao, $sqlAtualizar);
}

function editarTurma($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Turma SET"
            . "idaluno ='{$projeto['idaluno']},"
            . "idprofessor ='{$projeto['idprofessor']},"
            . "WHERE idTurma ='{$projeto['idTurma']},";
    mysqli_query($conexao, $sqlAtualizar);
}

?>
