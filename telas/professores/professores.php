<?php
include_once 'telas/professores/validacaoProfessor.php';
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        
        case'cadastrar':
            ?>
            <div class="professores well">
                <form method="post" class="form-horizontal">
                    <legend><span class="fa-user-add"></span> Cadastro de professores</legend>
                    <span class="help-block">Preencha corretamente os acampos abaixo com os  dados do professor</span>
                    <ul>
                        <li>
                            <label for="nomeUsuario">Nome do professor:
                                <?php if ($temErros && isset($errosValidacao['nomeUsuario'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeUsuario']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" id="nomeUsuario" name="nomeUsuario" type="text" value="<?php echo $dadosProfessor['nomeUsuario'] ?>" placeholder="Nome"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtNascimento">Data de Nascimento:
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtNascimento" name="dtNascimento" value="<?php echo $dadosProfessor['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                            </label>
                        </li>
                        <li>
                            <label for="rg">Rg:
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="rg" name="rg" value="<?php echo $dadosProfessor['rg'] ?>" type="text" placeholder="RG"  />
                            </label>
                        </li>
                        <li>
                            <label for="cpf">CPF:
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="cpf" name="cpf" value="<?php echo $dadosProfessor['cpf'] ?>" type="text" placeholder="CPF"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtAdmissao">Data de admissão:
                                <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtAdmissao']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtAdmissao" name="dtAdmissao" value="<?php echo $dadosProfessor['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
                            </label>
                        </li>              
                    </ul>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="cadProfessor"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case 'editar':
            $dadosProfessor = listarProfessorPorId($conexao, $_GET['idUsuario']);
            ?>
            <div class="professores well">
                <form method="post" class="form-horizontal">
                    <legend><span class="fa-user-add"></span> Cadastro de professores</legend>
                    <span class="help-block">Preencha corretamente os acampos abaixo com os  dados do professor</span>
                    <ul>
                        <li>
                            <label for="nomeUsuario">Nome do professor:
                                <?php if ($temErros && isset($errosValidacao['nomeUsuario'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeUsuario']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" id="nomeUsuario" name="nomeUsuario" type="text" value="<?php echo $dadosProfessor['nomeUsuario'] ?>" placeholder="Nome"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtNascimento">Data de Nascimento:
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtNascimento" name="dtNascimento" value="<?php echo $dadosProfessor['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                            </label>
                        </li>
                        <li>
                            <label for="rg">Rg:
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="rg" name="rg" value="<?php echo $dadosProfessor['rg'] ?>" type="text" placeholder="RG"  />
                            </label>
                        </li>
                        <li>
                            <label for="cpf">CPF:
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="cpf" name="cpf" value="<?php echo $dadosProfessor['cpf'] ?>" type="text" placeholder="CPF"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtAdmissao">Data de admissão:
                                <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtAdmissao']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtAdmissao" name="dtAdmissao" value="<?php echo $dadosProfessor['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
                            </label>
                        </li>              
                    </ul>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="EditProfessor"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Atualizar</button>
                </form>
            </div>
            <?php
            break;

        case 'pesquisar':
            ?>
            <div class="PesquisarProfessor">
                <div class="well">  
                    <form class="form-search" method="post">
                        <legend><span class="fa-search3"></span>  Pesquisar Professor</legend>
                        <?php if ($temErros && isset($errosValidacao['nomeUsuarioPesquisa'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nomeUsuarioPesquisa']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome de professor para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="nomeUsuarioPesquisa" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">
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
                                foreach ($listarProfessor as $professor):
                                    ?>
                                    <tr>
                                        <td><?php echo $professor['nomeUsuario'] ?></td>
                                        <td>Detalhes do resultado 4</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                    Ação
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?pg=professores&opcao=detalhes&idUsuario=<?php echo $professor['idUsuario'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=professores&opcao=desativar&idUsuario=<?php echo $professor['idUsuario'] ?>"  class="fa-remove"> Desativar Professor</a></li>
                                                    <li><a href="?pg=professores&opcao=editar&idUsuario=<?php echo $professor['idUsuario'] ?>" class="fa-pencil"> Editar Professor</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&idUsuario=<?php echo 'idUsuario'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
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
                    <legend><span class="fa-user4"></span> Dados do Professor</legend>
                    <div class="row-fluid">
                        <div class="span3">Nome do Professor:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['nomeUsuario']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <div class="span3">Status do Professor:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <?php
                                        if($dadosProfessor['ativo'] == 1){
                                            $dadosProfessor['ativo'] = 'Aluno Ativado';
                                        } else {
                                            $dadosProfessor['ativo'] = 'Aluno Desativado';
                                        }
                                                
                                    ?>
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['ativo']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">Data de Nascimento: </div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['dtNascimento']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">RG:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['rg']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">CPF:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['cpf']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">Data de admissão:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosProfessor['dtAdmissao']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="" class="btn btn-success"><span class="fa-backward" ></span> Voltar</a>
                    <a href="" class="btn btn-warning"><span class="fa-pencil"></span> Editar aluno</a>
                </form>
            </div>
            <?php
            break;
    
        case 'desativar':
            ?>
            <?php
            $id = $_GET['idUsuario'];
            desativarProfessor($conexao, $id);
            break;
        
        default :
            include_once 'telas/inicial.php';
            break;
    }
}