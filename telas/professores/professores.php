<?php
include_once 'crud/crud.php';
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
                            <label for="nome">Nome do professor:
                                <?php if ($temErros && isset($errosValidacao['nomeProfessor'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeProfessor']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" id="nomeProfessor" name="nomeProfessor" type="text" value="<?php echo $dadosProfessor['nomeProfessor'] ?>" placeholder="Nome"  />
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
            ?>

            <div class="professores well">
                <form method="post" class="form-horizontal">
                    <legend><span class="fa-user-add"></span> Cadastro de professores</legend>
                    <span class="help-block">Preencha corretamente os acampos abaixo com os  dados do professor</span>
                    <ul>
                        <li>
                            <label for="">Nome do professor:
                                <?php if ($temErros && isset($errosValidacao['nomeProfessor'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeProfessor']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" name="nomeProfessor" type="text" value="<?php echo $dadosProfessor['nomeProfessor'] ?>" placeholder="Nome"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Data de Nascimento:
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="dtNascimento" value="<?php echo $dadosProfessor['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Rg:
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="rg" value="<?php echo $dadosProfessor['rg'] ?> "type="text" placeholder="RG"  />
                            </label>
                        </li>
                        <li>
                            <label for="">CPF:
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="cpf" value="<?php echo $dadosProfessor['rg'] ?>" type="text" placeholder="CPF"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Data de admissão:
                                <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtAdmissao']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="dtAdmissao" value="<?php echo $dadosProfessor['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
                            </label>
                        </li>
                        <li>
                            <label>Turno</label>
                            <select>
                                <option value="">Selecione um turno</option>
                                <option value="">Manhã</option>
                                <option value="">Tarde</option>
                                <option value="">Noite</option>
                            </select>
                        </li>               
                    </ul>
                    <input class="btn btn-primary " type="submit" value="Enviar" />
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
                        <?php if ($temErros && isset($errosValidacao['nomeProfessorPesquisa'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nomeProfessorPesquisa']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome de professor para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="nomeProfessorPesquisa" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">
                                    <input type="hidden" name="pesquisa"/>
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
                                        <td><?php echo $professor['nomeProfessor'] ?></td>
                                        <td>Detalhes do resultado 4</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                    Ação
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?pg=professorer&opcao=detalhes&detalhes=<?php echo $professor['idProfessor'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=professorer&opcao=desativar&desativar=<?php echo $professor['idProfessor'] ?>"  class="fa-remove"> Desativar Aluno</a></li>
                                                    <li><a href="?pg=professorer&opcao=editar&edit=<?php echo $professor['idProfessor'] ?>" class="fa-pencil"> Editar aluno</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&just=<?php echo 'idProfessor'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
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
                    <legend><span class="icon-tasks"></span> Dados do aluno</legend>

                    <label for="">
                        Nome do Professor:
                        <input type="" name="nomeProfessor" disabled=""/>
                    </label>

                    Disciplina:
                    <label for=""></label>
                    Codigo da Turma:
                    <label for=""></label>
                    Curso: 
                    <label for=""></label>
                    Matr: 
                    <label for=""></label>
                    Periodo: 
                    <label for=""></label>

                    <input type="button" class=" btn btn-primary span2" value="Enviar" />
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