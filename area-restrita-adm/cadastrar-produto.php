<?php 

require_once 'global.php';

try{
    header("Location: form-cadastro-produto.php");

    $produto = new Produto();
    $produto->setDescProduto($_POST['txtDescricaoProd']);
    $produto->setValorProduto($_POST['txtValorProd']);
    $produto->setQtdeProduto($_POST['txtEstoque']);

    $produto->setFotoProduto($_FILES['foto']['tmp_name']);
    $produto->setNomeFotoProduto($_FILES['foto']['name']);

    $produto->cadastrar($produto);

    $produto = $produto -> consultarId($produto);

    $extensao = substr(strstr($produto->getNomeFotoProduto(),"."),1);
    $produto->setNomeFotoProduto("img/Produtos/".$produto->getIdProduto().".",$extensao);

    $produto->cadastrarFoto($produto);

    move_uploaded_file($produto->getFotoProduto(),"../".$produto->getNomeFotoProduto());

}catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}



?>