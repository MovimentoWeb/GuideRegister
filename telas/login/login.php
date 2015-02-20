

<?php
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'loginInicial':
            ?>
            <div class="container" id="login">
                <!--<alisssoonnnnnnnnnnnnnnnnn> -->
                <div class="well">
                    <h3>
                        Login Inicial
                    </h3>
                    <form class = "form-horizontal">
                    <img src = "img/Capa.jpg" alt = "capa" /><!--<input type = "text" id = "" -->
                        <div class = "control-group">
                            <label class = "control-label" for = "inputEmail"></label>
                            <div class = "input-prepend">
                                <span class = "add-on"><i class = "fa-envelope"></i></span>
                                <input class="input-xlarge" id="inputEmail" type="text" placeholder="E-mail">
                            </div>
                            <div class = "control-group">
                                <label class = "control-label" for = "inputPassword"></label>
                                <div class = "input-prepend">
                                    <span class = "add-on"><i class = "fa-key2"></i></span>
                                    <input class="input-xlarge" id="inputSenha" type="text" placeholder="Senha">
                                </div>
                            </div>
                        </div>
                        <div class = "control-group">
                            <div class = "controls">

                                <a href = "">Esqueceu sua senha ?</a>
                                <button class = "btn btn-block btn-info" type = "button">Entrar</button>
                                <button class = "btn btn-block btn-primary" type = "button">Cadastrar</button>
                            </div>
                        </div>
                </div>
            </form>
            </div>
            <?php
            break;

        case'esqueciMinhaSenha':
            ?>
            <div class="container" id="esqueceuminhasenha">
                <!--<alisssoonnnnnnnnnnnnnnnnn> -->
                <div class="well">
                    <h3>
                        Esqueceu minha senha
                    </h3>
                    <form class = "form-horizontal">
                    <img src = "img/Capa.jpg" alt = "capa" /><!--<input type = "text" id = "" -->
                        <div class = "control-group"> 
                            <label class = "control-label" for = "inputEmail"></label>
                            <div class = "input-prepend">
                                <span class = "add-on"><i class = "fa-envelope"></i></span>
                                <input class="input-xlarge" id="inputEmail" type="text" placeholder="E-mail">
                            </div>
                        </div>
                        <div class = "control-group">
                            <div class = "controls">
                                <button class = "btn btn-block btn-primary" type = "button">Enviar</button>
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
                <!--<alisssoonnnnnnnnnnnnnnnnn> -->
                <div class="well">
                    <h3>Nova Senha</h3>
                    <form class = "form-horizontal">
                    <img src = "img/Capa.jpg" alt = "capa" /><!--<input type = "text" id = "" -->
                        <div class = "control-group">
                            <label class = "control-label" for = "inputEmail"></label>
                            <div class = "input-prepend">
                                <span class = "add-on"><i class = "fa-key"></i></span>
                                <input class="input-xlarge" id="inputEmail" type="text" placeholder="Nova Senha">
                            </div>
                            <div class = "control-group">
                                <label class = "control-label" for = "inputPassword"></label>
                                <div class = "input-prepend">
                                    <span class = "add-on"><i class = "fa-key2"></i></span>
                                    <input class="input-xlarge" id="inputConfirmarSenha" type="text" placeholder="Confirmar Senha">
                                </div>
                            </div>
                        </div>
                        <div class = "control-group">
                            <div class = "controls">
                                <button class = "btn btn-block btn-primary" type = "button">Enviar</button>
                                
                            </div>
                        </div>
                </div>
            </form>
            </div>
            <?php
            break;

        default:
            break;
    }
}
?>