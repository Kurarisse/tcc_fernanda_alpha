<?php
    session_start();
    include_once('conexao.php');

    $logado = $_SESSION['email_login'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO DA PÁGINA -->
    <title>Site de vendas Fernanda ZD Modas - Home</title>

    <!-- IMPORTAÇÃO DE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <!-- IMPORTAÇÃO DE CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
        <!-- INÍCIO CABEÇALHO -->
        <header id="cabecalho">

            <!-- INÍCIO ÁREA DA ESQUERDA -->  
            <!-- INÍCIO MENU -->
            <div class="junto">

                <!-- LOGO -->
            <a href="index.php"><img  class="logo" src="img/logo_logo.png" alt="Imagem de logo" title="Imagem de logo"></a>
            <!-- FIM LOGO -->
            <nav id="nav">
                <button id="btnCelular" aria-label="Abrir menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false"><img src="img/menu.png" alt="Imagem menu hambúrguer" title="Menu de links das páginas"><span>Menu</span></button>

                    <ul id="menu" role="menu">
                        <li id="hover"><a href="index.php" title="Link para a página de início">Home</a></li>
                        <li id="hover"><a href="lingeries.html" title="Link para a página de produtos de lingerie">Lingeries</a></li>
                        <li id="hover"><a href="sexShop.html" title="Link para a página de produtos de sex shop">Sex shop</a></li>
                        <li id="hover"><a href="cosmeticos.html" title="Link para a página de produtos de cosméticos">Cosméticos</a></li>
                        <li id="hover"><a href="sobre.html" title="Link para a página com informações sobre a empresa">Sobre nós</a></li>
                        <li id="hover"><a href="insereProduto.html" title="Link para a página de cadastro de produtos">Cadastro de produtos</a></li>
                    </ul>
            </nav>
            <!-- FIM MENU -->

            <!-- BARRA DE PESQUISA -->
            <form action="" id="barraPesquisa">
                <a class="lupa">
                    <img src="img/lupa.png" alt="Imagem de lupa de pesquisa" width="25px" height="25px">
                </a>
                <input type="text" name="busca" id="busca" placeholder="Pesquisar...">
            </form>
            <!-- FIM BARRA DE PESQUISA -->
        </div>
        <!-- FIM ÁREA DA ESQUERDA -->

        <!-- INÍCIO LINKS ALINHADOS À DIREITA E ACESSIBILIDADE-->
        <div class="direita">
            <div class="alinha">
                <a href="cadastro.html" title="Link para a página de cadastro" class="margem">Login</a>
                <!-- <ul id="menu2">

                    <button id="perfil"><div id="imgPerfil" title="Boneco de perfil" width="20px"></div><span>Perfil</span></button>

                    <ul id="menuPerfil"> -->
                    <a href="perfil.html" title="Link para acesso à página de perfil"><div id="imgPerfil" title="Boneco de perfil" width="20px"></div><span>Perfil</span></a>
                    <a href="sair.php"><img src="img/sair.png" alt="Imagem de símbolo para sair da página" title="Símbolo para sair da página"><span>Sair</span></a>
                    <!-- </ul>
                </ul> -->
                <button id="botaoContraste">&nbsp; / &nbsp;Alto Contraste<div id="imgContraste" title="Símbolo de contraste" width="20px"></div></button>
                <button id="aumentoFonte">&nbsp;Aumento de fonte</button>
            </div>
        </div>
        <!-- FIM LINKS ALINHADOS À DIREITA E ACESSIBILIDADE-->

        </header>
        <!-- FIM CABEÇALHO -->
            
        <!-- BANNER DE PRODUTOS ROTATIVOS -->
        <div id="banner">
            <img src="img/bannerZDModas.png" alt="Banner Fernanda ZD Modas" width="100%" max-width="800px" min-width="300px" title="Banner Fernanda ZD Modas">
       
        <!-- FIM BANNER ROTATIVO -->

        <!-- INÍCIO DISPONIBILIZAÇÃO DE PRODUTOS PRINCIPAIS -->
        <div id="produto">
            

            <h2 id="titulo">
            <?php
            echo "<h1>Bem vindo(a) <u>$logado</u></h1>";
            ?>
            Venha conhecer nossos produtos!</h2>
            <div class="centro">

                <div class="produtos expande">   
                    <a href="lingeries.html">
                        <div class="desc">
                        <h3>Lingeries</h3>
                        <img src="img/produto7.png" alt="Imagem de vestido">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </a>
                        </div>
                </div>

                <div class="produtos expande">   
                    <a href="cosmeticos.html">
                        <div class="desc">
                        <h3>Cosméticos</h3>
                        <img src="img/produto1.png" alt="Imagem de camisa">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </a>
                        </div>
                </div>

                <div class="produtos expande">   
                    <a href="sexShop.html">
                        <div class="desc"> 
                        <h3>Sex shop</h3>
                        <img src="img/produto6.png" alt="Imagem de camiseta">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </a>
                        </div>
                    </div>

            </div>
        </div>
            <!-- FIM DISPONIBILIZAÇÃO DE PRODUTOS PRINCIPAIS -->
        </div>
        </div>

   
        <!-- RODAPÉ -->
        <div id="footer">
            <p>
                <a href="index.php">Home</a>
                <a href="lingeries.html">Lingeries</a>
                <a href="sexShop.html">Sex shop</a>
                <a href="cosmeticos.html">Cosméticos</a>
                <a href="sobre.html">Sobre nós</a>
            </p>
            <span class="reservado">&copy;Todos os direitos reservados</span>
        </div>
        <!-- FIM RODAPÉ -->
   
        <!-- IMPORTAÇÃO DE SCRIPTS -->
        <script src="js/script.js"></script>
</body>
</html>