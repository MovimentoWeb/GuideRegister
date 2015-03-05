<?php

include_once 'crud/conexao.php';
include_once 'telas/disciplinas/crudDisciplinas.php';
include_once 'telas/includes/funcoesDeApoio.php';

//Recuperar campos Preenchidos
$dadosDiscip = array(
    'id' => 0,
    'nomeDisciplina' => (isset($_POST['nomeDisciplina'])) ? $_POST['nomeDisciplina'] : '',
    'codDisciplina' => (isset($_POST['codDisciplina'])) ? $_POST['codDisciplina'] : '',
    'ch' => (isset($_POST['ch'])) ? $_POST['ch'] : '',
    'nomePofessor' => (isset($_POST['nomePofessor'])) ? $_POST['nomePofessor'] : '',
    'idProfessor' => (isset($_POST['idProfessor'])) ? $_POST['idProfessor'] : '',
    'idCurso' => (isset($_POST['idCurso'])) ? $_POST['idCurso'] : '',
    'nomeCurso' => (isset($_POST['nomeCurso'])) ? $_POST['nomeCurso'] : '',
    'idTurma' => (isset($_POST['idTurma'])) ? $_POST['idTurma'] : '',
    'paTurma' => (isset($_POST['paTurma'])) ? $_POST['paTurma'] : '',

);

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;


//Validação  Cadastrar Disciplina
if (temPost() && isset($_POST['cadDisciplina'])) {

//Validação da nome disciplina
    if (isset($_POST['nomeDisciplina']) && strlen($_POST['nomeDisciplina']) > 2) {
        $dadosDiscip['nomeDisciplina'] = $_POST['nomeDisciplina'];
    } else {
        $temErros = true;
        $errosValidacao['nomeDisciplina'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite um nome com mais de 5 caracteres'
                . '</div>';
    }
    //Validação da codigo disciplina
    if (isset($_POST['codDisciplina']) ) {
        $dadosDiscip['codDisciplina'] = $_POST['codDisciplina'];
    } else {
        $temErros = true;
        $errosValidacao['codigoDisciplina'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite um codigo Valido'
                . '</div>';
    }
    //Validação  Carga Horaria
    if (isset($_POST['ch'])) {
        $dadosDiscip['ch'] = $_POST['ch'];
    } else {
        $temErros = true;
        $errosValidacao['ch'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite a carga horaria do curso.'
                . '</div>';
    }
    
      $dadosDiscip['nomeProfessor'] = $_POST['nomeProfessor'];

    
    if (!$temErros) {
        inserirDisciplina($conexao, $dadosDiscip);
        die();
    }
}

//-------- Validaçao Pesquisar aluno -----------
if (temPost() && isset($_POST['pesquisar'])) {

    //Validação  NOME
    if (isset($_POST['nomeDisciplinaPesquisa']) && strlen($_POST['nomeDisciplinaPesquisa']) > 2) {
        $dadosDiscip = $_POST['nomeDisciplinaPesquisa'];
    } else {
        $temErros = true;
        $errosValidacao['nomeDisciplinaPesquisa'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome da disciplina inválida!</h4>'
                . 'Digite corretamente o nome da disciplina'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados
        $listarDisciplina = listardisciplina($conexao, $dadosDiscip);
        if ($listarDisciplina != NULL) {
            $exibirTabela = TRUE;
        }
    }
}

//-------- Validaçao Editar  aluno -----------
if (temPost() && isset($_POST['EditDisciplina'])) {
    $dadosDiscip = array();
    $dadosDiscip['idDisciplina'] = $_GET['idDisciplina'];

  //Validação da nome disciplina
    if (isset($_POST['nomeDisciplina']) && strlen($_POST['nomeDisciplina']) > 2) {
        $dadosDiscip['nomeDisciplina'] = $_POST['nomeDisciplina'];
    } else {
        $temErros = true;
        $errosValidacao['nomeDisciplina'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite um nome com mais de 5 caracteres'
                . '</div>';
    }
    //Validação da codigo disciplina
    if (isset($_POST['codDisciplina']) ) {
        $dadosDiscip['codDisciplina'] = $_POST['codDisciplina'];
    } else {
        $temErros = true;
        $errosValidacao['codDisciplina'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite um codigo Valido'
                . '</div>';
    }
    //Validação  Carga Horaria
    if (isset($_POST['ch'])) {
        $dadosDiscip['ch'] = $_POST['ch'];
    } else {
        $temErros = true;
        $errosValidacao['ch'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite a carga horaria do curso.'
                . '</div>';
    }
     $dadosDiscip['idProfessor'] = $_POST['idProfessor'];
     $dadosDiscip['nomeProfessor'] = $_POST['nomeProfessor'];

    if (!$temErros) {
        // Função de inserir no banco de dados
        editarDisciplina($conexao, $dadosDiscip);
    }
}

//-------- Validaçao Excluir disciplina-----------
//-------- Detalhes do disciplina -----------

if (isset($_GET['idDisciplina'])) {
    $listarDisciplina = array();
    $listarDisciplina['idDisciplina'] = $_GET['idDisciplina'];

    $dadosDiscip = listarDisciplinaPorId($conexao, $listarDisciplina['idDisciplina']);
}




