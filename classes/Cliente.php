<?php

class Cliente{
   private $idCliente;
   private $nomeCliente; 
   private $rgCliente;
   private $cpfCliente;
   private $emailCliente;
   private $senhaCliente;
   //encapsulamento: getters e setters

    public function getIdCliente(){
        return $this->idCliente;
    }

    public function setIdCliente ($idCliente){
        $this -> idCliente = $idCliente;
    }

   public function getNomeCliente(){
       return $this->nomeCliente;
   }

   public function setNomeCliente($nomeCliente){
       $this->nomeCliente = $nomeCliente;
   }

   public function getRgCliente(){
       return $this->rgCliente;
   }

   public function setRgCliente($rgCliente){
       $this->rgCliente = $rgCliente;
   }

   public function getCpfCliente(){
        return $this->cpfCliente;
   }

   public function setCpfCliente($cpfCliente){
       $this->cpfCliente = $cpfCliente;
   }

   public function getEmailCliente (){
       return $this->emailCliente;
   }

   public function setEmailCliente ($emailCliente){
       $this->emailCliente = $emailCliente;
   }

   public function getSenhaCliente(){
    return $this->senhaCliente;
   }

    public function setSenhaCliente ($senhaCliente){
    $this -> senhaCliente = $senhaCliente;
    }

    public function cadastrar($cliente){
        $conexao = Conexao::pegarConexao();
        $queryInsert = "INSERT INTO tbcliente(nomeCliente,cpfCliente,rgCliente,emailCliente,senhaCliente)
                        VALUES('".$cliente->getNomeCliente()."'
                        , '".$cliente->getCpfCliente()."'
                        , '".$cliente->getRgCliente()."'
                        , '".$cliente->getEmailCliente()."'
                        , '".$cliente->getSenhaCliente()."')";
        
        $conexao->exec($queryInsert);
        // return 'Cadastro realizado com sucesso'
        return $queryInsert;


    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "select idCliente, nomeCliente,
        cpfCliente, rgCliente, emailCliente,senhaCliente from tbcliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }




   



   
   








}

?>