<?php

include_once 'telas/includes/funcoesDeApoio.php';


//Recuperar campos Preenchidos
$dadosRelatorio = array(
    'id' => 0,
    'atadisciplina' => (isset($_POST['atadisciplina'])) ? $_POST['atadisciplina'] : '',
    'ataturma' => (isset($_POST['ataturma'])) ? $_POST['ataturma'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'matricula' => (isset($_POST['matricula'])) ? $_POST['matricula'] : '',
    'selectTurno' => (isset($_POST['selectTurno'])) ? $_POST['selectTurno'] : '',
    'selectCurso' => (isset($_POST['selectCurso'])) ? $_POST['selectCurso'] : '',
);


$temErros = false;
$errosValidacao = array();


if (temPost() && isset($_POST['atadisciplina'])) {
    $projeto = array();

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
if (temPost() && isset($_POST['ataturma'])) {
///Validação  Relatorios/Pesquisar
    if (isset($_POST['ataturma']) && strlen($_POST ['ataturma']) > 2) {
        $dadosAlunos = $_POST['ataturma'];
    } else {
        $temErros = true;
        $errosValidacao['ataturma'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Digite corretamente a PA da turma!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }
}





