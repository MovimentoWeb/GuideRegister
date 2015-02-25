<?php
include_once 'telas/login/validacaologin.php';
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'loginInicial':
            ?>
            <div class="container" id="login">
                <div class="well">
                    <form method="post" class="form-horizontal">
                        <legend><span class="fa-key"></span>Login Inicial</legend>
                        <img class="img img-polaroid" src="img/Capa.jpg" alt="capa" />
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <?php if ($temErros && isset($errosValidacao['email'])) : ?>
                                <span class="erro">

                                    <?php echo $errosValidacao['email']; ?>
                                </span>
                            <?php endif; ?>

                            <div class="input-prepend">
                                <span class="add-on"><i class="fa-envelope"></i></span>
                                <input class="input-xlarge" id="inputEmail" name="email" type="text" placeholder="E-mail">
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"></label>

                                <?php if ($temErros && isset($errosValidacao['senha'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['senha']; ?>
                                    </span>
                                <?php endif; ?>

                                <div class="input-prepend">
                                    <span class="add-on"><i class="fa-key2"></i></span>
                                    <input class="input-xlarge" id="inputSenha" name="senha" type="text" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <a href="?pg=login&opcao=esqueciMinhaSenha">Esqueceu sua senha?</a>
                                <input class="btn btn-block btn-info" type="submit" value="Enviar">
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
            <?php
            break;

        case'esqueciMinhaSenha':
            ?>
            <div class="container" id="esqueceuminhasenha">
                <div class="well">
                    <form method="post" class="form-horizontal">
                        <legend><span class="fa-key2"></span> Esqueceu minha senha</legend>
                        <img class="img img-polaroid" src="img/Capa.jpg" alt="capa"/><!--<input type = "text" id = "" -->
                        <div class="control-group"> 
                            <label class="control-label" for="inputEmail"></label>
                            <?php if ($temErros && isset($errosValidacao['email'])) : ?>
                                <span class="erro">
                                    <?php echo $errosValidacao['email']; ?>
                                </span>
                            <?php endif; ?>
                            <div class="input-prepend">
                                <span class="add-on"><i class="fa-envelope"></i></span>
                                <input class="input-xlarge" id="inputEmail" name="email" type="text" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-block btn-primary" type="submit">Recuperar senha agora!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            break;

        case'novasenha':
            ?>
            <div class="container" id="novasenha">
                <div class="well">
                    <form method="post" class="form-horizontal">
                        <legend><span class="fa-key3"></span>Nova Senha</legend>
                        <img class="img img-polaroid" src="img/Capa.jpg" alt="capa" />
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <?php if ($temErros && isset($errosValidacao['novasenha'])) : ?>
                                <span class="erro">

                                    <?php echo $errosValidacao['novasenha']; ?>
                                </span>
                            <?php endif; ?>

                            <div class="input-prepend">
                                <span class="add-on"><i class = "fa-key"></i></span>
                                <input class="input-xlarge" id="inputEmail" name="novasenha" type="text" placeholder="Nova Senha">
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"></label>
                                <?php if ($temErros && isset($errosValidacao['confirmasenha'])) : ?>
                                    <span class="erro">

                                        <?php echo $errosValidacao['confirmasenha']; ?>
                                    </span>
                                <?php endif; ?>

                                <div class="input-prepend">
                                    <span class="add-on"><i class="fa-key2"></i></span>
                                    <input class="input-xlarge" id="inputConfirmarSenha" name="confirmasenha" type="text" placeholder="Confirmar Senha">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-block btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            break;

        default:
            break;
    }
}