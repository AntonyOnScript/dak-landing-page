<?php
/* Template Name: Pesquisa de Produtos */
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ======= VUE begin ======= -->
    <title>Dakhia - Pesquisa de produtos</title>
    <script src="https://unpkg.com/vue"></script>
    <!-- ======= VUE end ======= -->

    <!-- ======= BOOTSTRAP-VUE begin ======= -->
    <!-- Load required Bootstrap and BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"/>

    <!-- Load polyfills to support older browsers -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>

    <!-- Load Vue followed by BootstrapVue -->
    <script src="https://unpkg.com/vue@latest/dist/vue.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

    <!-- Load the following for BootstrapVueIcons support -->
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
    <!-- ======= BOOTSTRAP-VUE end ======= -->

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/menu.js" defer></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/estilo-alternativo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.map"></script>
</head>
<style>

    .container-area-de-pesquisa {
        background-color: #1c547a;
    }

    .container-geral {
        padding: 0px 30px;
    }

    .area-de-pesquisa {
        padding-top: 80px;
        padding-bottom: 20px;
    }

    .area-de-filtros {
        background-color: lightblue;
        padding: 15px;
        margin-top: 10px;
    }

    p {
        margin: 0;
    }

    .filtros-ativos {
        padding: 10px 0px;
        background-color: #133a54;
    }

    .item-card {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        min-width: 180px;
        box-shadow: 0px 0px 10px 0px rgb(102 102 102 / 50%);
    }

    .descricao-topo-card {
        background-color: #1c547a;
        padding: 5px 10px;
        color: white;
        text-transform: uppercase;
    }

    .titulos-container-card {
        display: flex;
        flex-direction: column;
        padding: 10px 10px;
    }

    .titulo-card {
        font-weight: 600;
        text-transform: uppercase;
        color: gray;
    }

    .descricao-card {
        padding: 0px 10px;
        padding-bottom: 30px;
        color: gray;        
    }

    .linha-azul-card {
        background-color: blue;
        width: 90%;
        height: 1px;
        margin-top: 7px;
    }

    .caracteristicas-card {
        display: flex;
        gap: 3px;
    }

    .caracteristica-geral-card {
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 10px 10px;
        background-color: gray;
    }

    .linha-cinza-caracteristica-card {
        height: 3px;
        width: 100%;
        background-color: lightgray;
    }

    .caracteristica-card {
        text-align: center;
        color: white;
        text-transform: uppercase;
        font-size: 11px;
        padding-top: 5px;
    }

    .itens-de-pesquisa {
        margin: 30px 0px;
    }

    .lista-grupos {
        columns: 3;
        column-width: 50px;
        width: 100%;
        max-height: 100%;
        padding: 0;
    }

    .lista-grupos li {
        list-style: none;
    }

    .container-caracteristicas {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .custom-checkbox > input, label {
        cursor: pointer;
    }

    .custom-control-label {
        margin-left: 5px;        
    }

    .filtros-ativos button {
        font-size: 12px;
    }

    .contador-produtos {
        position: fixed;
        right: 1px;        
    }

    .contador-produtos button {        
        cursor: default !important;
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
            <b-row>
                <b-col cols="8">
                    <h1 style="color: var(--cor-primaria)">{{ produto.nome }}</h1> 
                </b-col>
                <b-col style="text-align: right;">
                    <h1 style="color: var(--cor-primaria)">{{ produto.codigo }}</h1> 
                </b-col>                
            </b-row>
            <b-row>
                <p>
                    {{ produto.caracteristicas }}
                </p>
                <hr/>
            </b-row>
            <br/>
            <b-row>
                <b-col>
                    <b-table striped hover :items="produto.propriedades"></b-table>
                </b-col>
            </b-row>
            <br/>
            <b-row>
                <b-col>
                    <p>* Seco refere-se a um teor de umidade inferior a 0,25 % em peso</p>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <p style="font-size: 12px;text-align: justify;">
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
        <div v-if="Object.keys(produto).length === 0" class="container-geral vazio">
            <h1 style="color: var(--cor-primaria)">Produto não encontrado.</h3>
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
            <span>/<a class="link_01" href="<?= bloginfo("url") . "#menu-topo" ?>">&nbsp;&nbsp;Home</a></span>
            <span>/<a class="link_02" href="<?= bloginfo("url") . "#sobre-nos" ?>">&nbsp;&nbsp;Sobre Nós</a></span>
            <span>/<a class="link_03" href="<?= bloginfo("url") . "#economia" ?>">&nbsp;&nbsp;Conteúdo</a></span>
            <span>/<a class="link_04" href="<?= bloginfo("url") . "#nossos-produtos" ?>">&nbsp;&nbsp;Nossos Produtos</a></span>
            <span>/<a class="link_05" href="<?= bloginfo("url") . "#contato" ?>">&nbsp;&nbsp;Contato</a></span>
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
                produto: {}                
            }
        },
        methods: {
            
        },
        mounted() {            
            axios.get(URL + "/produtos/consultar/<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>")
                .then(resposta => this.produto = resposta.data)
        }
    }).$mount("#app")
</script>
</body>
</html>