<?php
  session_start();
  $paginaCep = file_get_contents("html/cep.html");
  $conteudo = "";
  if(isset($_SESSION['conteudo'])){
    $conteudo = $_SESSION['conteudo'];
  }


  $paginaCep = str_replace("#dados", $conteudo, 
                           $paginaCep);
  echo $paginaCep;


?>