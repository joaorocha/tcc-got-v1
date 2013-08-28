<?php

$top = '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1.js"></script>
    <script type="text/javascript" src="js/barousel.js"></script>
    <script type="text/javascript" src="js/jquery.ba-throttle-debounce.min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/jquery.transit.min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
    <script type="text/javascript">
    <!--Script do carousel-->

        $.fn.carouFredSel.defaults.items.visible    = 1;
        $.fn.carouFredSel.defaults.direction        = "up";
        $(document).ready(function() {
            $("#foo3").carouFredSel({
                    items       : 1,
                    direction   : "down",
                    auto : {
                        easing      : "elastic",
                        duration    : 1000,
                        timeoutDuration: 5000,
                        pauseOnHover: true
                    }
                }).find(".slide").hover(
                    function() { $(this).find("div").slideDown(); },
                    function() { $(this).find("div").slideUp(); }
                );


        });
    </script>
    <meta content="text/html;charset=UTF-8" http-equiv="content-type">
    <title>Game Of Thrones</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!--CABEÇALHO-->
    <header>
        <nav class="navHeader">
            <div id="logo">
                <a href="#"><img src="img/logodw.png" width="150" height="30"></a>
            </div>
            <ul class="menu">
                <li class="item1"><a href="#">Jogos</a>
                    <ul id="sub_menu">
                        <li><a href="#">Game Of Thrones-The Game</a></li>
                        <li><a href="#">The Adventures of Cpt. Cleave</a></li>
                        <li><a href="#">Nightmare</a></li>
                        <li><a href="#">Mobile Games</a></li>   
                    </ul>
                </li>   
                <li><a href="#http://www.darkwingsgames.com.br/contato">Contato</a></li>
                <li><a href="#http://www.darkwingsgames.com.br/jobs">Trabalhe conosco</a></li>
                <li><a href="#http://www.darkwingsgames.com.br/parceiros">Parceiros</a></li>
                <li><a href="#http://www.darkwingsgames.com.br/servicos">Outros serviços</a></li>
            </ul>
            <div id="logWith">
                <a href="#"><img src="img/logWith.png" width="154" height="22"></a>
            </div>
            <div id="redesSociais">
                <a href="https://www.facebook.com/darkwingsgames"><img src="img/Cracked-Facebook-Logo.png" width="30" height="30"></a>
                <a href="#"><img src="img/twitter-logo-break.png" width="30" height="30"></a>
            </div>
        </nav>
    </header>
    <!--TUDO-->
    <div id="todo">
        <!--BANNER-->
        <div id="banner">
            <a href="#"><img src="img/bannergot2.png" width="900" height="178"></a>
        </div>
        <!--MENU SUPERIOR-->
        <div id="menu_superior">
            <nav>
                <ul class="menu_sup">
                    <li class="item1"><a href="#">Início</a></li>
                    <li><a href="#">Notícias</a>
                        <ul id="sub_menu1">
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Geral</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Guias</a>
                        <ul>
                            <li><a href="#">Básico</a></li>
                            <li><a href="#">Intermediário</a></li>
                            <li><a href="#">Avançado</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fórum</a></li>
                    <li><a href="#">Cadastro</a></li>
                    <li><a href="#">Ranking</a>
                        <ul>
                            <li><a href="#">Geral</a></li>
                            <li><a href="#">Casas</a></li>
                            <li><a href="#">Riqueza</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Suporte</a></li>
                </ul>
            </nav>
        </div>
        <!--MENU LATERAL-->
        <div id="menu_lateral">
            <nav>
                <ul class="menu_lat">
                    <li class="item1"><img src="img/principal1.png" width="200" height="90"></li>
                    <li><a href="#">História</a></li>
                    <li><a href="#">Compre Créditos</a></li>
                    <li><a href="#">Papéis de parede</a></li>
                    <li><a href="#">Sobre GoT</a></li>
                    <li><a href="#">Entre em Contato</a></li>
                    <li><img src="img/usrpanel.png" width="200" height="90"></li>
                    <li><a href="#">Dados da conta</a></li>
                    <li><a href="#">Mercado</a></li>
                    <li><a href="#">Missões</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">P.v.P</a></li>
                </ul>
            </nav>
        </div>';

$bottom = '<footer>
        Jogo e sistemas © CopyRight 2013 by www.gotgame.com - Todos os direitos reservados.<br>
        Personagens, livros e séries © CopyRight 1996 by HBO George R. R. Martin - Todos os direitos reservados.<br>
        Powered by BSG: <br> <a href="#"><img src="img/minilogo.png"></a>
        </footer></div>
</body>
</html>';


// // Inclua o seguinte codigo nas paginas:
// include_once "template.php";
// $content = "--html--";
// 
// echo $top;
// echo $content;
// echo $bottom;
?>