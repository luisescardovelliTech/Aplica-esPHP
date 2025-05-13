<?php
   session_start();
   include("classe/Cep.php");

   $cep = $_REQUEST['cep'];

   $objCep = new Cep();
   $objCep->setCep($cep);
   $dados  = $objCep->buscarDados();
   // transformando o json em array
   $dados = json_decode($dados, true);

   $conteudo = "Logradouro: " . $dados['logradouro'] . "<br>";
   $conteudo = $conteudo . "Bairro: " . $dados ['bairro'] . "<br>";
   $conteudo = $conteudo . "Cidade: " . $dados ['localidade'] . "<br>";
   $conteudo = $conteudo . "UF: " . $dados ['estado'] . "<br>";

   $_SESSION['conteudo'] = $conteudo;

   header("Location: index.php");


?>
