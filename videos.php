<?php
include("config.php");
include("mensagem.php"); 
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link rel="stylesheet" href="estilosite.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="sortcut icon" href="RadioLogo.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div id="playing" class="flex-box">
        <audio src="http://127.0.0.1:8000/ifmusica" id="audio" preload="none"></audio>
        <div id="audios">
            <button id="play">
                <i class="fa fa-play"></i>
            </button>
            <button id="mutebtn"><i class="fa fa-volume-up"></i></button>
        </div>
    </div>
    <button id="btnScrool">
        <i class="fa fa-arrow-up"></i>
    </button>
    <div id="menu">
        <nav>

            <a href="#">Rádio Web</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="programacao.php">Programação</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="fotos.php">Fotos</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>

    <div id="container-imagem">

        <h2>Vídeos da Radio</h2>
        <div class="social">
            <!-- <a href="" title="Mande uma mensagem pra mim" class="fa fa-whatsapp" target="_blank"></a> -->
            <a href="https://www.instagram.com/radioescolarifrn/" title="Siga meu instagram" class="fa fa-instagram"
                target="_blank"></a>
            <!-- <a href="" title="Seja no Facebook" class="fa fa-facebook" target="_blank"></a> -->
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" title="Conheça meu canal"
                class="fa fa-youtube" target="_blank"></a>
        </div>
        <div id="imagens">
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" target="_blank">
                <img src="video-01.jpg" class="img_pequeno">
            </a>
        </div>
        <div id="imagens">
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" target="_blank">
                <img src="video-02.jpg" class="img_pequeno">
            </a>
        </div>
        <div id="imagens">
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" target="_blank">
                <img src="video-03.jpg" class="img_pequeno">
            </a>
        </div>
        <div id="imagens">
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" target="_blank">
                <img src="video-04.jpg" class="img_pequeno">
            </a>
        </div>

    </div>

    <footer>
        <h2>Redes Sociais</h2>
        <div class="social-media">
            <!-- <a href="" title="Mande uma mensagem pra mim" class="fa fa-whatsapp" target="_blank"></a> -->
            <a href="https://www.instagram.com/radioescolarifrn/" title="Siga meu instagram" class="fa fa-instagram"
                target="_blank"></a>
            <!-- <a href="" title="Seja no Facebook" class="fa fa-facebook" target="_blank"></a> -->
            <a href="https://www.youtube.com/channel/UCEoxxtXdjrVTmIl-op0kT0w" title="Conheça meu canal"
                class="fa fa-youtube" target="_blank"></a>
        </div>
        <form action="videos.php" method="POST">
            <h3 class="title">Contato nós</h3>
            <div class="input-container ">
                <input type="text" name="name" class="input">
                <label for="">Nome</label>
                <span>Nome</span>
            </div>
            <div class="input-container">
                <input type="email" name="email" class="input">
                <label for="">Email</label>
                <span>Email</span>
            </div>

            <div class="input-container">
                <input type="tel" name="tell" class="input">
                <label for="">Telefone</label>
                <span>Telefone</span>
            </div>
            <div class="input-container textarea ">
                <textarea name="mensagem" class="input"></textarea>
                <label for="">Mensagem</label>
                <span>Mensagem</span>
                <input type="submit" value="Enviar" class="btn">
            </div>
        </form>
    </footer>
    <script src="play.js"></script>
    <script src="footer-input.js"></script>
    <script src="scrolltop.js"></script>
    <script src="sistema-de-play.js"></script>
</body>

</html>
