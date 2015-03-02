<?php

include_once 'crud/crud.php';
include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;

//Recuperar campos Preenchidos
$dadosRelatorio = array(
    'id' => 0,
    'atadisciplina' => (isset($_POST['atadisciplina'])) ? $_POST['atadisciplina'] : '',
    'ataturma' => (isset($_POST['ataturma'])) ? $_POST['ataturma'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'matricula' => (isset($_POST['matricula'])) ? $_POST['matricula'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'ataturma' => (isset($_POST['ataturma'])) ? $_POST['ataturma'] : '',
    
  
);


// Relatórios - Pesquisar por Disciplina
if (temPost() && isset($_POST['atadisciplina'])) {

    //Validação  Relatorios/Pesquisar
    if (isset($_POST['atadisciplina']) && strlen($_POST ['atadisciplina']) > 2) {
        $dadosAlunos = $_POST['atadisciplina'];
    } else {
        $temErros = true;
        $errosValidacao['atadisciplina'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Digite corretamente o nome da Discplina!</h4>'
                . 'Digite corretamente o nome da Discplina'
                . '</div>';
    }
}

// Relatórios - Pesquisar por turmas
if (temPost() && isset($_POST['ataturma'])) {
    if (strlen($_POST ['ataturma']) > 2) {
        $dadosRelatorios = $_POST['ataturma'];
    
    } else {
        $temErros = true;
        $errosValidacao['ataturma'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite corretamente o nome da PA'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados

        $dadosRelatorio = pesquisarTurmaID($conexao, $dadosRelatorios);
        if ($dadosRelatorio != NULL) {
            $exibirTabela = TRUE;
        }
    }
}





