<! DOCTYPE html>
<html>
  <head>
    <meta charset ="UFT-8">
    <title>Castrar Usúario</title>
  </head>
  <body>
    <h1>Casadastr novo usuário<h1>
    <form action="cadastrar.php" method="POST">
      Nome completo:<br>
      <input type="text" name="nome" required><br>
      Nome de usúario:<br>
      <input type="text" name="unome" required><br>
      E-mail:<br>
      <input type="email" name="email" required><br>
      Criar senha:<br>
      <input type="password" name="senha" required><br>
      <input type="submit" value="Cadastrar" name="cadastrar"><br>
    </form>
    <a href='login.php'>Fazer login</a>
  </body>
</html>