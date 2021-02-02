   // Sistema do menu mobile
$(function(){ // Para fazer uma função com jquery é preciso do $(function()){}
    $('nav.mobile').click(function(){// Selecionando um elemento, chamamos pelo nome e dizendo o que vai acontecer caso click
        let listaMenu= $('nav.mobile ul');
        // Abaixo tem algumas formas de realizar o abrir e fechar
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn(); // Se o hidden( tiver oculto) for true, o menu vai aparecer
        }else{
        listaMenu.fadeOut(); // Se o menu não estiver oculto, vai desaparecer
        }
        */
         /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.show();
        }else{
        listaMenu.hide();
        }
        */
       /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.css('display','block');
        }else{
        listaMenu.css('display','none'); // Mexemos no proprio codigo do css, 1º propriedade 2º valor
        }
        */
       if(listaMenu.is(':hidden') == true){ // troca um icone pra um X
           let icone= $('.botao-menu-mobile').find('i')
           icone.removeClass('fa-bars'); 
           icone.addClass('fa-times');
         listaMenu.slideToggle(); // Neste metodo ele faz tudo automaticamente, abre e fecha o menu
         
        }else{ // Destroca pro icone padrao de três barras
            let icone= $('.botao-menu-mobile').find('i')
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle(); // Neste metodo ele faz tudo automaticamente, abre e fecha o menu
        }
    })
  // Sistema do scroll
    if($('target').length > 0){ // se target existir, devemos dar scroll em algum elemento
        let element = '#'+$('target').attr('target'); // vai atribuir target a variavel target
        let divScroll = $(element).offset().top; //vai buscar o valor do element e atribuir a divScroll
        $('html,body').animate({'scrollTop':divScroll}) // vai dar o scroll

    }
   // Sistema do carregar sem atualizar a url
    carregarDinamico()
    function carregarDinamico(){ // Carrega arquivos em tempo real esse sisteminha
        $('[realtime]').click(function(){ // dando um clique em qualquer elemento q tenha o atributo realtime
            // e quando click pegamos o valor do realtime

            let pagina = $(this).attr('realtime')
            $('.container-principal').load('/Curso/Projeto1/pages/'+ pagina+'.php') // carrega um arquivo externo, porem tem que por todo o caminho
            return false;
        })
    }
})
