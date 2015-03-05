<?php
include_once 'crud/conexao.php';
include_once 'telas/avisosEjustificativas/crudAvisos.php';
include_once 'telas/includes/funcoesDeApoio.php';
$dadosAviso = array();
$temErros = false;
$errosValidacao = array();

$dadosAviso = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'Turma' => (isset($_POST['Turma'])) ? $_POST['Turma'] : '',
    'Curso' => (isset($_POST['Curso'])) ? $_POST['Curso'] : '',
    'NomeP' => (isset($_POST['NomeP'])) ? $_POST['NomeP'] : '',
    'conteudoAviso' => (isset($_POST['conteudoAviso'])) ? $_POST['conteudoAviso'] : '',
    'Just' => (isset($_POST['Just'])) ? $_POST['Just'] : '',);

if (temPost() && isset($_POST['cadNovoAviso'])) {
    $dadosAviso = array();

    /// Nome //
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $dadosAviso['nome'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente seu nome!'
                . '</div>';
    }

    // Turma //

    if (isset($_POST['Turma']) && strlen($_POST['Turma']) > 5) {
        $dadosAviso['Turma'] = $_POST['Turma'];
    } else {
        $temErros = true;
        $errosValidacao['Turma'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de turma inválido!</h4>'
                . 'Digite corretamente o nome da turma'
                . '</div>';
    }
    // Curso //

    if (isset($_POST['Curso']) && strlen($_POST['Curso']) > 5) {
        $dadosAviso['Curso'] = $_POST['Curso'];
    } else {
        $temErros = true;
        $errosValidacao['Curso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de curso inválido!</h4>'
                . 'Digite corretamente o nome do curso'
                . '</div>';
    }
    // Nome do professor //
    if (isset($_POST['NomeP']) && strlen($_POST['NomeP']) > 5) {
        $dadosAviso['NomeP'] = $_POST['NomeP'];
    } else {
        $temErros = true;
        $errosValidacao['NomeP'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de professor inválido!</h4>'
                . 'Digite corretamente o nome do professor'
                . '</div>';
    }
    // Justificativas //

    if (isset($_POST['Just']) && strlen($_POST['Just']) > 5) {
        $dadosAviso['Just'] = $_POST['Just'];
    } else {
        $temErros = true;
        $errosValidacao['Just'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Justificativa incompleta!</h4>'
                . 'Digite corretamente sua justificativa de falta'
                . '</div>';
    }
}
    //conteudo Aviso
if (temPost()) {
    $dadosAviso = array();

    if (isset($_POST['conteudoAviso']) && strlen($_POST['conteudoAviso']) > 0) {
        $dadosAviso['conteudoAviso'] = $_POST['conteudoAviso'];
    } else {
        $temErros = true;
        $errosValidacao['conteudoAviso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Sem Conteúdo!</h4>'
                . 'Digite algo no conteúdo!'
                . '</div>';
    }
}


