
<?php
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'loginInicial':
            include_once 'telas/login/validacaologin.php';
            ?>
            <div class="container" id="login">
                <div class="well">
                    <h3>
                        Login Inicial
                    </h3>
                    <form method="post" class="form-horizontal">
                        <img src="img/Capa.jpg" alt="capa" />
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
                                <button class = "btn btn-block btn-info" type="submit">Entrar</button>
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
                    <h3>
                        Esqueceu minha senha
                    </h3>
                    <form method="post" class="form-horizontal">
                    <img src="img/Capa.jpg" alt="capa"/><!--<input type = "text" id = "" -->
                        <div class="control-group"> 
                            <label class="control-label" for="inputEmail"></label>
                            <?php if ($temErros && isset($errosValidacao['esqueciMinhaSenha'])) : ?>
                                <span class="erro">
                                    <?php echo $errosValidacao['esqueciMinhaSenha']; ?>
                                </span>
                            <?php endif; ?>

                            <div class="input-prepend">
                                <span class="add-on"><i class="fa-envelope"></i></span>
                                <input class="input-xlarge" id="inputEmail" name="esqueciMinhaSenha" type="text" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <a href="?pg=login&opcao=novasenha"><button class="btn btn-block btn-primary" type="button">Recuperar senha agora!</button></a>
                            </div>
                        </div>
                </div>
            </form>
            </div>
            <?php
            break;

        case'novasenha':
            ?>
            <div class="container" id="novasenha">
                <div class="well">
                    <h3>Nova Senha</h3>
                    <form method="post" class="form-horizontal">
                        <img src="img/Capa.jpg" alt="capa" />
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
                                <div class="input-prepend">
                                    <span class="add-on"><i class="fa-key2"></i></span>
                                    <input class="input-xlarge" id="inputConfirmarSenha" name="confirmasenha" type="text" placeholder="Confirmar Senha">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-block btn-primary" type="button">Enviar</button>
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