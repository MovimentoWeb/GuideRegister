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
                case 'cadastrarAluno':
                    include_once './telas/aluno/cadastroAluno.php';

                    break;

                case 'pesquisarAluno':
                    include_once './telas/aluno/pesquisarAluno.php';

                    break;
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