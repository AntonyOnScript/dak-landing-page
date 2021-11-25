<?php
/* Template Name: Pesquisa de Produtos */
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ======= VUE begin ======= -->
    <title>Dakhia - Pesquisa de produtos</title>
    <script src="<?= get_template_directory_uri() ?>/assets/libs/vue.js"></script>
    <!-- ======= VUE end ======= -->

    <!-- ======= BOOTSTRAP-VUE begin ======= -->
    <!-- Load required Bootstrap and BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/libs/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/libs/bootstrap-vue.min.css"/>

    <!-- Load polyfills to support older browsers -->
    <script src="<?= get_template_directory_uri() ?>/assets/libs/polyfill.min.js"></script>

    <!-- Load Vue followed by BootstrapVue -->
    <script src="<?= get_template_directory_uri() ?>/assets/libs/vue.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/libs/bootstrap-vue.min.js"></script>

    <!-- Load the following for BootstrapVueIcons support -->
    <script src="<?= get_template_directory_uri() ?>/assets/libs/bootstrap-vue-icons.min.js"></script>
    <!-- ======= BOOTSTRAP-VUE end ======= -->

    <script src="<?= get_template_directory_uri() ?>/assets/js/menu.js" defer></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/estilo-alternativo.css">
    <script src="<?= get_template_directory_uri() ?>/assets/libs/axios.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/libs/axios.min.map"></script>
</head>
<style>   
    .contador-produtos {
        position: fixed;
        z-index: 997;
        right: 1px;        
    }

    .contador-produtos a {        
        background: #0d6efd;
        padding: 10px;
        border-radius: 20px;
        color: #fff;
        font-weight: bold;
    }

    .container-geral.vazio {
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .container-produto {
        padding-top: 80px;
        min-height: 100vh;
    }

    hr {
        margin: 0;
    }

</style>
<body>
<!-- [ANTONY] Menu principal -->
<div class="menu" menu-fixo>
    <a href="<?php echo get_site_url(); ?>/pesquisa" class="logo-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_colorido.svg"></a>
    <ul>
        <li class="link_01"><a class="link_01" href="<?= bloginfo("url") . "#menu-topo" ?>">Home</a></li>
        <li class="link_02"><a class="link_02" href="<?= bloginfo("url") . "#sobre-nos" ?>">Sobre Nós</a></li>
        <li class="link_03"><a class="link_03" href="<?= bloginfo("url") . "#economia" ?>">Conteúdo</a></li>
        <li class="link_04"><a class="link_04" href="<?= bloginfo("url") . "#nossos-produtos" ?>">Nossos Produtos</a></li>
        <li class="link_05"><a class="link_05" href="<?= bloginfo("url") . "#contato" ?>">Contato</a></li>
    </ul>
    <div class="menu-mobile menu-mobile-01">
        <div class="linha linha-01"></div>
        <div class="linha linha-02"></div>
        <div class="linha linha-03"></div>
    </div>
</div>
<!-- [ANTONY] Menu para telas pequenas -->
<div class="menu-lateral">
    <div>
        <ul>
            <li class="link_01"><a class="link_01" href="<?= bloginfo("url") . "#menu-topo" ?>">Home</a></li>
            <li class="link_02"><a class="link_02" href="<?= bloginfo("url") . "#sobre-nos" ?>">Sobre Nós</a></li>
            <li class="link_03"><a class="link_03" href="<?= bloginfo("url") . "#economia" ?>">Conteúdo</a></li>
            <li class="link_04"><a class="link_04" href="<?= bloginfo("url") . "#nossos-produtos" ?>">Nossos Produtos</a></li>
            <li class="link_05"><a class="link_05" href="<?= bloginfo("url") . "#contato" ?>">Contato</a></li>
            <li class="link_06"><a class="link_06" href="<?= get_stylesheet_directory_uri() . "/politicas.pdf" ?>" target="_blank">Política de Qualidade</a></li>
        </ul>
    </div>
</div>
<!-- [ANTONY] Menu fixo no topo ao rolar página para baixo -->
<div class="menu" id="menu-topo">
    <a href="<?php echo get_site_url(); ?>/pesquisa" class="logo-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_colorido.svg"></a>
    <ul>
        <li class="link_01"><a class="link_01" href="<?= bloginfo("url") . "#menu-topo" ?>">Home</a></li>
        <li class="link_02"><a class="link_02" href="<?= bloginfo("url") . "#sobre-nos" ?>">Sobre Nós</a></li>
        <li class="link_03"><a class="link_03" href="<?= bloginfo("url") . "#economia" ?>">Conteúdo</a></li>
        <li class="link_04"><a class="link_04" href="<?= bloginfo("url") . "#nossos-produtos" ?>">Nossos Produtos</a></li>
        <li class="link_05"><a class="link_05" href="<?= bloginfo("url") . "#contato" ?>">Contato</a></li>
    </ul>
    <div class="menu-mobile menu-mobile-02">
        <div class="linha linha-01"></div>
        <div class="linha linha-02"></div>
        <div class="linha linha-03"></div>
    </div>
</div>
<div id="app">    
    <section class="container-produto">
        <b-container class="bv-example-row" v-if="Object.keys(produto).length != 0">
            <div class="contador-produtos">
                <a v-bind:href="URL + '/produtos/gerarPdf/' + produto.id" target="_blank">
                    <b-icon icon="download" aria-hidden="true"></b-icon> Baixar PDF
                </a>
            </div>
            <b-row>
                <b-col cols="8">
                    <h1 style="color: var(--cor-primaria)">{{ produto.nome }}</h1> 
                </b-col>
                <b-col style="text-align: right;">
                    <h1 style="color: var(--cor-primaria)">{{ produto.codigo }}</h1> 
                </b-col>                
            </b-row>
            <b-row>
                <b-col>
                    <p>
                        {{ produto.caracteristicas }}
                    </p>
                    <hr/>
                </b-col>
            </b-row>
            <br/>
            <b-row>
                <b-col>
                    <b-table striped hover :items="produto.propriedades" :fields="headerTabelaPropriedades"></b-table>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <p class="mb-2 mt-2">* Seco refere-se a um teor de umidade inferior a 0,25 % em peso</p>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <p style="font-size: 12px;text-align: justify;line-height: 18px;">
                        As propriedades deste informativo técnico se baseiam em valores médios obtidos em laboratório que podem apresentar variações. Portanto não devem ser utilizadas como parâmetros para
                        projetos de engenharia. Todas as informações deste infomativo estão atualizadas até a data de sua impressão.
                        A Dakhia se reserva o direito de alterar as informações de seus produtos bem como descontinuá-los sem prévio aviso, sem que com isso incorra em responsabilidades de quaisquer espécie. A
                        Dakhia não se responsabiliza por divergências em valores relacionados a diferentes parâmetros de processamento. Todas as recomendações de processamento podem variar em função do
                        desenho de cada peça
                    </p>
                </b-col>
            </b-row>
            <br/>
        </b-container>
        <div v-if="Object.keys(produto).length === 0 && erro" class="container-geral vazio">
            <h1 style="color: var(--cor-primaria)">Produto não encontrado.</h3>
        </div>
        <div class="d-flex justify-content-center pb-5 pt-5" v-if="erro === false && produto.length === 0">
            <b-spinner variant="primary"></b-spinner>
        </div>    
    </section>
</div>
<footer>
    <div class="footer-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_gray.svg">
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
            <span>/<div class="container-link"><a class="link_01" href="<?= bloginfo("url") . "#menu-topo" ?>">&nbsp;&nbsp;Home</a></div></span>
            <span>/<div class="container-link"><a class="link_02" href="<?= bloginfo("url") . "#sobre-nos" ?>">&nbsp;&nbsp;Sobre Nós</a></div></span>
            <span>/<div class="container-link"><a class="link_03" href="<?= bloginfo("url") . "#economia" ?>">&nbsp;&nbsp;Conteúdo</a></div></span>
            <span>/<div class="container-link"><a class="link_04" href="<?= bloginfo("url") . "#nossos-produtos" ?>">&nbsp;&nbsp;Nossos Produtos</a></div></span>
            <span>/<div class="container-link"><a class="link_05" href="<?= bloginfo("url") . "#contato" ?>">&nbsp;&nbsp;Contato</a></div></span>
            <span>/<div class="container-link"><a class="link_06" href="<?= get_stylesheet_directory_uri() . "/politicas.pdf" ?>" target="_blank">&nbsp;&nbsp;Política de Qualidade</a></div></span>
        </div>
    </div>
</footer>
<script>

    const URL = "<?php echo get_stylesheet_directory_uri(); ?>/api/public"

    new Vue({
        components: {

        },
        data() {
            return {                
                produto: {},                
                headerTabelaPropriedades: [
                    {
                        key: 'propriedade',                        
                        label: 'Propriedade'
                    },
                    {
                        key: 'condicao',                        
                        label: 'Condição'                        
                    },
                    {
                        key: 'unidade',                        
                        label: 'Unidade',
                        class: 'text-center'
                    },
                    {
                        key: 'norma',                        
                        label: 'Norma'
                    },
                    {
                        key: 'seco',                        
                        label: 'Seco*',
                        class: 'text-center'                                              
                    }
                ],
                erro: false
            }
        },
        methods: {
            
        },
        mounted() {            
            axios.get(URL + "/produtos/consultar/<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>")
                .then(resposta => this.produto = resposta.data)
                .catch(e => this.erro = !this.erro)
        }
    }).$mount("#app")
</script>
</body>
</html>