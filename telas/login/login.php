

<?php
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'loginInicial':
            ?>
            <div class="container" id="login">
                <!--<alisssoonnnnnnnnnnnnnnnnn> -->
                <form class = "form-horizontal well">
                <img src = "img/Capa.jpg" alt = "capa" /><!--<input type = "text" id = "" -->
                    <div class = "control-group">
                        <label class = "control-label" for = "inputEmail"></label>
                        <div class = "input-prepend">
                            <span class = "add-on"><i class = "icon-envelope"></i></span>
                            <input class = "span2" id = "inputEmail" type = "text" placeholder = "Email">
                        </div>
                        <div class = "control-group">
                            <label class = "control-label" for = "inputPassword"></label>
                            <div class = "controls">
                                <input type = "password" id = "inputPassword" placeholder = "Senha">
                            </div>
                        </div>
                        <div class = "control-group">
                            <div class = "controls">

                                <a href = "">Esqueceu sua senha ?</a>

                                <button class = "btn btn-large btn-block btn-primary" type = "button">Entrar</button>
                                <button class = "btn btn-large btn-block btn-primary" type = "button">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            break;

        case'esqueciMinhaSenha':
            ?>
            <div class="container" id="login">
                <!--<alisssoonnnnnnnnnnnnnnnnn>-->
                <form class="form-horizontal well">
                    <img src="img/Capa.jpg" alt="capa" /><!--                        <input type="text"  id="" -->
                    <div class="control-group">
                        <label class="control-label" for="inputEmail"></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span2" id="inputEmail" type="text" placeholder="Email">
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword"></label>
                            <div class="controls">
                                <input type="password" id="inputPassword" placeholder="Senha">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <a href="">Esqueceu sua senha ?</a> 

                                <button class="btn btn-large btn-block btn-primary" type="button">Entrar</button>
                                <button class="btn btn-large btn-block btn-primary" type="button">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            break;

        case'novasenha':
            ?>
            <div class="container" id="login">
                <!--<alisssoonnnnnnnnnnnnnnnnn>-->
                <form class="form-horizontal well">
                    <img src="img/Capa.jpg" alt="capa" /><!--                        <input type="text"  id="" -->
                    <div class="control-group">
                        <label class="control-label" for="inputEmail"></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span2" id="inputEmail" type="text" placeholder="Email">
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword"></label>
                            <div class="controls">
                                <input type="password" id="inputPassword" placeholder="Senha">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <a href="">Esqueceu sua senha ?</a> 

                                <button class="btn btn-large btn-block btn-primary" type="button">Entrar</button>
                                <button class="btn btn-large btn-block btn-primary" type="button">Cadastrar</button>
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