<?php

   class Cep 
   {

   	   private $host;
   	   private $cep;
   	   private $tipoDado;

   	   function __construct($host = 
   	   	 "https://viacep.com.br/ws/",
   	   	 $tipoDado = "/json/" ){
   	   	  $this->host     =  $host;
   	   	  $this->tipoDado =  $tipoDado;
   	   }

   	   public function setCep($cep){
   	   	 $this->cep  =  $cep;
   	   }

       // ao executar essa função, todos
       // os dados devem estar ok
       // objeto inicializado cep informado
   	   public function buscarDados()
   	   {
          $url = $this->host . 
                 $this->cep  .
                 $this->tipoDado;

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