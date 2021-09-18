<! DOCTYPE html>
<html>
  <head>
    <meta charset ="UFT-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Informar dados do usuário<h1>
    <form action="logar.php" method="POST">
      Nome de usúario:<br>
      <input type="text" name="unome" required><br>
      <input type="password" name="senha" required><br>
      <input type="submit" value="Entrar" name="entrar"><br>
    </form>
    <a href='cadastrar.php'>Cadastrar novo usuário</a>
  </body>
</html>