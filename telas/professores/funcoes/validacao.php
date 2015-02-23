<?php

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

//Validação  NOME
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $projeto['nome'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = 'O nome inválido!';
    }

//Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $projeto['dtNascimento'] = $_POST['dtNascimento'];
    } else {
        $temErros = true;
        $errosValidacao['dtNascimento'] = 'Data de nascimento deve seguir esse formato 00/00/0000';
    }

//Validação rg
    if (isset($_POST['rg']) && strlen($_POST['rg']) == 7) {
        $projeto['rg'] = $_POST['rg'];
    } else {
        $temErros = TRUE;
        $errosValidacao['rg'] = 'RG inválido!';
    }

//Validação cpf
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) == 11) {
        $projeto['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = 'CPF inválido!';
    }

//Validação Select Turno
    if (isset($_POST['selectTurno']) && strlen($_POST['selectTurno']) == 11) {
        $projeto['selectTurno'] = $_POST['selectTurno'];
    } else {
        $temErros = TRUE;
        $errosValidacao['selectTurno'] = 'Selecione um Turno!';
    }

//Validação Select Curso
    if (isset($_POST['selectCurso']) && strlen($_POST['selectCurso']) == 11) {
        $projeto['selectCurso'] = $_POST['selectCurso'];
    } else {
        $temErros = TRUE;
        $errosValidacao['selectCurso'] = 'Selecione um Curso!';
    }

    if (!$temErros) {
        inserirContato($conexao, $projeto);
        header('Location: index.php?pg=cadastrarAluno');
        die();
    }
}
$projeto = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'dtNascimento' => (isset($_POST['dtNascimento'])) ? $_POST['dtNascimento'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'selectCurso' => (isset($_POST['selectCurso'])) ? $_POST['selectCurso'] : '',
);
