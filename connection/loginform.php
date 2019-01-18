<p>Entrar na Colmeia</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Login</label>
            <input name="username">
            <span class="help-block"><?php echo $username_err; ?></span>
            <label>Senha</label>
            <input type="password" name="password">
            <span class="help-block"><?php echo $password_err; ?></span>
            <br>
            <button type="submit" class="btn btn-primary cor9" value="submit">Entrar</button>
            </form>
            <a href="loginprofessor.php" class="perfilbox-link" style=""><label>Entrar como professor</label></a>