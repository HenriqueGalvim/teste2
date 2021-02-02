$(function(){
    var curSlide = 0;

    var maxSlide = $('.banner-single').length -1 // aqui nós puxamos o tamanho, quantos dele tem e subtraimos por 1
    
    initSlider()
    changeSlide()
    function initSlider(){
        $('.banner-single').hide(); // esconder as imagens
        $('.banner-single').eq(0).show() // puxar a primeira e mostrar
        for (let i = 0; i < maxSlide +1; i++) {
            let content = $('.bullets').html()
            if(i == 0){
                content += '<span class="active-slider"> </span>'
            }else{
                content += '<span> </span>'
            }
            $('.bullets').html(content)
            
        }
    }
    var delay = 3;
    function changeSlide(){
        setInterval(function(){
            $('.banner-single').eq(curSlide).fadeOut(2000); // essa funcao mostra infinitamente um slide de imagens
            curSlide ++; 
            if(curSlide > maxSlide){ // sempre quando o curslide for maior volta a 0 e assim reinicia a função
                curSlide = 0;
            }
            $('.banner-single').eq(curSlide).fadeIn(2000);
            // Trocar bullets de navegação do slide
            $('.bullets span').removeClass('active-slider')
            $('.bullets span').eq(curSlide).addClass('active-slider')
        },delay = 3000); // vai terminar após 3s
    }

    $('body').on('click','.bullets span',function(){ // Por meio deste podemos controlar os sliders, basta clicar no qual queremos e pa muda
        let currentBullet = $(this) 
        $('.banner-single').eq(curSlide).fadeOut(2000)
        
        curSlide = currentBullet.index() 
        $('.banner-single').eq(curSlide).fadeIn(2000)
        $('.bullets span').removeClass('active-slider')
        currentBullet.addClass('active-slider')
    })
})

