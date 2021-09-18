<?php
  include_once('conexão.php');
  $unome = $_POST['unome'];
  $senha = $_POST['senha'];
  $verificar = mysqli_query($conectar, "SELECT senha FROM usúario WHERE unome = '$unome'");
  if(crypt($senha,$verificar)) == $verificar){
    echo "Login realizado com sucesso."
    header("Location: listagem.php");
  }else{
    echo "Nome e/ou senha incorretos.";
  }
?>