<!--<Cadastro do aluno> Inicio da pagina cadastro do aluno-->
<div class="PesquisarAluno">
    <div class="well">  
        <form class="form-search">
            <legend><span class="fa-search3"></span>  Pesquisar Alunos</legend>
            <span class="help-block">Digite um nome de aluno para pesquisa</span>
            <ul>
                <li>
                    <div class="input-append">
                        <input type="text" class="search-query input-block-level">
                        <!--                        <button type="submit" class="btn btn-primary">Busca</button>-->
                        <a href="?pg=dadosAluno" class="btn btn-primary"> Buscar</a>
                    </div>
                </li>
            </ul>  
        </form>

        <!--        Resultado das pesquisas-->


        <table class="table table-hover">
            <caption>Título dos resultados</caption>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Detalhes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Resultado 1</td>
                    <td>
                    <p><strong>Turma:</strong> Nome da turma + PA</p>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Ação
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Links de menu dropdown -->
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Resultado 2</td>
                    <td>Detalhes do resultado 2</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Ação
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Links de menu dropdown -->
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Resultado 3</td>
                    <td>Detalhes do resultado 3</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Ação
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Links de menu dropdown -->
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Resultado 4</td>
                    <td>Detalhes do resultado 4</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                Ação
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="fa-delicious"> Ver detalhes</a></li>
                                <li><a href="#" class="fa-remove"> Desativar Aluno</a></li>
                                <li><a href="#" class="fa-aid"> Adicionar justificativa</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>