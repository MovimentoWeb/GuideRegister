<?php
include_once './telas/avisosEjustificativas/ValidacaoJustificativa.php';
if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {
        
        case'novoAviso':
            ?>
            <div id="ListadeAvisos" class="meioTurma well">
                <form class="">
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
                    <textarea placeholder="Conteúdo..." rows="5" class="input-block-level"></textarea><br />
                    <button type="submit" class="btn btn-success"><span class="fa-checkmark"></span> Enviar aviso</button>

                </form>
            </div>
            <?php
            break;

        case'meusAvisos':
            ?>

            Tela meus avisos
            <?php
            break;

        case 'justificativaDeFaltas':
            ?>

            <div class="container justificativa">

                <form class="well" method="POST">
                    <legend><span class="fa-search3"></span>Justificativas</legend>  

                    Nome do Aluno: 
                    <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['nome']; ?>
                        </span>
                    <?php endif; ?>

                    <input type="text" class="input-block-level" placeholder="Nome do aluno" name="nome" value="<?php echo $projeto['nome']; ?>"><br />
                    Turma: 
                    <?php if ($temErros && isset($errosValidacao['Turma'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['Turma']; ?>
                        </span>
                    <?php endif; ?>

                    <input type="text" class="input-block-level" placeholder="Turma" name="Turma" value="<?php echo $projeto['Turma']; ?>" ><br />
                    Curso: 
                    <?php if ($temErros && isset($errosValidacao['Curso'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['Curso']; ?>
                        </span>
                    <?php endif; ?>

                    <input type="text" class="input-block-level" placeholder="Curso" name="Curso" value="<?php echo $projeto['Curso']; ?>"><br />
                    Nome do Professor: 
                    <?php if ($temErros && isset($errosValidacao['NomeP'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['NomeP']; ?>
                        </span>
                    <?php endif; ?>

                    <input type="text" class="input-block-level" placeholder="Nome do Professor" name="NomeP" value="<?php echo $projeto['NomeP']; ?>" ><br />
                    Justificativas:
                    <?php if ($temErros && isset($errosValidacao['Just'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['Just']; ?>
                        </span>
                    <?php endif; ?>

                    <textarea class="input-block-level" rows="3" placeholder="Detalhes das Justificativas" name="Just" value="<?php echo $projeto['Just']; ?>" > </textarea> 
                    <p>
                        <button class="btn btn-success" type="submit"><span class="fa-checkmark"></span> Aceitar justificativa</button>
                        <button class="btn btn-danger" type="button"><span class="fa-cross3"></span> Rejeitar</button>
                    </p>

                </form>


            </div>

            <?php
            break;
            
        case '':
            ?>
        
                <?php
        default:
            include_once 'telas/inicial.php';
            break;
    }
}