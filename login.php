<?php
     session_start();
     include('conexao.php');
     if(isset($_POST['submit_login']) && !empty($_POST['email_login']) && !empty($_POST['senha_login'])){

         
         $email_login = $_POST['email_login'];
         $senha_login = $_POST['senha_login'];

         $sql_login = $conexao->query("SELECT * FROM usuarios WHERE email = '$email_login' and senha = '$senha_login'");

         if(mysqli_num_rows($sql_login) < 1){
             unset($_SESSION['email_login']);
             unset($_SESSION['senha_login']);
             echo "<script>
            alert('Usuário não registrado');
            window.location.href='cadastro.html';
            </script>";
         }else{
             $_SESSION['email_login'] = $email_login;
             $_SESSION['senha_login'] = $senha_login;
             header('Location: index.php');
         }

     }
?>