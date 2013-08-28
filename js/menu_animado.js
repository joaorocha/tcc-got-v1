$(document).ready(function() {
    $("#barNav ul li").mouseenter(function(evento) {
        var elemento = $(this);
        var Largura = $(elemento).width();
        var PosicaoEsquerda = $(elemento).position().left - 10;
        var PosicaoTop = $(elemento).position().top - 10; 
        
        $("#caixa").stop().animate({ "top": PosicaoTop + "px" , "left" : PosicaoEsquerda + "px" , "width" : Largura + " px"  }, "slow");
    });

    
    $("#barNav").mouseleave(function(evento) {
        PosicaoSelecionado(false);
    });

    
    function PosicaoSelecionado(PrimeiraVez) {
        
        var Selecionado = $(".selecionado");
        
        var PosicaoEsquerda = $(Selecionado).position().left - 10;
        var PosicaoTop = $(Selecionado).position().top - 10; 
        var Largura = $(Selecionado).width();

        if (PrimeiraVez == true) {
            $("#caixa").css({ "top": PosicaoTop + "px" , "left" : PosicaoEsquerda + "px" , "width" : Largura + "px" });
        } else {
            $("#caixa").stop().animate({ "top" : PosicaoTop + "px" , "left" : PosicaoEsquerda + "px"; "width" : Largura + "px"; }, "slow");
     }
    }

    PosicaoSelecionado(true);

});