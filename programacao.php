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
    <title>Programção</title>
    <link rel="stylesheet" href="estilosite.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="sortcut icon" href="RadioLogo.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="tab-navs.js"></script>
   <script src="load.js"></script>
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
                <li><a href="#">Programação</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="fotos.php">Fotos</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <div id="tabs">
            <div class="tab-links">
                <button data-id="domingo" data-open>Domingo</button>
                <button data-id="segunda">Segunda</button>
                <button data-id="terca">Terça</button>
                <button data-id="Quarta">Quarta</button>
                <button data-id="Quinta">Quinta</button>
                <button data-id="Sexta">Sexta</button>
                <button data-id="Sabado">Sabado</button>
            </div>
            <div class="tab-content">
                <section id="domingo">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Podcast</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Música Pedidas</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                </section>
                <section id="segunda">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                </section>
                <section id="terca">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Podcast</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Música Pedidas</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                </section>
                <section id="Quarta">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                </section>
                <section id="Quinta">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Podcast</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Música Pedidas</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                </section>
                <section id="Sexta">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                </section>
                <section id="Sabado">
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">ManhãShow</div>
                            <p class="image_descricao">5:00 à 12:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">TardeShow</div>
                            <p class="image_descricao">12:00 à 18:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">NoiteShow</div>
                            <p class="image_descricao">18:00 à 00:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">MadrugaShow</div>
                            <p class="image_descricao">00:00 à 5:00</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Podcast</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="RadioWebb.jpg" alt="" class="image_img">
                        <div class="image_overlay image_overlay--blur">
                            <div class="image_title">Música Pedidas</div>
                            <p class="image_descricao">Sem Horário</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

  
 
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
    
    <script src="play.js"></script>
   
    <script src="footer-input.js"></script>
    <script src="scrolltop.js"></script>
    <script src="sistema-de-play.js"></script>
</body>

</html>