<header id="header-menu" class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
            <a class="brand" href="index.php">
                <img src="img/GuideRegister-Icon.ico"  alt="Página inicial" title="Página inicial"/> 
                Guide Register
            </a>

            <ul class="nav">
                <li><a class="brand"  href="?pg=avisosEjustificativas&opcao=meusAvisos"><span class="fa-bell"></span></a></li>
                <li><a class="brand"  href="?pg=creditos"><span class="fa-coin"></span></a></li>
            </ul>
            <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
            <div class="nav-collapse pull-right">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Aluno
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?pg=aluno&opcao=AtaFrequencia&idCurso=3&idUsuario=2&PAturma=556"><span class="fa-list3"></span> Fazer frequência de aluno</a></li>
                            <li><a href="?pg=aluno&opcao=cadastrar"><span class="fa-user-add"></span> Cadastrar</a> </li>
                            <li><a href="?pg=aluno&opcao=pesquisar"><span class="fa-search3"></span> Pesquisar</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Professores
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li ><a href="?pg=professores&opcao=cadastrar"><span class="fa-user-add"></span> Cadastrar</a> </li>
                            <li><a href="?pg=professores&opcao=pesquisar"><span class="fa-search3"></span> Pesquisar</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><span class="fa-list2"></span> Listar</a>
                                <ul class="dropdown-menu">
                                    <li><a href="?pg=professores&opcao=listas">Listas</a></li>
                                    <li><a href="">Pesquisa do Professor</a></li>
                                    <li><a href="?pg=professores&opcao=detalhes">Detalhe do professor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> 

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Cursos
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><span class="fa-list2"></span> Cursos</a>
                                <ul class="dropdown-menu">
                                    <li><a href="?pg=cursos&opcao=cadastrar"> <i class="fa-plus"></i> Cadastrar curso</a></li>
                                    <li><a href="?pg=cursos&opcao=pesquisar"><span class="fa-search3"></span> Pesquisa</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><span class="fa-list2"></span> Turmas</a>
                                <ul class="dropdown-menu">
                                    <li ><a href="?pg=turmas&opcao=cadastrar"> <i class="fa-plus"></i> Cadastrar Turmas</a></li>

                                    <li><a href="?pg=turmas&opcao=pesquisar"><span class="fa-search3"></span> Pesquisa</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#"><span class="fa-list2"></span> Disciplinas</a>
                                <ul class="dropdown-menu">
                                    <li ><a href="?pg=disciplinas&opcao=cadastrar"> <i class="fa-plus"></i> Cadastrar Disciplina</a></li>
                                    <li><a href="?pg=disciplinas&opcao=pesquisar"><span class="fa-search3"></span> Pesquisa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Relatórios
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?pg=relatorios&opcao=atasPorTurmas"><span class="fa-list" ></span> Listar turma por PA</a> </li>
                            <li><a href="?pg=relatorios&opcao=listagemTurmas"><span class="fa-circle-full" ></span> Todas as turmas</a> </li>
                            <li><a href="?pg=relatorios&opcao=pesquisarDisciplinas"><span class="fa-search3"></span> Pesquisar disciplinas</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Avisos e Justificativas 
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="?pg=avisosEjustificativas&opcao=novoAviso"> <span class="fa-plus"></span> Novo Aviso</a></li>
                            <li><a href="?pg=avisosEjustificativas&opcao=meusAvisos"> <span class="fa-screen3"></span> Ver meus avisos</a></li>
                            <li class="divider"></li>
                            <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa"> <span class="fa-comment"></span> Nova justificativa</a></li>
                            <li><a href="?pg=avisosEjustificativas&opcao=minhasJustificativas"> <span class="fa-warning"></span> Ver todas as Justificativas</a></li>
                        </ul>
                    </li>  
                </ul>  
            </div>

        </div>
    </div>
</header>
