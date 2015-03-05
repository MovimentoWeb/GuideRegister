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

//--------------------Funções  PROFESSOR -------------------

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

//--------------------Funções  DISCIPLINAS -------------------

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

//--------------------Funções  CURSOS -------------------



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

function editarRelatorio($conexao, $projeto) {
    $sqlAtualizar = "UPDATE Relatorio SET"
            . "nomerelatorio = '{$projeto['nomerelatorio']},"
            . "tiporelatorio ='{$projeto['tiporelatorio']}, "
            . "WHERE idRelatorio = '{$projeto['idRelatorio ']},";
    mysqli_query($conexao, $sqlAtualizar);
}

// --------------- Usuarios ----------------------

function listarNomeUsuarioPorId($conexao, $id) {
    $sqlBuscar = "SELECT nomeUsuario FROM usuarios WHERE idUsuario = " . $id;
    $resultado = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($resultado);
}

//---------------Avisos e Justificativas------------------

function inserirAvisos($conexao, $dados) {
    $sqlInserir = "insert into aviso ("
            . "Selecione, "
            . "Professor2, "
            . "Professor3, "
            . "Professor4, "
            . "Gerência, "
            . "Cooredenação, "
            . "Secretaria, "
            . "Professor"
            . ")"
            . "VALUES('"
            . "{$dados['Selecione']}','"
            . "{$dados['Professor2']}','"
            . "{$dados['Professor3']}','"
            . "{$dados['Professor4']}','"
            . "{$dados['Gerência']}','"
            . "{$dados['Cooredenação']}','"
            . "{$dados['Secretaria']}','"
            . "{$dados ['Professor']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a inserao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}