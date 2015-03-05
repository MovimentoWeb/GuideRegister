<?php
include_once 'telas/cursos/validacaoCursos.php';
if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {

        case'cadastrar':
            ?>
            <div class="row-fluid conteinerAluno">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Cadastro de Curso</legend>
                    <span class="help-block">Preencha corretamente os campos abaixo com os dados do curso. </span>
                    <ul>
                        <li class="span9">
                            <label for="nomeCurso">Nome do curso<br />
                                <?php if ($temErros && isset($errosValidacao['nomeCurso'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeCurso']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeCurso" name="nomeCurso" autofocus="" class="input-block-level" value="<?php echo $dadosCurso['nomeCurso']; ?>" placeholder="Nome do Curso">
                            </label>
                        </li>
                        <li class="span3">
                            <label for="chTotal">Carga Horária<br />    
                                <?php if ($temErros && isset($errosValidacao['chTotal'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['chTotal']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="chTotal" name="chTotal" autofocus="" class="input-block-level" value="<?php echo $dadosCurso['chTotal']; ?>" placeholder="Carga Horaria">
                            </label>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="cadCurso"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'editar':
            $dadosCurso = listarCursoPorId($conexao, $_GET['idCurso']);
            ?>
            <div class="row-fluid conteinerAluno">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Cadastro de Curso</legend>
                    <span class="help-block">Preencha corretamente os campos abaixo com os dados do curso. </span>
                    <ul>
                        <li class="span9">
                            <label for="nomeCurso">Nome do curso<br />
                                <?php if ($temErros && isset($errosValidacao['nomeCurso'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeCurso']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeCurso" name="nomeCurso" autofocus="" class="input-block-level" value="<?php echo $dadosCurso['nomeCurso']; ?>" placeholder="Nome do Curso">
                            </label>
                        </li>
                        <li class="span3">
                            <label for="chTotal">Carga Horária<br />    
                                <?php if ($temErros && isset($errosValidacao['chTotal'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['chTotal']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="chTotal" name="chTotal" autofocus="" class="input-block-level" value="<?php echo $dadosCurso['chTotal']; ?>" placeholder="Carga Horaria">
                            </label>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="EditCurso"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Atualizar</button>
                </form>
            </div>
            <?php
            break;

        case'pesquisar':
            ?>
            <div class="PesquisarAluno">
                <div class="well">  
                    <form class="form-search" method="POST">
                        <legend><span class="fa-search3"></span>  Pesquisar Curso</legend>
                        <?php if ($temErros && isset($errosValidacao['nomeCursoPesquisa'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nomeCursoPesquisa']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome de aluno para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="nomeCursoPesquisa" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">
                                    <input type="hidden" name="pesquisar"/>
                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>


                    <!--        Resultado das pesquisas-->
                    <?php
                    if ($exibirTabela == TRUE) {
                        ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Detalhes</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listaCurso as $curso):
                                    ?>
                                    <tr>
                                        <td><?php echo $curso['nomeCurso'] ?></td>
                                        <td>Detalhes do resultado 4</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                    Ação
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?pg=cursos&opcao=detalhes&idCurso=<?php echo $curso['idCurso'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=cursos&opcao=editar&idCurso=<?php echo $curso['idCurso'] ?>" class="fa-pencil"> Editar curso</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&idCurso=<?php echo 'idCurso'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>    
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <?php
                    }else {
                        echo '0 - Resultados encontrados';
                    }
                    ?>
                </div>
            </div>
            <?php
            break;

        case 'detalhes':
            ?>
            <div class="containerAluno ">
                <form class="well">
                    <legend><span class="fa-user4"></span> Dados do curso</legend>
                    <div class="row-fluid">
                        <div class="span3">Nome do curso:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosCurso['nomeCurso']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">Carga Horária: </div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosCurso['chTotal']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="?pg=cursos&opcao=pesquisar" class="btn btn-success"><span class="fa-backward" ></span> Voltar</a>
                    <a href="?pg=cursos&opcao=editar&idCurso=<?php echo $dadosCurso['idCurso'];?>" class="btn btn-warning"><span class="fa-pencil"></span> Editar aluno</a>
                </form>
            </div>

            <?php
            break;

        case 'AtaFrequencia':
            ?>
            <div class="well frequencia">
                <legend><span class="fa-user-add"></span> Ata de frequência</legend> <span class="label">Exibir Nome curso - exibir dia</span>
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Mat</th>
                                <th>Nome</th>
                                <th><span class="fa-checkmark2"></span></th>
                                <th><span class="fa-blocked"></span></th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>556</td>
                                <td>Reginaldo José</td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="compareceu" value="">

                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="faltou"  value="" >
                                    </label>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="label" data-toggle="dropdown" href="#">
                                            <span class="fa-comments"></span>
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
                    <label for="">
                        <button type="submit" class="btn btn-block btn-success"><span class="fa-checkmark"></span> Finalizar frequência</button>
                    </label>
                </form>

            </div>
            <?php
            break;

        case 'desativar':
            ?>
            desativar aluno
            <?php
            break;

        default :
            include_once 'telas/inicial.php';
            break;
    }
}
               