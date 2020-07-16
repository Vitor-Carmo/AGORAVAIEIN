<?php
    SESSION_START();
    UNSET($_SESSION['login-session']);
    UNSET($_SESSION['senha-session']);
    unset($_SESSION['perfil']);
    session_destroy();
    header("Location:index.php");





?>