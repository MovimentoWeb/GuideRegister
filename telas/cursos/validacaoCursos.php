<?php
include_once 'crud/conexao.php';
include_once 'telas/cursos/crudCurso.php';
include_once 'telas/includes/funcoesDeApoio.php';

//Recuperar campos Preenchidos
$dadosCurso = array(
    'id' => 0,
    'nomeCurso' => (isset($_POST['nomeCurso'])) ? $_POST['nomeCurso'] : '',
    'chTotal' => (isset($_POST['chTotal'])) ? $_POST['chTotal'] : '',
    );

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;


//-------- Validaçao Cadastro de curso -----------
if (temPost() && isset($_POST['cadCurso'])) {
    $dadosCurso = array();

    //Validação  Nome do Curso
    if (isset($_POST['nomeCurso']) && strlen($_POST['nomeCurso']) > 5) {
        $dadosCurso['nomeCurso'] = $_POST['nomeCurso'];
    } else {
        $temErros = true;
        $errosValidacao['nomeCurso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de curso inválido!</h4>'
                . 'Digite corretamente o nome do curso'
                . '</div>';
    }

    //Validação Carga Horária
    if (isset($_POST['chTotal']) && strlen($_POST['chTotal']) >= 2) {
        $dadosCurso['chTotal'] = $_POST['chTotal'];
    } else {
        $temErros = TRUE;
        $errosValidacao['chTotal'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Carga Horária inválido!</h4>'
                . 'Digite um número de Carga horária correto'
                . '</div>';
    }


    if (!$temErros) {
        // Função de inserir no banco de dados
        inserirCurso($conexao, $dadosCurso);
        die();
    }
}

//-------- Validaçao Pesquisar curso -----------
if (temPost() && isset($_POST['pesquisar'])) {

    //Validação  NOME
    if (isset($_POST['nomeCursoPesquisa']) && strlen($_POST['nomeCursoPesquisa']) > 2) {
        $dadosCurso = $_POST['nomeCursoPesquisa'];
    } else {
        $temErros = true;
        $errosValidacao['nomeCursoPesquisa'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados
        $listaCurso = listarCurso($conexao, $dadosCurso);
        if ($listaCurso != NULL) {
            $exibirTabela = TRUE;
        }
    }
}

//-------- Validaçao Editar  curso -----------
if (temPost() && isset($_POST['EditCurso'])) {
    $dadosCurso = array();
    $dadosCurso['idCurso'] = $_GET['idCurso'];

   
    //Validação  Nome do Curso
    if (isset($_POST['nomeCurso']) && strlen($_POST['nomeCurso']) > 5) {
        $dadosCurso['nomeCurso'] = $_POST['nomeCurso'];
    } else {
        $temErros = true;
        $errosValidacao['nomeCurso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de curso inválido!</h4>'
                . 'Digite corretamente o nome do curso'
                . '</div>';
    }

    //Validação Carga Horária
    if (isset($_POST['chTotal']) && strlen($_POST['chTotal']) >= 2) {
        $dadosCurso['chTotal'] = $_POST['chTotal'];
    } else {
        $temErros = TRUE;
        $errosValidacao['chTotal'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Carga Horária inválido!</h4>'
                . 'Digite um número de Carga horária correto'
                . '</div>';
    }


    if (!$temErros) {
        // Função de inserir no banco de dados
        editarCurso($conexao, $dadosCurso);
    }
}

//-------- Validaçao Excluir Aluno-----------
//-------- Detalhes do Aluno -----------

if (isset($_GET['idCurso'])) {
    $listaCurso = array();
    $listaCurso['idCurso'] = $_GET['idCurso'];

    $dadosCurso = listarCursoPorId($conexao, $listaCurso['idCurso']);
}




