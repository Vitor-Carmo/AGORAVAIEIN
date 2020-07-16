<?php



require_once 'global.php';
// require once serve para conectar funções entre os outros arquivos .php
//global carrega as classes , onde eu precisar.
//Usando uma classe global, para usar o once, me permite que eu apenas escreva uma linha de codigo, 
//do que fazer o metodo toda vez, em todos os arquivos


try {

    header("Location:index.php");

    $cliente = new Cliente(); // nesse caso, a classe Cliente é mandada para o global once.
    $cliente -> setNomeCliente($_POST['txtNome']);
    $cliente -> setEmailCliente($_POST['txtEmail']);
    $cliente -> setSenhaCliente($_POST['txtSenha']);
    $cliente -> setCpfCliente($_POST['txtCPF']);
    $cliente -> setRgCliente($_POST['txtRG']);


    $cliente ->cadastrar($cliente);
    
} catch(Exception $e){
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}







?>