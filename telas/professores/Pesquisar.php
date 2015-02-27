<?php include_once 'telas/professores/validacaoProfessor.php';?>
<div class="PesquisarTurmas">
                <div class="well">  
                    <form class="form-search" method="post">
                        <?php if ($temErros && isset($errosValidacao['pesquisaProfessor'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['pesquisaProfessor']; ?>
                            </span>
                        <?php endif; ?>
                        
                        <legend><span class="fa-search3"></span>  Pesquisar Professor</legend>
                        <span class="help-block">Digite o nome do professor(a)</span>

                        <ul>
                            <li>
                                <div class="input-append">
                                    <input id="pesquisaProfessor" name="pesquisaProfessor" type="text" class="search-query input-block-level" value="<?php echo $projeto['pesquisaProfessor']; ?>" />
                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>

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
                                    <p><strong>Turma:</strong> Nome do professor</p>
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
                                            <li><a href="?pg=aluno&opcao=dadosAluno" class="fa-delicious"> Ver detalhes</a></li>
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