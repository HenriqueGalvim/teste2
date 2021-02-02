$(function(){ // Sistema pra aparecer o box especialidades, use com sabedoria
    var atual = -1
    var maximo = $('.box-especialidades').length -1;
    var time;
    var animacaoDelay = 3
    executarAnimacao()
    function executarAnimacao(){
        $('.box-especialidades').hide()
        time = setInterval(logicaAnimacao,animacaoDelay * 1000);
        function logicaAnimacao(){
            atual++ 
            if(atual > maximo){
                clearInterval(time);
                return false;
            }
            $('.box-especialidades').eq(atual).fadeIn()

        }
    }
})