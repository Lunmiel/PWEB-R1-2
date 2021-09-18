<?php
  include_once('conexão.php');
  mysql_select_db($dbname, $conectar);
  $query = sprintf("SELECT nome, unome, email FROM usúario");
  $dados = mysql_query($query, $conectar) or die(mysql_error());
  $linha = mysql_fetch_assoc($dados);
  $total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>Listagem</title>
</head>
<body>
  <h1> Listagem de Usúarios </h1>
  <h2>Todos os Usúarios</h2>
<?php
	if($total > 0) {
		do {
?>
			<p><?=$linha['nome']?> / <?=$linha['unome']?> / <?=$linha['email']?></p>
<?php
		}while($linha = mysql_fetch_assoc($dados));
	}
?>
  <h2>Busacar um Usúario</h2>
  <form method="POST">
    Nome do usuário:
    <input type="text" name="unome" required><br>
     <input type="submit" value="Buscar" name="buscar"><br>
  </form>
<?php
  $unome = $_POST['unome'];
  $verificar = mysqli_query($conectar, "SELECT *  FROM usúario WHERE unome = '$unome'");
  $encontrados = mysqli_num_rows($verificar);
  if(!$encontrados > 0){
    echo "Usuário encontrado: <?=$linha['nome']?> / <?=$linha['unome']?> / <?=$linha['email']?>"
  }else{
    echo "Nenhum usuário encontrado."
  }
?>
</body>
</html>
<?php
mysql_free_result($dados);
?>