<?php
  include_once('conexão.php');
  $nome = $_POST['nome'];
  $unome = $_POST['unome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $criptografada = crypt($senha);
  if($usuario == '' || $unome == '' || $email=='' || $senha ==''){
    echo 'Preencha o campo vazio.';
  }else{
    $verificar = mysqli_query($conectar, "SELECT * FROM usúario WHERE unome = '$unome'");
    $encontrados = mysqli_num_rows($verificar);

    if(!$encontrados > 0){
      $verificar = mysqli_query($conectar, "SELECT * FROM usúario WHERE email = '$email'");
      $encontrados = mysqli_num_rows($verificar);
      if(!$encontrados > 0){ 
        $enviar = $conectar->prepare("INSERT INTO tb_usuarios VALUES (null, ?, ?, ?, ?)");
        $enviar->execute([$usuario, $unome, $email, $criptografada]);
        echo 'Usuário cadastrado com sucesso';
      }else{
        echo 'E-mail já cadastrado!'
      }
    }else{
      echo 'Nome de usúario já cadastrado!'
    }
  }
?>