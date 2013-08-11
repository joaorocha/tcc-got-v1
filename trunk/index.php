<?php

include_once "template.php";

$middle = '<div id="centro">
    <!--CAROUSEL-->
    <div class="html_carousel">
        <div id="foo3">
            <!--CONTEÚDO DO HOVER-->
            <div class="slide">
                <img src="img/image_1.jpg" alt="carousel 1" width="620" height="355" />
                <div>
                    <h4>Infinity</h4>
                    <p>A concept that in many fields refers to a quantity without bound or end.</p>
                </div>
            </div>
            <div class="slide">
                <img src="img/image_2.jpg" alt="carousel 2" width="620" height="355" />
                <div>
                    <h4>Circular journey</h4>
                    <p>An excursion in which the final destination is the same as the starting point.</p>
                </div>
            </div>
            <div class="slide">
                <img src="img/image_3.jpg" alt="carousel 3" width="620" height="355" />
                <div>
                    <h4>jQuery</h4>
                    <p>jQuery is a JavaScript library designed to simplify the client-side scripting.</p>
                </div>
            </div>
            <div class="slide">
                <img src="img/image_4.jpg" alt="carousel 4" width="620" height="355" />
                   <div>
                    <h4>Carousel</h4>
                    <p>A carousel is an amusement ride consisting of a rotating circular platform with seats.</p>
                   </div>
               </div>
            </div>
        <div class="clearfix"></div>
    </div>
    <!--CAMPO DE NOTÍCIAS-->
    <div id="campo_noticias">
        <div class="noticias">
            <a href="#http://www.gotgame.com.br/news1"><img src="img/image_1.jpg" width="150" height="100"></a>
            <a href="#http://www.gotgame.com.br/news1"><h2>Notícia 1</h2></a>
            <p>Aqui vai as informaçoes da noticia 1</p>
            <a href="#http://www.gotgame.com.br/news1" id="readmore">read more...</a>
            <p id="data">07 de Julho de 2013</p>
        </div>
        <div class="noticias">
            <a href="#http://www.gotgame.com.br/news2"><img src="img/image_2.jpg" width="150" height="100"></a>
            <a href="#http://www.gotgame.com.br/news2"><h2>Notícia 2</h2></a>
            <p>Aqui vai as informaçoes da noticia 2</p>
            <a href="#http://www.gotgame.com.br/news2" id="readmore">read more...</a>
            <p id="data">07 de Julho de 2013</p>
        </div>
        <div class="noticias">
            <a href="#http://www.gotgame.com.br/news3"><img src="img/image_3.jpg" width="150" height="100"></a>
            <a href="#http://www.gotgame.com.br/news3"><h2>Notícia 3</h2></a>
            <p>Aqui vai as informaçoes da noticia 3</p>
            <a href="#http://www.gotgame.com.br/news3" id="readmore">read more...</a>
            <p id="data">07 de Julho de 2013</p>
        </div>
        <div class="noticias">
            <a href="#http://www.gotgame.com.br/news4"><img src="img/image_4.jpg" width="150" height="100"></a>
            <a href="#http://www.gotgame.com.br/news4"><h2>Notícia 4</h2></a>
            <p>Aqui vai as informaçoes da noticia 4</p>
            <a href="#http://www.gotgame.com.br/news4" id="readmore">read more...</a>
            <p id="data">07 de Julho de 2013</p>
        </div>
    </div>
</div>';

echo $top;
echo $middle;
echo $bottom;
?>