
<?php
include_once 'telas/relatorios/ValidacaoRelatorio.php';
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {

        case'atasPorTurmas':
            ?>
            <div class="well">
                <div class="ataturmas">
                    <legend><span class="fa-user-add"></span> Ata por Turmas </legend>
                    <form class="form-search" method="POST">
                        <?php if ($temErros && isset($errosValidacao['ataturma'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['ataturma']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite a PA da turma para pesquisar</span>
                        <div class="input-append">
                            <input id="ataturma" name="ataturma" type="text" class="search-query " autofocus=""  value="">
                            <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                        </div>
                    </form>  
                    <?php
                    if ($exibirTabela == TRUE) {
                        ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>PA</th>
                                    <th>Curso</th>
                                    <th>CH</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //  foreach ($listarAluno as $aluno):
                                ?>
                                <tr>
                                    <td><?php echo $dadosRelatorio['PAturma']; ?></td>
                                    <td><?php echo $dadosRelatorio['curso']; ?></td>
                                    <td><?php echo $dadosRelatorio['chTotal']; ?> horas</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                Ação
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?pg=aluno&opcao=detalhes&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>" class="fa-checkmark2"> Ver detalhes</a></li>
                                                <li><a href="?pg=aluno&opcao=editar&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>" class="fa-pencil"> Editar turma</a></li>
                                                <li><a href="?pg=aluno&opcao=desativar&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>"  class="fa-remove"> Desativar Turma</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>    
                                <?php
                                // endforeach;
                                ?>
                            </tbody>
                        </table>
                        <?php
                    } else {

                        echo '0 - Resultados encontrados';
                    }
                    ?>
                </div>
            </div>    
            <?php
            break;

        case'pesquisarDisciplinas':
            ?>


            <div class="container pesquisardisciplina">

                <div class="well">
                    <form class="form-search" method="POST">

                        <?php if ($temErros && isset($errosValidacao['atadisciplina'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['atadisciplina']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome da disciplina</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input id="ataturma" name="atadisciplina" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus=""  value="<?php echo $dadosRelatorio['atadisciplina']; ?>">


                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                                <a href="?pg=disciplinas&opcao=cadastrar"><div class="btn btn-success pull-right" id="butaozinho" type="submit" >Criar Disciplina</div></a>
                            </li>
                        </ul>  
                    </form>  

                    <div class=" tabelas2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>PA</th>
                                    <th>Disciplina</th>
                                    <th>Carga Horária</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>00000</td>
                                    <td>Programação</td>
                                    <td>1200 Horas</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Etica</td>
                                    <td>600 Horas</td>
                                </tr>
                                <tr>
                                    <td>00002</td>
                                    <td>BDA</td>
                                    <td>200 Horas</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>

            </div>

            <?php
            break;


        case'listagemTurmas':
            ?>

            <div class="well">  
                <legend><span class="fa-search3"></span>  Listagem de turmas</legend>

                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>PA</th>
                            <th>Curso</th>
                            <th>Carga Horária</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dadosRelatorio = listagemDeTurmas($conexao);
                        foreach ($dadosRelatorio as $rel):
                            ?>
                            <tr>
                                <td><?php echo $rel['PAturma'] ?></td>
                                <td><?php echo $rel['curso'] ?></td>
                                <td><?php echo $rel['chTotal'] ?> horas</td>

                                <td>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                            Ação
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?pg=aluno&opcao=detalhes&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>" class="fa-checkmark2"> Ver detalhes</a></li>
                                            <li><a href="?pg=aluno&opcao=editar&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>" class="fa-pencil"> Editar turma</a></li>
                                            <li><a href="?pg=aluno&opcao=desativar&idrel=<?php //echo $dadosRelatorio['PAturma']                      ?>"  class="fa-remove"> Desativar Turma</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>    
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

            <?php
            break;
        default :
            break;
    }
}
?>
<!-- ---------------------- Fim ---------------------------------------------- -->  
