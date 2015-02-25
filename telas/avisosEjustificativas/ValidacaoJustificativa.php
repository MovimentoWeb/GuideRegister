<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

    /// Nome //
    
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $projeto['nome'] = $_POST['nome'];
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
        $projeto['Turma'] = $_POST['Turma'];
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
        $projeto['Curso'] = $_POST['Curso'];
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
        $projeto['NomeP'] = $_POST['NomeP'];
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
        $projeto['Just'] = $_POST['Just'];
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
    $projeto = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'Turma' => (isset($_POST['Turma'])) ? $_POST['Turma'] : '',
    'Curso' => (isset($_POST['Curso'])) ? $_POST['Curso'] : '',
    'NomeP' => (isset($_POST['NomeP'])) ? $_POST['NomeP'] : '',
    'Just' => (isset($_POST['Just'])) ? $_POST['Just'] : '', );
    