<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="Meu primeiro projeto da danki code">
    <meta name="keywords" content="Essa tag é onde podemos definir palavras chaves do nosso site">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilos/style.css">
    <link rel="icon" href="<?php echo INCLUDE_PATH ?>favicon.ico" type="image/x-icon"> <!--Só aceita tipo ico -->
    <link rel="stylesheet" href="estilos/font-awesome.min.css">
</head> 
<body>
    <?php 
        $url= isset($_GET['url'])?$_GET['url']:'home'; // ternario, se existir o url ele terá valor da url, se nao terá valor de home

        switch ($url){
            case 'depoimentos':
                echo '<target target="depoimentos">';
            break;
            case 'servicos':
                echo '<target target="servicos">';
            break;
        }
    ?>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div><!-- Logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a> </li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a> </li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a> </li>
                    <li><a realtime = "contato" href="<?php echo INCLUDE_PATH;?>contato">Contato</a> </li>
                <!-- Apenas pra teste    <li><a realtime = "outro-menu" href="<?php echo INCLUDE_PATH;?>outro-menu">outro menu</a> </li>-->
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a> </li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a> </li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a> </li>
                    <li><a realtime = "contato" href="<?php echo INCLUDE_PATH;?>contato">Contato</a> </li>
                 <!-- Apenas pra teste   <li><a realtime = "outro-menu" href="<?php echo INCLUDE_PATH;?>outro-menu">outro menu</a> </li> -->
                </ul>
            </nav>
            <div class="clear"></div>
        </div> <!-- Div center -->
    </header>
    <div class="container-principal">
    <?php // Para manipular a url, caso a url seja tal será redirecionado para pg tal, caso n exista irá pra 404
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php'); // 404 é um erro do navegador q nao existe
            }else{
                include('pages/home.php'); 
             }
        } 
    ?>
    </div>
    <footer <?php if(isset($pagina404) && $pagina404 = true) echo 'class="fixed";'?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div> <!-- Center -->
    </footer>
    <script src="<?php echo INCLUDE_PATH;?>./js/jquery.js"> </script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>./js/script.js"> </script>
    <?php 
        if($url == 'home' || $url == ''){ // se for home ou vazio vai carregar aqueles arquivos embaixo
    ?>

    <script src="<?php echo INCLUDE_PATH;?>./js/slider.js"> </script> 

    <?php } ?>

    <?php 
        if($url == 'contato'){ // se for contato vai carregar aqueles arquivos embaixo
    ?>
    <?php } ?>

    <?php 
        if($url == 'home' || $url == ''){ // se for home ou vazio vai carregar aqueles arquivos embaixo
    ?>

    <script src="<?php echo INCLUDE_PATH;?>./js/exemplo.js"> </script> 

    <?php } ?>

</body>
</html> 
    