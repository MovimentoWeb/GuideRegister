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
                . '<h4>Nome do professor inválido!</h4>'
                . 'Digite corretamente o nome do professor'
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
                . 'Data de nascimento deve seguir o formato: <strong>01/01/2001</strong>'
                . '</div>';
    }

//Validação rg
    if (isset($_POST['rg']) && strlen($_POST['rg']) == 7) {
        $projeto['rg'] = $_POST['rg'];
    } else {
        $temErros = TRUE;
        $errosValidacao['rg'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>1.111.111</strong>'
                . '</div>';
    }

//Validação cpf
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) == 11) {
        $projeto['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>111.111.111-11</strong>'
                . '</div>';
    }

//validação data de admissão
    if (isset($_POST['dtAdmissao']) && strlen($_POST['dtAdmissao']) == 8) {
        $projeto['dtAdmissao'] = $_POST['dtAdmissao'];
    } else {
        $temErros = TRUE;
        $errosValidacao['dtAdmissao'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite a Data de admissão: <strong>01/01/2001</strong>'
                . '</div>';
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
        header('Location: index.php?pg=cadastrarprofessor');
        die();
    }
    
      //Validação da nome disciplina
if (isset($_POST['pesquisaProfessor']) && strlen($_POST['pesquisaProfessor']) > 5) {
        $projeto['pesquisaProfessor'] = $_POST['pesquisaProfessor'];
    } else {
        $temErros = true;
        $errosValidacao['pesquisaProfessor'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Pesquisa invalida!</h4>'
                . 'Digite sua pesquisa nos campos abaixo'
                . '</div>';
    
}
$projeto = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'dtNascimento' => (isset($_POST['dtNascimento'])) ? $_POST['dtNascimento'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'dtAdmissao' => (isset($_POST['dtAdmissao'])) ? $_POST['dtAdmissao'] : '',
    'pesquisaProfessor' => (isset($_POST['pesquisaProfessor'])) ? $_POST['pesquisaProfessor'] : '',
);



}