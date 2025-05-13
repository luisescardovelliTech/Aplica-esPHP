<?php

   class Pais 
   {

   	   private $host;
   	   private $nome;
   	  

   	   function __construct($host = 
   	   	 "https://restcountries.com/v3.1/name/",
   	   	 $nome = "Brazil" ){
   	   	  $this->host     =  $host;
   	   	  $this->nome = $nome;
   	   }

   	   public function setNome($nome){
   	   	 $this->nome  =  $nome;
   	   }

       // ao executar essa função, todos
       // os dados devem estar ok
       // objeto inicializado cep informado
   	   public function buscarDados()
   	   {
          $url = $this->host . 
                 $this->nome;

          // cria objeto para conexão
          $curl = curl_init();
          curl_setopt_array($curl,
         	[
              CURLOPT_RETURNTRANSFER => 1,
              CURLOPT_URL => $url
            ]);
        
          $dados = curl_exec($curl);
          return $dados; 
   	   }

   
   }
?>