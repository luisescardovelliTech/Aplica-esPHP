<?php
  session_start();
  $paginaPais = file_get_contents("html/pais.html");
  $conteudo = "";
  if(isset($_SESSION['conteudo'])){
    $conteudo = $_SESSION['conteudo'];
  }


  $paginaPais = str_replace("#dados", $conteudo, 
                           $paginaPais);
  echo $paginaPais;


?>