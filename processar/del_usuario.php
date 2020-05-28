<?php
session_start();
include_once("../seguraca.php");
include_once("../conexao.php");
$id          = $_GET['id'];

$query = mysqli_query($conectar,"DELETE FROM funcionario WHERE id = $id");

  if(mysqli_affected_rows($conectar)!= 0){
      header("Location: ../administrativo.php");
  }
?>