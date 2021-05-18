<?php require_once 'header.php'; ?>
    <div class='lupa'>
        <i class="fas fa-search"></i>
    </div>
    <div class="modal-box">
        <div class="dialogo">
            <header>
                <p>Aviso</p>
                <div class="fecha-modal" ativado>
                    <div class="linha linha-01 f-modal"></div>
                    <div class="linha linha-02"></div>
                    <div class="linha linha-03 f-modal"></div>
                </div>
            </header>
            <div class="conteudo-modal">
                <p>Conheça a Dakhia e todos os nossos produtos!</p>
            </div>
            <hr class="borda-botao">
            <button class="ok-modal"><p>OK</p></button>
        </div>
    </div>
    <div class='modal-box-video'>
        <div class="fecha-video-container">
            <div class="fecha-modal fecha-video-modal" ativado>
                <div class="linha linha-01 f-modal f-modal-02"></div>
                <div class="linha linha-02"></div>
                <div class="linha linha-03 f-modal f-modal-02"></div>
            </div>
        </div>
    <iframe src="https://www.youtube.com/embed/ZbZSe6N_BXs?autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="youtube-video"></iframe>
    </div>
    <div class="modal-pesquisa">
        <div class="fecha-modal fecha-pesquisa-modal" ativado>
            <div class="linha linha-01 f-modal f-modal-02"></div>
            <div class="linha linha-02"></div>
            <div class="linha linha-03 f-modal f-modal-02"></div>
        </div>
        <div class='pesquisa pesquisa-modal'>
            <input type="text" placeholder="Pesquisar">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <div class="menu-lateral">
        <div>
            <ul>
                <li class="link_01"><a class="link_01">Home</a></li>
                <li class="link_02"><a class="link_02">Sobre Nós</a></li>
                <li class="link_03"><a class="link_03">Blog de Economia</a></li>
                <li class="link_04"><a class="link_04">Nossos Produtos</a></li>
                <li class="link_05"><a class="link_05">Contato</a></li>
            </ul>
        </div> 
        <div class="pesquisa mobile">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <div class="menu" menu-fixo>
        <img src="<?php echo get_template_directory_uri();?>/assets/imgs/logo_colorido.svg">
        <ul>
            <li class="link_01"><a class="link_01">Home</a></li>
            <li class="link_02"><a class="link_02">Sobre Nós</a></li>
            <li class="link_03"><a class="link_03">Blog de Economia</a></li>
            <li class="link_04"><a class="link_04">Nossos Produtos</a></li>
            <li class="link_05"><a class="link_05">Contato</a></li>
        </ul>
        <div class="menu-mobile menu-mobile-01">
            <div class="linha linha-01"></div>
            <div class="linha linha-02"></div>
            <div class="linha linha-03"></div>
        </div>
    </div>
    <div class="menu" id="menu-topo">
        <a href="<?php echo home_url();?>" class="logo-container"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/logo_colorido.svg"></a>
        <ul>
            <li class="link_01"><a class="link_01">Home</a></li>
            <li class="link_02"><a class="link_02">Sobre Nós</a></li>
            <li class="link_03"><a class="link_03">Blog de Economia</a></li>
            <li class="link_04"><a class="link_04">Nossos Produtos</a></li>
            <li class="link_05"><a class="link_05">Contato</a></li>
        </ul>
        <div class="menu-mobile menu-mobile-02">
            <div class="linha linha-01"></div>
            <div class="linha linha-02"></div>
            <div class="linha linha-03"></div>
        </div>
    </div>
    <header id="header">
        <?php add_revslider('slider-2'); ?>
    </header>
    <section class="sobre" id="sobre-nos">
        <div class="container-sobre">
            <div class="textos-sobre">
                <h3><?php the_field('sobre_titulo_menor'); ?></h3>
                <h1 titulo-de-seção><?php the_field('sobre_titulo_maior'); ?></h1>
                <h2><?php the_field('sobre_texto_maior'); ?></h2>
                <p><?php the_field('sobre_texto_menor'); ?></p>
                <input type="button" value="<?php the_field('sobre_botao_texto'); ?>" class="assista-agora modal">
            </div>
            <div class="container-youtube">
                <div class="subcontainer-youtube">
                    <img src="https://i.ytimg.com/vi/ZbZSe6N_BXs/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLArt_w-Sp2d7xVGeW85q7jo8efYrg" class="youtube"alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/youtube.svg" class='logo-youtube'>
                </div>
            </div>
        </div>
    </section>
    <section class="novo-visual">
        <div class="background-cortado"></div>
        <div class="novo-visual-textos">
            <h3>novo visual</h3>
            <h1 titulo-de-seção>NOVA MARCA</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque  </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nihil volup Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, laudantium. Similique animi accusamus, minus com tatum quis delectus officia quidem rerum, reiciendis perferendis, assumenda similique sequi accusantium repellat! Maiores eligendi facere recusandae eveniet quos eius?</p>
            <div class="listra-hr">
                <hr>
                <div></div>
            </div>
        </div>
        <div class="article-container">
            <lord-icon
                src="https://cdn.lordicon.com/onyplpvn.json"
                trigger="loop-on-hover"
                colors="primary:#1c547a,secondary:#1c547a"
                scale="100"
                style="width:90px;height:90px"
                class="seta seta-01">
            </lord-icon>
            <article class="article-novo-visual slide-02-01" id="article-01">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/setaverde.png" alt="" >
                <div><img src="<?php echo get_template_directory_uri();?>/assets/imgs/amarelo.png" class="espacador"></div>
                <hr verde>
                <div class="textos-article">
                    <h3 style="color:#8ec341;letter-spacing: 3.2px;">verde</h3>
                    <h1 titulo-de-seção>Colaboração</h1>
                    <p style="color:var(--cor-primaria);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint adipisci dolore temporibus odit labore. Quasi porro obcaecati quisquam a dolorum dolorem suscipit veniam </p>
                </div>
            </article>
            <article class="article-novo-visual slide-02-02" id="article-02">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/amarelo.png" alt="">
                <div><img src="<?php echo get_template_directory_uri();?>/assets/imgs/amarelo.png" class="espacador"></div>
                <hr verde amarelo>
                <div class="textos-article">
                    <h3 style="color:#fdb745;letter-spacing: 3.2px;">Amarelo</h3>
                    <h1 titulo-de-seção>Transparência</h1>
                    <p style="color:var(--cor-primaria);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint adipisci dolore temporibus odit labore. Quasi porro obcaecati quisquam a dolorum dolorem suscipit veniam </p>
                </div>
            </article>
            <article class="article-novo-visual slide-02-03" id="article-03">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/vermelho.png" alt="">
                <div><img src="<?php echo get_template_directory_uri();?>/assets/imgs/amarelo.png" class="espacador"></div>
                <hr verde vermelho>
                <div class="textos-article">
                    <h3 style="color:#c34541;letter-spacing: 3.2px;">vermelho</h3>
                    <h1 titulo-de-seção>Qualidade</h1>
                    <p style="color:var(--cor-primaria);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint adipisci dolore temporibus odit labore. Quasi porro obcaecati quisquam a dolorum dolorem suscipit veniam </p>
                </div>
            </article>
            <lord-icon
                src="https://cdn.lordicon.com/zpcieyfp.json"
                trigger="loop-on-hover"
                colors="primary:#1c547a,secondary:#1c547a"
                scale="100"
                style="width:90px;height:90px"
                class="seta seta-02">
            </lord-icon>
        </div>
        <div class="seletor-slide-02">
            <ul>
                <li class="area-botao-slider-02-01"><div class="botao-slider-02-01"></div></li>
                <li class="area-botao-slider-02-02"><div class="botao-slider-02-02"></div></li>
                <li class="area-botao-slider-02-03"><div class="botao-slider-02-03"></div></li>
            </ul>
        </div>
    </section>
    <section class="conteudo" id="economia">
        <div class="conteudo-azul">
            <h3>+conteúdo</h3>
            <h1 titulo-de-seção>Economia circular</h1>
            <div class="articles-conteudo">
                <?php require_once("inc/get-posts.economia-circular.php"); ?>
            </div>
        </div>
    </section>
    <section class="desenvolvimento" id="nossos-produtos">
        <div class="moleculas"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/moleculas.png"></div>
        <div class="textos-desenvolvimento">
            <h3><?php the_field('primeiro_titulo'); ?></h3>
            <h1 titulo-de-seção><?php the_field('segundo_titulo'); ?></h1>
            <p><?php the_field('texto'); ?></p>
            <div class="listra-hr">
                <hr>
                <div></div>
            </div>
        </div>
        <div class="prime-sustentavel">
            <div class="prime">
                <div class="icone-texto">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <h4 style="color: #fdb745;"><?php the_field('coluna_esquerda'); ?></h4>
                </div>
                <p><?php the_field('coluna_esquerda_texto'); ?></p>
            </div>
            <div class="sustentavel">
                <div class="icone-texto">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                    <h4 style="color: #8ec341;"><?php the_field('coluna_direita'); ?></h4>
                </div>
                <p><?php the_field('coluna_direita_texto'); ?></p>
            </div>
        </div>
        <div class="elementos-article">
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">01</h2>
                    <h2 class="titulo-article">QUALILON</h2>
                    <h2 class="subtitulo-article">POLICARBONATO</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">02</h2>
                    <h2 class="titulo-article">QUALINYL</h2>
                    <h2 class="subtitulo-article">POLIAMIDA</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">03</h2>
                    <h2 class="titulo-article">QUALITAL</h2>
                    <h2 class="subtitulo-article">POLIACETAL</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">04</h2>
                    <h2 class="titulo-article">QUALILENE</h2>
                    <h2 class="subtitulo-article">POLIPROPILENO</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">05</h2>
                    <h2 class="titulo-article">QUALILAC</h2>
                    <h2 class="subtitulo-article">ABS</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">06</h2>
                    <h2 class="titulo-article">QUALISTER</h2>
                    <h2 class="subtitulo-article">PBT</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
            <article>
                <div>
                    <h2 style="padding-bottom: 20px; font-weight: 400; letter-spacing: 4px;">07</h2>
                    <h2 class="titulo-article">QUALIACRIL</h2>
                    <h2 class="subtitulo-article">ACRÍLICO</h2>
                </div>
                <div>
                    <h2>DISPONÍVEL EM: </h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                </div>
            </article>
    </section>
    <section class="fale-conosco" id="contato">
        <h3>Contato</h3>
        <h1 titulo-de-seção>Fale conosco</h1>
        <?php echo do_shortcode('[contact-form-7 id="43" title="Personalizado"]') ?>
    </section>
    <footer>
        <div class="footer-container">
            <img src="<?php echo get_template_directory_uri();?>/assets/imgs/logo_gray.svg">
            <div class="endereco">
                <h3>endereço</h3>
                <a>Av. Fabio Eduardo Ramos Esquivel, 2424</a>
                <a>Diadema - SP - CEP: 00941-202</a>
                <a>+55 (11) 3296-8550</a>
                <a style="margin-top: 20px;">&copy; 2021 Dakhia</a>
                <a>Todos os direitos reservados</a>
            </div>
            <div class="links">
                <h3>navegação</h3>
                <span>/<a class="link_01" href="#header">&nbsp;&nbsp;Home</a></span>
                <span>/<a class="link_02" href="#sobre-nos">&nbsp;&nbsp;Sobre Nós</a></span>
                <span>/<a class="link_03" href="#economia">&nbsp;&nbsp;Blog de Economia</a></span>
                <span>/<a class="link_04" href="#nossos-produtos">&nbsp;&nbsp;Nossos Produtos</a></span>
                <span>/<a class="link_05" href="#contato">&nbsp;&nbsp;Contato</a></span>
            </div>
        </div>
    </footer>
    <a href="#menu-topo" class="back-to-top" style="font-weight: 300; font-family: 'Nanum Myeong';font-size:18px"><i class="fas fa-angle-up"></i></a>
<?php require_once 'footer.php';