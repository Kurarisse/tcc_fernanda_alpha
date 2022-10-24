<?php

include_once('conexao.php');
	$nome=$_POST['nome'];
	$imagem = $_FILES['arquivo']['name'];
    $quantidade = $_POST['quantidade'];
    $tamanho = $_POST['tamanho'];
    $descricao = $_POST['desc'];

    $sql_add = "INSERT INTO produtos (nome, quantidade, tamanho, descricao, imagem) VALUES ('$nome','$quantidade','$tamanho','$descricao', '$imagem')";
    $resultado = mysqli_query($conexao, $sql_add);
    $ultimo_id = mysqli_insert_id($conexao);
        if ($resultado == true) {
            echo "<script>
            alert('Cadastro de produto efetuado com sucesso');
            window.location.href = 'insereProduto.html';
            </script>";
                
        }else{
            echo "<script>
            alert('Falha ao cadastrar prodduto');
            window.location.href = 'insereProduto.html';
            </script>";
        }
        mysqli_close($conexao);

        $_UP['pasta'] = 'imagens/produtos/' . $ultimo_id . '/';
        mkdir($_UP['pasta'], 0777);

        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $imagem)){
            echo "Imagem salva com sucesso!";
        }
?>