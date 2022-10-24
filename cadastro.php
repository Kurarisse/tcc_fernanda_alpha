<?php

    include('conexao.php');

    if(isset($_POST['submit'])){

        
        $email_login = ['email_login'];
        $senha_login = ['senha_login'];

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $logradouro = $_POST['logradouro'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        $sql_cadastro = $conexao->query("INSERT INTO usuarios (nome,sobrenome,email,telefone,logradouro,cpf,senha) VALUES ('$nome','$sobrenome','$email','$telefone','$logradouro','$cpf','$senha')");


        if ($sql_cadastro == true) {
            echo "<script>
            alert('Cadastro efetuado com sucesso!');
            window.location.href = 'cadastro.html';
            </script>";
       } else {
            echo "<script>
            alert('Falha ao cadastrar');
            window.location.href = 'cadastro.html';
            </script>";
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
       }
       mysqli_close($conexao);

    }

    
?>
