<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

    //Validação  NOME
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $projeto['nome'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = ''
                 . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }

    //Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $projeto['dtNascimento'] = $_POST['dtNascimento'];
    } else {
        $temErros = true;
        $errosValidacao['dtNascimento'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Data de nascimento inválida!</h4>'
                . 'Data de nascimento deve seguir o formato: <strong>00/00/0000</strong>'
                . '</div>';
    }

    //Validação rg
    if (isset($_POST['rg']) && strlen($_POST['rg']) == 7) {
        $projeto['rg'] = $_POST['rg'];
    } else {
        $temErros = TRUE;
        $errosValidacao['rg'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>999.888.777</strong>'
                . '</div>';
    }

    //Validação cpf
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) == 11) {
        $projeto['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'CPF inválido! Digite um número de RG no formato: <strong>111.999.888-77</strong>'
                . '</div>';
    }

    //Validação Select Turno
    if (isset($_POST['selectTurno'])) {
        $projeto['selectTurno'] = $_POST['selectTurno'];
    } else {
        $temErros = TRUE;
        $errosValidacao['selectTurno'] = 'Selecione um Turno!';
    }

    //Validação Select Curso
    if (isset($_POST['selectCurso'])) {
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

include_once 'telas/aluno/cadastroAluno.php';
