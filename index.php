<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

        <!--    arquivos do bootstrap-->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.css" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <title>Guide Register</title>
    </head>
    <body>

        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                    <a class="brand" href="#">Nome do projeto</a>

                    <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                    <div class="nav-collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                        <ul class="nav">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle btn-inverse" data-toggle="dropdown" href="#">
                                    Ação
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Links de menu dropdown -->

                                    <li >
                                        <a href="#">Início</a>
                                    </li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                </ul>
                            </div>  
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="#">Início</a>
                        </li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <form class="navbar-search pull-left">
                        <input type="text" class="search-query" placeholder="Busca">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>