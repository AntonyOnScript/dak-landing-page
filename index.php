<?php require_once 'header.php'; ?>
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
        <img src="<?php echo get_template_directory_uri();?>/assets/imgs/logo_colorido.svg">
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
        <div class="background-hero">
            <div class="slider">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/slide01_01.png" class="slide-01-01" id="slide01-01" style="display: none;">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/slide01_02.png" class="slide-01-02" id="slide01-02" style="display: none;">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/slide01_03.png" class="slide-01-03" id="slide01-03">
                <video src="<?php echo get_template_directory_uri();?>/assets/video/video.mp4" class="slide-01-04" style="display: none;"></video>
            </div>
        </div>
        <div class="textos-hero">
            <lord-icon
                src="https://cdn.lordicon.com/onyplpvn.json"
                trigger="static"
                colors="primary:#1c547a,secondary:#1c547a"
                scale="100"
                style="width:90px;height:90px"
                class="seta seta-03">
            </lord-icon>
            <div>
                <h3><?php the_field('slider_titulo_menor'); ?></h3>
                <h1><?php the_field('titulo_maior'); ?></h1>
                <a href="<?php the_field('slider_botao_link'); ?>">
                    <button class="assista-agora"><?php the_field('slider_botao_texto'); ?></button>
                </a>
            </div>
            <lord-icon
                src="https://cdn.lordicon.com/zpcieyfp.json"
                trigger="static"
                colors="primary:#1c547a,secondary:#1c547a"
                scale="100"
                style="width:90px;height:90px"
                class="seta seta-04">
            </lord-icon>
        </div>
        <div class="seletor-slide-01">
            <ul>
                <li class="area-botao-slider-01-01"><div class="botao-slider-01-01"></div></li>
                <li class="area-botao-slider-01-02"><div class="botao-slider-01-02"></div></li>
                <li class="area-botao-slider-01-03"><div class="botao-slider-01-03"></div></li>
                <li class="area-botao-slider-01-04"><div class="botao-slider-01-04"></div></li>
            </ul>
        </div>
    </header>
    <section class="sobre" id="sobre-nos">
        <div class="container-sobre">
            <div class="textos-sobre">
                <h3><?php the_field('sobre_titulo_menor'); ?></h3>
                <h1 titulo-de-seção><?php the_field('sobre_titulo_maior'); ?></h1>
                <h2><?php the_field('sobre_texto_maior'); ?></h2>
                <p><?php the_field('sobre_texto_menor'); ?></p>
                <a href="<?php the_field('sobre_botao_link'); ?>">
                    <input type="button" value="<?php the_field('sobre_botao_texto'); ?>" class="assista-agora modal">
                </a>
            </div>
            <div class="container-youtube">
                <img src="<?php echo get_template_directory_uri();?>/assets/imgs/youtube.png" class="youtube">
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
                trigger="static"
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
                trigger="static"
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
                <article>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/blog_01.png" alt="">
                    <h3>sociedade</h3>
                    <h1>lre asokf oapfo sapfks apfs?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid nisi laborum eveniet, voluptatibus reprehenderit et nesciunt, aliquam veritatis corrupti incidunt qui nobis quasi debitis dolores eaque deleniti numquam provident.</p>
                </article>

                <article>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/blog_02.png" alt="">
                    <h3>meio ambiente</h3>
                    <h1>lreot asokf oapfo sapfks apfs?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid nisi laborum eveniet, voluptatibus reprehenderit et nesciunt, aliquam veritatis corrupti incidunt qui nobis quasi debitis dolores eaque deleniti numquam provident.</p>
                </article>

                <article>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/blog_03.png" alt="">
                    <h3>sociedade</h3>
                    <h1>lrefkoas asokf oapfo sapfks apfs?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid nisi laborum eveniet, voluptatibus reprehenderit et nesciunt, aliquam veritatis corrupti incidunt qui nobis quasi debitis dolores eaque deleniti numquam provident.</p>
                </article>
                
                <article>
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/blog_04.png" alt="">
                    <h3>tecnologia</h3>
                    <h1>lreotgfk asokf oapfo sapfks apfs?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid nisi laborum eveniet, voluptatibus reprehenderit et nesciunt, aliquam veritatis corrupti incidunt qui nobis quasi debitis dolores eaque deleniti numquam provident.</p>
                </article>
            </div>
        </div>
    </section>
    <section class="desenvolvimento" id="nossos-produtos">
        <div class="moleculas"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/moleculas.png"></div>
        <div class="textos-desenvolvimento">
            <h3>desenvolvimento</h3>
            <h1 titulo-de-seção>Engenharia</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quam eum aliquam non eaque aperiam quasi sunt ullam perferendis quibusdam. Error soluta temporibus molestias! Qui, velit! Suscipit aliquam distinctio fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. In cum, ab numquam explicabo inventore repellat blanditiis deleniti dolores! Eos modi perspiciatis eum maiores pariatur consectetur praesentium deleniti error quae ad?</p>
            <div class="listra-hr">
                <hr>
                <div></div>
            </div>
        </div>
        <div class="prime-sustentavel">
            <div class="prime">
                <div class="icone-texto">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/prime.svg">
                    <h4 style="color: #fdb745;">PRIME</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod debitis perspiciatis reprehenderit ab consectetur doloremque recusandae repellendus sint magnam iste dolor deleniti porro hic eum veniam possimus, laboriosam totam libero.</p>
            </div>
            <div class="sustentavel">
                <div class="icone-texto">
                    <img src="<?php echo get_template_directory_uri();?>/assets/imgs/sustentavel.svg">
                    <h4 style="color: #8ec341;">sustentavel</h4>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maxime ratione quam eaque. Aspernatur cupiditate architecto fugiat illo provident quasi veniam laudantium officiis. Quidem asperiores excepturi ab maiores quo quis.</p>
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