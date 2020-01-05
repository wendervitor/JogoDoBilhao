<!DOCTYPE html>
<html>
  <head>
    <title>Jogo do Bilhão</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</style>
  </head>
  <body>
    <div class="header">
      <?php include 'page_layout/header.inc'; ?>
    </div>
    <div class="icon-border">
      <i class="fa fa-user fa-2x" aria-hidden="true"></i>   
    </div>
    
    <div class="login-form">
      <form action="trataLogin.php" method="POST">

        <h2>Account Login</h2>
        <input type="text" class="field" placeholder="Username" name="login" ><br>
        <input type="password" class="field" placeholder="Password" name="senha"><br>
        <input class="btn" type="submit" value="Entrar"><br>
        <div>
          <a href="cadastro.php">Sign Up</a>
        </div>
      </form>
    </div>
    <div class="footer">
      <?php include 'page_layout/footer.inc'; ?>
    </div>
  </body>
</html> 