<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <!--        arquivos das fontes icomoon-->
        <link type="text/css" rel="stylesheet" href="css/styleIcomoon.css" />
    </head>

    <!--    arquivos do bootstrap-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Guide Register</title>
</head>
<body>
    <?php include_once './telas/includes/header.php'; ?>
    <div class="container paginas">
        <?php
        if (!isset($_GET['pg'])) {
            
        } else {
            switch ($_GET['pg']) {

// -------------------------------- Alisson - Tela de login -------------------------                  

                case 'login':
                    include_once './telas/login/login.php';
                    break;

// -------------------------------- Alisson - Tela de login -------------------------   

                case 'cadastrarAluno':
                    include_once './telas/aluno/cadastroAluno.php';
                    break;

                case 'dadosAluno':
                    include_once './telas/aluno/dadosAluno.php';
                    break;

                case 'pesquisarAluno':
                    include_once './telas/aluno/pesquisarAluno.php';
                    break;

                case 'relatorios':
                    include_once './telas/relatorios/relatorios.php';
                    break;

                case 'listaAvisos':
                    include_once './telas/avisos/listaAvisos.php';
                    break;

                case 'listasdeprofessor':
                    include_once './telas/professores/listas.php';
                    break;

                case 'cadastrarprofessor':
                    include_once './telas/professores/professores.php';
                    break;
                case 'pesquisarprofessor':
                    include_once './telas/professores/Pesquisar.php';
                    break;

                case 'turmaCadastrar':
                    include_once './telas/turmas/turmaCadastrar.php';
                    break;

                case 'pesquisaTurma':
                    include_once './telas/turmas/pesquisaTurma.php';
                    break;

                case 'resultadoDados':
                    include_once './telas/turmas/resultadoDados.php';
                    break;

// -------------------------------- Taynara - Relatorios Inicio -------------------------              
                case 'relPesquisarAluno':
                    include_once './telas/relatorios/relatorios.php';
                    break;

                case 'relAtaAluno':
                    include_once './telas/relatorios/relatorios1.php';
                    break;

                case 'relDisciplina':
                    include_once './telas/relatorios/relatorios2.php';
                    break;

//--------------------------------- Taynara - Relatorios Fim -----------------------------    

                default:
                    break;
            }
        }
        ?>
    </div><!--    Fim container página-->
    <?php
    include_once './telas/includes/footer.php';
    ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--<script type="text/javascript" src="js/demo.js"></script>-->

</body>
</html>