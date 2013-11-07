<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="pt-br" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/css/effect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/css/demo.css">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/js/jquery-2.0.3.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/js/modernizr.custom.46884.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <!--BARRA DE NAVEGAÇÃO-->
    <div id="navBar">
        <nav id="nav1" class="cl-effect-21">
            <a>Jogos</a>
            <a>Contato</a>
            <a>Trabalhe Conosco</a>
            <a>Parceiros</a>
            <a>Outros Serviços</a>
         </nav>
    </div><!--FIM BARRA DE NAVEGAÇÃO-->
    <!--BANNER-->
    <div id="banner">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/bannergot2.png" width="930" height="300"></a>
    </div><!--FIM BANNER-->
    <!--TUDO-->
    <div id="tudo">

        <!--MENU SUPERIOR-->
        <div id="menu_sup">
            <nav id="nav2" class="cl-effect-21">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>">Início</a>
                <a href="javascript:void(0)">Notícias</a>
                <a href="javascript:void(0)">Guias</a>
                <a href="javascript:void(0)">Fórum</a>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/usuario/create">Cadastro</a>
                <a href="javascript:void(0)">Ranking</a>
                <a href="javascript:void(0)">Suporte</a>
            </nav>
        </div><!--FIM MENU SUPERIOR-->
        <!--LATERAL ESQUERDA-->
        <div id="lateral-esq">
            <!--MENU LATERAL-->
            <div id="menu_lateral">
                <ul class="navLat">
                    <li><h2>Principal</h2></li>
                    <li><a href="javascript:void(0)">História</a></li>
                    <li><a href="javascript:void(0)">Compre Créditos</a></li>
                    <li><a href="javascript:void(0)">Sobre GoT</a></li>
                </ul>
            </div><!--FIM MENU LATERAL-->
            <!--PAINEL DE CONTROLE-->
            <div id="painel">
                <ul class="painelLat">
                    <li><h2>Painel</h2></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Login</a></li>
                    <li><a href="javascript:void(0)">Recuperar Senha</a></li>
                    <li><a href="javascript:void(0)">Regras</a></li>
                    <li><a href="javascript:void(0)">F.A.Q</a></li>
                </ul>
            </div><!--FIM PAINEL DE CONTROLE-->
            <!--PUBLICIDADE-->
            <div id="publicidade">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/background.png" width="150" height="500">
            </div><!--FIM PUBLICIDADE-->
        </div><!--FIM LATERAL ESQUERDA-->

        <?php echo $content; ?>

        <!--REDES-->
        <div id="redes">
            <!--FACEBOOK-->
            <div id="facebook">
                Facebook
            </div><!--FACEBOOK-->
            <!--TWITTER-->
            <div id="twitter">
                    Twitter
                    <!--<a class="twitter-timeline"  href="https://twitter.com/Rickinbsb"  data-widget-id="398267477240475648">Tweets by @Rickinbsb</a>
                    <script>
                        !function(d,s,id) {
                            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                            if(!d.getElementById(id)) {
                                js=d.createElement(s);
                                js.id=id;
                                js.src=p+"://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js,fjs);
                            }
                        }
                        (document,"script","twitter-wjs");
                    </script>-->
            </div><!--FIM TWITTER-->
        </div><!--FIM REDES-->
        <!--FOOTER-->
        <div id="footer">
            <footer>
                <p>Jogo e sistemas © CopyRight 2013 by www.gotgame.com - Todos os direitos reservados.
                </p>
                <p>Personagens, livros e séries © CopyRight 1996 by HBO George R. R. Martin - Todos os direitos reservados.</p>
            </footer>
        </div><!--FIM FOOTER-->
    </div><!--FIM TUDO-->

</div><!-- page -->

</body>
</html>