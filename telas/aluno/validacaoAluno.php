<?php

include_once 'crud/crud.php';
include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

// Validaçao Cadastro de aluno
if (temPost()) {
    $dadosAlunos = array();

    //Validação  NOME
    if (isset($_POST['nomeAluno']) && strlen($_POST['nomeAluno']) > 5) {
        $dadosAlunos['nomeAluno'] = $_POST['nomeAluno'];
    } else {
        $temErros = true;
        $errosValidacao['nomeAluno'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }

    //Validação matricula
    if (isset($_POST['matricula']) && strlen($_POST['matricula']) >=2) {
        $dadosAlunos['matricula'] = $_POST['matricula'];
    } else {
        $temErros = TRUE;
        $errosValidacao['matricula'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Matrícula inválido!</h4>'
                . 'Digite um número de matricula correto'
                . '</div>';
    }
    
    //Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $dadosAlunos['dtNascimento'] = $_POST['dtNascimento'];
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
    if (isset($_POST['rg']) && strlen($_POST['rg']) >= 5) {
        $dadosAlunos['rg'] = $_POST['rg'];
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
        $dadosAlunos['cpf'] = $_POST['cpf'];
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
        $dadosAlunos['selectTurno'] = $_POST['selectTurno'];
    } else {
        $temErros = TRUE;
        $errosValidacao['selectTurno'] = 'Selecione um Turno!';
    }

    //Validação Select Curso
    if (isset($_POST['selectCurso'])) {
        $dadosAlunos['selectCurso'] = $_POST['selectCurso'];
    } else {
        $temErros = TRUE;
        $errosValidacao['selectCurso'] = 'Selecione um Curso!';
    }

    if (!$temErros) {
        // Função de inserir no banco de dados
        inserirAluno($conexao, $dadosAlunos);
        die();
    }
}  

//Recuperar campos Preenchidos
$dadosAluno = array(
    'id' => 0,
    'nomeAluno' => (isset($_POST['nomeAluno'])) ? $_POST['nomeAluno'] : '',
    'dtNascimento' => (isset($_POST['dtNascimento'])) ? $_POST['dtNascimento'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'matricula' => (isset($_POST['matricula'])) ? $_POST['matricula'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'selectCurso' => (isset($_POST['selectCurso'])) ? $_POST['selectCurso'] : '',
);