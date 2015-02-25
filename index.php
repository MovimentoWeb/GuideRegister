<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="icon" href="img/GuideRegister-Icon.ico" sizes="64x64 32x32 24x24 16x16" />
        <!--        arquivos das fontes icomoon-->
        <link type="text/css" rel="stylesheet" href="css/styleIcomoon.css" />

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
                include_once 'telas/inicial.php';
            } else {
                switch ($_GET['pg']) {

// -------------------------------- Alisson - Tela de login -------------------------                  

                    case 'login':
                        include_once './telas/login/login.php';
                        break;

// -------------------------------- Tela aluno -------------------------   

                    case 'aluno':
                        include_once './telas/aluno/aluno.php';
                        break;


// -------------------------------- Tela Professor -------------------------  

                    case 'listasdeprofessor':
                        include_once './telas/professores/listas.php';
                        break;

                    case 'professores':
                        include_once './telas/professores/professores.php';
                        break;

                    case 'pesquisarprofessor':
                        include_once './telas/professores/Pesquisar.php';
                        break;


// -------------------------------- Tela aluno -------------------------   

                    case 'turmas':
                        include_once './telas/turmas/turmas.php';
                        break;

// -------------------------------- Taynara - Relatorios Inicio -------------------------       

                    case 'relatorios':
                        include_once './telas/relatorios/relatorios.php';
                        break;


//--------------------------------- Taynara - Justificativas Inicio -----------------------------

                    case 'avisosEjustificativas':
                        include_once './telas/avisosEjustificativas/avisosEjustificativas.php';
                        break;

// -------------------------------- Default ---------------------------------               

                    default:
                        include_once 'telas/inicial.php';
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
