<?php

class Produto{
    private $idProduto;
    private $descricaoProduto;
    private $valorProduto;
    private $qnteProduto;
    private $fotoProduto;
    private $nomeFotoProduto;

    public function getIdProduto(){
        return $this->idProduto;
    }
    public function getDescProduto(){
        return $this->descricaoProduto;
    }
    public function getValorProduto(){
        return $this->valorProduto;
    }
    public function getQnteProduto(){
        return $this->qnteProduto;
    }
    public function getFotoProduto(){
        return $this->fotoProduto;
    }
    public function getNomeFotoProduto(){
        return $this->nomeFotoProduto;
    }
    public function setIdProduto($id){
        $this->idProduto = $id;
    }
    public function setDescProduto($desc){
        $this->descricaoProduto = $desc;
    }
    public function setValorProduto($valor){
        $this->valorProduto = $valor;
    }
    public function setQtdeProduto($qtde){
        $this->qnteProduto = $qtde;
    }
    public function setFotoProduto($foto){
        $this->fotoProduto = $foto;
    }
    public function setNomeFotoProduto($nomeFoto){
        $this->nomeFotoProduto = $nomeFoto;
    }

    public function cadastrar ($produto){
        $conexao = Conexao::pegarConexao();
        //statement
        $stmt = $conexao->prepare("insert into tbproduto
                                 (descricaoProduto,valorProduto,qnteProduto) 
                                 values(?,?,?)");
        $stmt->bindParam(1,$produto->descricaoProduto);
        $stmt->bindParam(2,$produto->valorProduto);
        $stmt->bindParam(3,$produto->qnteProduto);
        $stmt->execute();

        return 'Produto cadastrado com sucesso';
    }

    public function consultarId($produto){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT MAX(idProduto) as id FROM tbproduto";
        $resultado = $conexao->query($querySelect);
        while($row = $resultado->fetch(PDO::FETCH_OBJ))
            $produto->idProduto = $row->id;
            return $produto;
    }

    public function cadastrarFoto($produto){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare("UPDATE tbproduto SET fotoProduto = ?
                                    WHERE idProduto = ?");
        $stmt->bindParam(1,$produto->NomeFotoProduto);
        $stmt->bindParam(2,$produto->idProduto);
        $stmt->execute();

        return 'Foto cadastrada com sucesso';
    }

}






















?>