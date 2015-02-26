<?php
include_once './telas/avisosEjustificativas/ValidacaoJustificativa.php';
if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {

        case'novoAviso':
            ?>
            <div id="ListadeAvisos" class="meioTurma well">
                <form class="" method="post">
                    <legend><span class="fa-notification"></span> Novo Aviso</legend>
                    <span class="help-block">Selecione um grupo de usuário ou um usuário específico pra quem você deseja enviar o aviso.</span>
                    <div class="row-fluid">
                        <div class="span6"> 
                            <select>
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                        </div>
                        <div class="span6 justifica"></div>
                    </div>
                    <span class="help-block">Escreva o conteúdo do aviso.</span>
                    <?php if ($temErros && isset($errosValidacao['conteudoAviso'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['conteudoAviso']; ?>
                        </span>
                    <?php endif; ?>
                    <textarea placeholder="Conteúdo..." rows="5" name="conteudoAviso" class="input-block-level"></textarea><br />
                    <button type="submit" class="btn btn-success"><span class="fa-checkmark"></span> Enviar aviso</button>

                </form>
            </div>
            <?php
            break;

        case'meusAvisos':
            ?>
            <form action="" method="post">
                <div id="AvisosMeus" class="alert alert-block alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">Aviso! - Nome aviso</h4>
                    <span class="label label-info">De: <strng>Reginaldo Lima</strng></span>
                    <span class="label label-info">Para: <strng>PA da turma</strng></span><br />
                    <div class="well">
                        <p>Detalhes Aviso</p>
                        <small>
                            Mussum ipsum cacilds, vidis litro abertis. Consetis 
                            adipiscings elitis. Pra lá , depois divoltis porris, 
                            paradis. Paisis, filhis, espiritis santis. Mé faiz elementum 
                            girarzis, nisi eros vermeio, in elementis mé pra quem é 
                            amistosis quis leo. Manduma pindureta quium dia nois paga. 
                            Sapien in monti palavris qui num significa nadis i pareci 
                            latim. Interessantiss quisso pudia ce receita de bolis, 
                            mais bolis eu num gostis.
                        </small>
                    </div>
                    <p>
                        <a class="btn btn-primary" href="#"><span class="fa-add "></span> OK - Fechar aviso</a> 
                        <a class="btn btn-info" href="?pg=avisosEjustificativas&opcao=novoAviso"><span class="fa-comments"></span> Novo aviso</a>
                    </p>
                </div>
            </form>
            <?php
            break;

        case'novaJustificativa':
            ?>

            <div class="container justificativa">

                <form class="well" method="POST">
                    <legend><span class="fa-search3"></span> Criar justificativa</legend>  

                    <label for="nome">
                        Nome completo do Aluno: 
                        <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nome']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" id="nome" class="input-block-level" placeholder="Nome do aluno" name="nome" value="<?php echo $projeto['nome']; ?>"><br />
                    </label>



                    <label for="curso">
                        Curso: 
                        <?php if ($temErros && isset($errosValidacao['Curso'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['Curso']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" id="curso" class="input-block-level" placeholder="Curso" name="Curso" value="<?php echo $projeto['Curso']; ?>"><br />
                    </label>

                    <span class="help-block">Selecione o professor.</span>
                    <div class="row-fluid">
                        <div class="span6"> 
                            <select>
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                            </select>
                        </div>
                        <div class="span6 justifica"></div>
                    </div>

                    <label for="justificativas">
                        Justificativas:
                        <?php if ($temErros && isset($errosValidacao['Just'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['Just']; ?>
                            </span>
                        <?php endif; ?>
                        <textarea id="justificativas" class="input-block-level" rows="3" placeholder="Detalhes das Justificativas" name="Just" value="<?php echo $projeto['Just']; ?>" > </textarea> 
                    </label>
                    <p>
                        <button class="btn btn-success" type="submit"><span class="fa-checkmark"></span> Criar justificativa</button>
                    </p>

                </form>


            </div>

            <?php
            break;

        case 'minhasJustificativas':
            ?>
            <!--    inicio do código-->
            <div id="JustificativasMinha" class="alert alert-block alert-error fade in">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <span class="label">Criado em <strong>22 de fevereiro de 2015.</strong></span> <br />
                <h4 class="">Justificativa de falta! </h4>

                <div class="row-fluid">
                    <div class="span3"><span class="alert alert-info">Aluno: <strng>Reginaldo Lima</strng></span><br /></div>
                    <div class="span3"><span class="alert alert-info">Turma: <strng>PA da turma</strng></span><br /></div>
                    <div class="span3"><span class="alert alert-info">Curso: <strng>Nome do curso</strng></span><br /></div>
                    <div class="span3"><span class="alert alert-info">Professor: <strng>Nome professor</strng></span><br /></div>
                </div>






                <div class="well">
                    <p>Detalhes da justificativa</p>
                    <small>
                        Mussum ipsum cacilds, vidis litro abertis. Consetis 
                        adipiscings elitis. Pra lá , depois divoltis porris, 
                        paradis. Paisis, filhis, espiritis santis. Mé faiz elementum 
                        girarzis, nisi eros vermeio, in elementis mé pra quem é 
                        amistosis quis leo. Manduma pindureta quium dia nois paga. 
                        Sapien in monti palavris qui num significa nadis i pareci 
                        latim. Interessantiss quisso pudia ce receita de bolis, 
                        mais bolis eu num gostis.
                    </small>
                </div>
                <p>
                    <a class="btn btn-success" href="#"><span class="fa-add "></span> Ok</a> 
                </p>
            </div>
            <?php
            break;

        default:
            include_once 'telas/inicial.php';
            break;
    }
}