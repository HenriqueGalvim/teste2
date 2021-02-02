<section class="banner-container"> <!-- É graças a este três codigos abaixo que as imagens vão, acrescente quantas quiser no futuro pra testar galvim -->
<div style="background-image:url('<?php echo INCLUDE_PATH;?>imagens/bg-form.jpg');" class="banner-single"></div>
<div style="background-image:url('<?php echo INCLUDE_PATH;?>imagens/bg-form2.jpg');" class="banner-single"></div>
<div style="background-image:url('<?php echo INCLUDE_PATH;?>imagens/bg-form3.jpg');" class="banner-single"></div>
        <div class="overlay"></div> 
        <div class="center">
            <form>
                <h2> Qual o seu melhor email? </h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div>
        <div class="bullets">
            
        </div><!-- bullets -->
    </section> <!-- Banner que ficará no background -->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2 >Henrique Galvim</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos veniam alias. Non ipsam aliquid rem aperiam veritatis nemo voluptate, nostrum architecto ducimus esse itaque quaerat maiores, eum, nihil ut? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos veniam alias. Non ipsam aliquid rem aperiam veritatis nemo voluptate, nostrum architecto ducimus esse itaque quaerat maiores, eum, nihil ut?
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos veniam alias. Non ipsam aliquid rem aperiam veritatis nemo voluptate, nostrum architecto ducimus esse itaque quaerat maiores, eum, nihil ut? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos veniam alias. Non ipsam aliquid rem aperiam veritatis nemo voluptate, nostrum architecto ducimus esse itaque quaerat maiores, eum, nihil ut?
                </p>
            </div>
            <div class="w50 left">
                <img class="right" src="<?php echo INCLUDE_PATH;?>imagens/foto.jpg" alt="foto" > <!-- Pegar a imagem depois-->
            </div>
            <div class="clear"></div>
        </div> <!-- Center -->
    </section>

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidades">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4> HTML </h4>
                <p>
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit omnis, nobis possimus nam quas corporis aliquam magni molestias officiis. Necessitatibus, perferendis. Itaque laudantium, cupiditate id dolor a expedita unde alias!
                </p>
            </div> <!--Box especialidades-->
            <div class="w33 left box-especialidades">
                <h3> <i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4> CSS </h4>
                <p>
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit omnis, nobis possimus nam quas corporis aliquam magni molestias officiis. Necessitatibus, perferendis. Itaque laudantium, cupiditate id dolor a expedita unde alias!
                </p>
            </div> <!--Box especialidades-->
            <div class="w33 left box-especialidades">
                <h3> <i class="fa fa-gg-circle" aria-hidden="true"></i></h3>
                <h4> JavaScript </h4>
                <p>
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit omnis, nobis possimus nam quas corporis aliquam magni molestias officiis. Necessitatibus, perferendis. Itaque laudantium, cupiditate id dolor a expedita unde alias!
                </p>
            </div> <!--Box especialidades-->
            <div class="clear"></div>
        </div> <!-- Centerr -->
    </section> <!-- Especialidades -->

    <section class="extras">
        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid omnis, in vitae id consequuntur earum eius iure hic enim ad quod soluta officia labore distinctio asperiores saepe assumenda eum blanditiis.
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div> <!--Depoimento single -->      

                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid omnis, in vitae id consequuntur earum eius iure hic enim ad quod soluta officia labore distinctio asperiores saepe assumenda eum blanditiis.
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div> <!--Depoimento single -->  

                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid omnis, in vitae id consequuntur earum eius iure hic enim ad quod soluta officia labore distinctio asperiores saepe assumenda eum blanditiis.
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div> <!--Depoimento single -->  
            </div> <!-- w50 -->

            <div id="servicos" class="w50 left servicos-container"> <!--O id é pra fazer o scroll no script.js -->
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sint ab maiores ipsum quam, qui perferendis molestiae! Cum ea, tenetur fugiat, repellat quod corporis, rerum consequatur temporibus nostrum quisquam hic?
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sint ab maiores ipsum quam, qui perferendis molestiae! Cum ea, tenetur fugiat, repellat quod corporis, rerum consequatur temporibus nostrum quisquam hic?
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sint ab maiores ipsum quam, qui perferendis molestiae! Cum ea, tenetur fugiat, repellat quod corporis, rerum consequatur temporibus nostrum quisquam hic?
                        </li>
                    </ul>
                </div> <!-- Serviços -->
            </div> <!-- w50 -->
            <div class="clear"></div>
        </div> <!-- Center -->
    </section>