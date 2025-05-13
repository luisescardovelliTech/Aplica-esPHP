<?php
   session_start();
   include("classe/Pais.php");

   $nome = $_REQUEST['pais'];

   $pais = new Pais();
   $pais->setNome($nome);
   $dados  = $pais->buscarDados();
   // transformando o json em array
   $dados = json_decode($dados, true);
   if (isset($dados['status'])&& ($dados['status'] == 404)){
      $conteudo = "Pais Inválido...";

   }else{
      $bandeira = $dados[0]['flags']['png'];
      $conteudo = "<img src='" . $bandeira . "' >";   
   }

   $_SESSION['conteudo'] = $conteudo;

   header("Location: index.php");
?>
