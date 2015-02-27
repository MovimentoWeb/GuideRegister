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
                            <label for="nome">Nome do professor:
                                <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nome']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" id="nome" name="nome" type="text" value="<?php echo $projeto['nome'] ?>" placeholder="Nome"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtNascimento">Data de Nascimento:
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtNascimento" name="dtNascimento" value="<?php echo $projeto['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                            </label>
                        </li>
                        <li>
                            <label for="rg">Rg:
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="rg" name="rg" value="<?php echo $projeto['rg'] ?>" type="text" placeholder="RG"  />
                            </label>
                        </li>
                        <li>
                            <label for="cpf">CPF:
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="cpf" name="cpf" value="<?php echo $projeto['rg'] ?>" type="text" placeholder="CPF"  />
                            </label>
                        </li>
                        <li>
                            <label for="dtAdmissao">Data de admissão:
                                <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtAdmissao']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" id="dtAdmissao" name="dtAdmissao" value="<?php echo $projeto['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
                            </label>
                        </li>              
                    </ul>
                    <input class="btn btn-primary " type="submit" value="Enviar" />
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
                                <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nome']; ?>
                                    </span>
                                <?php endif; ?>    
                                <input class="input-block-level" name="nome" type="text" value="<?php echo $projeto['nome'] ?>" placeholder="Nome"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Data de Nascimento:
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="dtNascimento" value="<?php echo $projeto['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Rg:
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="rg" value="<?php echo $projeto['rg'] ?> "type="text" placeholder="RG"  />
                            </label>
                        </li>
                        <li>
                            <label for="">CPF:
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="cpf" value="<?php echo $projeto['rg'] ?>" type="text" placeholder="CPF"  />
                            </label>
                        </li>
                        <li>
                            <label for="">Data de admissão:
                                <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtAdmissao']; ?>
                                    </span>
                                <?php endif; ?>
                                <input class="input-block-level" name="dtAdmissao" value="<?php echo $projeto['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
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
            <!--<Cadastro do aluno> Inicio da pagina cadastro do aluno-->
            <div class="PesquisarProfessor">
                <div class="well">  
                    <form class="form-search">
                        <legend><span class="fa-search3"></span>  Pesquisar Professor</legend>
                        <span class="help-block">Digite um nome de professor para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input type="text" class="search-query input-block-level">
                                    <!--<button type="submit" class="btn btn-primary">Busca</button>-->
                                    <a href="?pg=dadosAluno" class="btn btn-primary"> Buscar</a>
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
            <?php
            break;

        case 'dadosAluno':

        case 'listas';
            ?>
            <div class="well">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>                            
                            <th>Primeiro name</th>
                            <th>Detalhes</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                        Ação
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->
                                        <li><a href="?pg=aluno&opcao=detalhes" class="fa-delicious"> Ver detalhes</a></li>
                                        <li><a href="?pg=aluno&opcao=desativar" class="fa-remove"> Desativar Aluno</a></li>
                                        <li><a href="?pg=aluno&opcao=editar" class="fa-pencil"> Editar aluno</a></li>
                                        <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa" class="fa-aid"> Adicionar justificativa</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                        Ação
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->                    
                                        <li><a href="?pg=aluno&opcao=detalhes" class="fa-delicious"> Ver detalhes</a></li>
                                        <li><a href="?pg=aluno&opcao=desativar" class="fa-remove"> Desativar Aluno</a></li>
                                        <li><a href="?pg=aluno&opcao=editar" class="fa-pencil"> Editar aluno</a></li>
                                        <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa" class="fa-aid"> Adicionar justificativa</a></li>
                                    </ul>                                 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                        Ação
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Links de menu dropdown -->
                                        <li><a href="?pg=aluno&opcao=detalhes" class="fa-delicious"> Ver detalhes</a></li>
                                        <li><a href="?pg=aluno&opcao=desativar" class="fa-remove"> Desativar Aluno</a></li>
                                        <li><a href="?pg=aluno&opcao=editar" class="fa-pencil"> Editar aluno</a></li>
                                        <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa" class="fa-aid"> Adicionar justificativa</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
        case 'detalhes':
            ?>
            <div class="containerAluno ">
                <form class="well">
                    <legend><span class="icon-tasks"></span> Dados do aluno</legend>
                    <div class="row-fluid">
                        <label for="">
                            Nome do aluno:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>


                        <label for="">
                            Disciplina:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>

                        <label for="">
                            Codigo da Turma:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>

                        <label for="">
                            Curso:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>

                        <label for="">
                            Matricula:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>

                        <label for="">
                            Periodo:
                            <input type="" name="nomeAluno" disabled=""/>
                        </label>
                        <input type="button" class=" btn btn-primary span2" value="Enviar" />
                    </div>
                </form>
            </div>
            <?php
            break;
    }
}