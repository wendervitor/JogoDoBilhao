<!DOCTYPE html>
<html>

<head>
    <title>Jogo do Bilhão</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header"> <?php include 'page_layout/header.inc'; ?> </div>
    <div class="main">
        <form class="register-form" action="registerUser.php" method="POST">
            <div class="input-block">
                <strong>Registro</strong>
                <input class="register-field" type="text" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="input-block">
                <input class="register-field" type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-block">
                <input class="register-field" type="text" name="username" id="username" placeholder="Usuário" required>
            </div>
            <div class="input-group ">
                <div class="input-block">

                    <input class="register-field" type="password" name="password" id="password" placeholder="Senha" autocomplete="new-password" required>
                </div>
                <div class="input-block">
                    <input class="register-field" type="password" name="repeatPassword" id="password" placeholder="Repita a senha" required>
                </div>
            </div>

            <button class="btn" type="submit">Registrar-se</button><br>
            <a href="index.php">Login</a>

        </form>
    </div>
    <div class="footer"> <?php include 'page_layout/footer.inc'; ?> </div>
</body>

</html>