<?php
include("config.php");
include("mensagem.php"); 
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rádio Web</title>
    <link rel="stylesheet" href="estilosite.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="sortcut icon" href="RadioLogo.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        #menu {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #menu nav {
            position: absolute;
        }

        #menu nav ul li {
            text-align: center;
            width: 100%;
        }

        #menu nav>a {
            color: #ffffff;
        }

        #menu nav ul li a {
            color: #ffffff;
        }
    </style>
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
                <li><a href="#">Home</a></li>
                <li><a href="programacao.php">Programação</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="fotos.php">Fotos</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>

    <div class="slider">

        <div class="slides">

            <!-- buttons começa -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- butão termina -->
            <!-- imagem slider  -->

            <div class="slide primeiro">
                <img src="slide-01.png" alt="">
            </div>
            <div class="slide">
                <img src="slide-02.jpg" alt="">
            </div>
            <div class="slide">
                <img src="slide-03.jpg" alt="">
            </div>
            <div class="slide">
                <img src="slide-04.png" alt="">
            </div>

            <!-- imagem slider fim -->
            <!--Navegação Automatica  -->
            <div class="navegacao-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!--Navegação Automatica Fim -->
        </div>
        <!-- Manual Navegação -->
        <div class="navegacao-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!-- Manual Navegação fim -->

    </div>
    <div class="box">
        <div class="slide-img">
            <img src="news-01.jpg" alt="">
            <div class="overlay">
                <a href="https://portal.ifrn.edu.br/campus/reitoria/noticias/inscricoes-dos-processos-seletivos-para-2021-seguem-abertas-ate-22-de-janeiro" class="meio-btn-overlay" target="_black">Ir No Site do IFRN</a>
            </div>
        </div>
        <div class="detalhe-box">
            <div class="info-tipo">
                <a href="#">Processos Seletivos</a>
                <span>IFRN Edital 2021 </span>
            </div>
            <a href="#" class="dia">Dia 01/03/2021</a>
        </div>
    </div>

    <div class="box">
        <div class="slide-img">
            <img src="news-02.png" alt="">
            <div class="overlay">
                <a href="https://portal.ifrn.edu.br/campus/reitoria/noticias/abertas-inscricoes-para-estagio-de-pos-doutorado-no-exterior" class="meio-btn-overlay" target="_black">Ir No Site do IFRN</a>
            </div>
        </div>
        <div class="detalhe-box">
            <div class="info-tipo">
                <a href="#">Pós-Doutorado</a>
                <span>Estágio abertas 2021</span>
            </div>
            <a href="#" class="dia">Dia 15/09/2020</a>
        </div>
    </div>


    <div class="box">
        <div class="slide-img">
            <img src="news-03.png" alt="">
            <div class="overlay">
                <a href="https://portal.ifrn.edu.br/campus/caico/noticias/ifrn-fornecera-chips-a-estudantes-em-situacao-de-vulnerabilidade" class="meio-btn-overlay" target="_black">Ir No Site do IFRN</a>
            </div>
        </div>
        <div class="detalhe-box">
            <div class="info-tipo">
                <a href="#">Projetos Alunos</a>
                <span>Chips a estudantes...</span>
            </div>
            <a href="#" class="dia">Dia 05/01/2020</a>
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
        <form action="?" method="POST">
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
    
    <script>
        var contar = 1;
        setInterval(function () {
            document.getElementById('radio' + contar).checked = true;
            contar++;
            if (contar > 4) {
                contar = 1;
            }
        }, 5000);
    </script>
    <script src="play.js"></script>
    <script src="footer-input.js"></script>
    <script src="scrolltop.js"></script>
    <script src="sistema-de-play.js"></script>
</body>

</html>