<?php
     session_start();
     print_r($_SESSION);

        unset($_SESSION['email_login']);
        unset($_SESSION['senha_login']);
        header('Location: cadastro.html');

     echo "Saiu do sistema";
?>