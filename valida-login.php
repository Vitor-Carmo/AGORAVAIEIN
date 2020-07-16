<?php

    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $perfil = $_POST['perfil'];

    

    switch($perfil){
        case 1: //Administrador
            if(($login=='adm') && ($senha=='123')) {
                session_start();
                $_SESSION ['login-session'] = $login;
                $_SESSION ['senha-session'] = $senha;
                $_SESSION ['perfil'] = $perfil; 
                header("Location: area-restrita-adm/index-area-restrita-adm.php");
            } else{
                header("Location: index.php");
            }
        break;
        case 2://Cliente
            require_once 'global.php';
            $cliente = new Cliente();
            $lista = $cliente->listar();

            $achou = false;

            foreach ($lista as $linha){
                if(($login == $linha['emailCliente']) && ($senha == $linha['senhaCliente'])){
                    $achou = true;
                }
            }

            if($achou){
                session_start();
                $_SESSION ['login-session'] = $login;
                $_SESSION ['senha-session'] = $senha;
                $_SESSION ['perfil'] = $perfil;
                header("Location: area-restrita-cliente/index-area-restrita-cliente.php");

            }else {
                header("Location:index.php");
            }
        break;

    }

?>