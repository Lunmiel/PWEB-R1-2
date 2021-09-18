<?php
    session_start();
    const host = 'localhost';
    const dbname = 'login';
    const user = 'root';
    const senha = '';

    try {
      $conectar = new PDO('mysql:host='.host.';dbname='.dbname.'', user, senha, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
      $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }catch (Exception $e) 
      echo 'Erro ao conectar ao banco de dados';
      echo $e;
    } 
?>