<?php
ob_start();
session_start();

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  switch ($id) {
    case '1':

      break;
    case '2':

      break;
    case '3':
      $_SESSION['user'] = null;
      session_destroy();
      break;
    case 4:

      break;
    default:
      # code...
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Jogo do Bilhão</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <link rel="stylesheet" type="text/css" href="../style/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include '../page_layout/header.inc'; ?>
    <div class="login-form-container">
        <div class="login-form">
            <div class="icon-border">
                <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            </div>
            <strong>Login</strong>
            <form class="fields" action="../backend/trataLogin.php" method="POST">

                

                <input style="display:none" type="text" name="fakeusernameremembered" />
                <input type="text" class="field" placeholder="Username" name="login" autocomplete="off" required><br>

                <input style="display:none" type="password" name="fakepasswordremembered" />
                <input type="password" class="field" placeholder="Password" name="senha" autocomplete="off" required><br>

                <input class="btn" type="submit" value="Entrar"><br>

                <div>
                    <a href="./signUp.php">Inscreva-se</a>
                </div>
            </form>
        </div>
    </div>
    <?php include '../page_layout/footer.inc'; ?>

</body>

</html>