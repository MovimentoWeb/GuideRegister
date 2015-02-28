<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;
$listarProfessor;

if (temPost() && isset($_POST['cadProfessor'])) {
    $dadosProfessor = array();

//Validação  NOME
    if (isset($_POST['nomeProfessor']) && strlen($_POST['nomeProfessor']) > 5) {
        $dadosProfessor['nomeProfessor'] = $_POST['nomeProfessor'];
    } else {
        $temErros = true;
        $errosValidacao['nomeProfessor'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome do professor inválido!</h4>'
                . 'Digite corretamente o nome do professor'
                . '</div>';
    }

//Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $dadosProfessor['dtNascimento'] = $_POST['dtNascimento'];
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
        $dadosProfessor['rg'] = $_POST['rg'];
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
        $dadosProfessor['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>111.111.111-11</strong>'
                . '</div>';
    }

//validação data de admissão
    if (isset($_POST['dtAdmissao']) && strlen($_POST['dtAdmissao']) >= 8) {
        $dadosProfessor['dtAdmissao'] = $_POST['dtAdmissao'];
    } else {
        $temErros = TRUE;
        $errosValidacao['dtAdmissao'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Data de admissão inválido!</h4>'
                . 'Digite a Data de admissão: <strong>01/01/2001</strong>'
                . '</div>';
    }

    if (!$temErros) {
        // Função de inserir no banco de dados
        inserirProfessor($conexao, $dadosProfessor);
        die();
    }
}

//-------- Validaçao Pesquisar professor -----------

if (temPost() && isset($_POST['pesquisa'])) {
    
//Validação da nome professor
    if (isset($_POST['nomeProfessorPesquisa']) && strlen($_POST['nomeProfessorPesquisa']) > 2) {
        $dadosProfessor = $_POST['nomeProfessorPesquisa'];
    } else {
        $temErros = true;
        $errosValidacao['nomeProfessorPesquisa'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Pesquisa invalida!</h4>'
                . 'Digite sua pesquisa nos campos abaixo'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados
        $listarProfessor = listarProfessor($conexao, $dadosProfessor);
        $exibirTabela = TRUE;
    }
}
$dadosProfessor = array(
    'id' => 0,
    'nomeProfessor' => (isset($_POST['nomeProfessor'])) ? $_POST['nomeProfessor'] : '',
    'dtNascimento' => (isset($_POST['dtNascimento'])) ? $_POST['dtNascimento'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'dtAdmissao' => (isset($_POST['dtAdmissao'])) ? $_POST['dtAdmissao'] : '',
    'pesquisaProfessor' => (isset($_POST['pesquisaProfessor'])) ? $_POST['pesquisaProfessor'] : '',
);
