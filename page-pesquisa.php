<?php
/* Template Name: Example Template */
?>

<!DOCTYPE html>
<html>
<head>
    <!-- ======= VUE begin ======= -->
    <title>My first Vue app</title>
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
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/menu.css">
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
        max-width: 400px;
        min-width: 280px;
        box-shadow: 0px 0px 10px 0px rgb(102 102 102 / 50%);
    }

    .descricao-topo-card {
        background-color: blue;
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

</style>
<body>
<div class="menu-lateral">
        <div>
            <ul>
                <li class="link_01"><a class="link_01" href="<?= bloginfo("url")."#menu-topo" ?>">Home</a></li>
                <li class="link_02"><a class="link_02" href="<?= bloginfo("url")."#sobre-nos" ?>">Sobre Nós</a></li>
                <li class="link_03"><a class="link_03" href="<?= bloginfo("url")."#economia" ?>">Conteúdo</a></li>
                <li class="link_04"><a class="link_04" href="<?= bloginfo("url")."#nossos-produtos" ?>">Nossos Produtos</a></li>
                <li class="link_05"><a class="link_05" href="<?= bloginfo("url")."#contato" ?>">Contato</a></li>
            </ul>
        </div>
    </div>
    <div class="menu" menu-fixo>
    <a href="<?php echo home_url();?>" class="logo-container"><img src="<?php echo get_template_directory_uri();?>/assets/imgs/logo_colorido.svg"></a>
        <ul>
            <li class="link_01"><a class="link_01" href="<?= bloginfo("url")."#menu-topo" ?>">Home</a></li>
            <li class="link_02"><a class="link_02" href="<?= bloginfo("url")."#sobre-nos" ?>">Sobre Nós</a></li>
            <li class="link_03"><a class="link_03" href="<?= bloginfo("url")."#economia" ?>">Conteúdo</a></li>
            <li class="link_04"><a class="link_04" href="<?= bloginfo("url")."#nossos-produtos" ?>">Nossos Produtos</a></li>
            <li class="link_05"><a class="link_05" href="<?= bloginfo("url")."#contato" ?>">Contato</a></li>
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
            <li class="link_01"><a class="link_01" href="<?= bloginfo("url")."#menu-topo" ?>">Home</a></li>
            <li class="link_02"><a class="link_02" href="<?= bloginfo("url")."#sobre-nos" ?>">Sobre Nós</a></li>
            <li class="link_03"><a class="link_03" href="<?= bloginfo("url")."#economia" ?>">Conteúdo</a></li>
            <li class="link_04"><a class="link_04" href="<?= bloginfo("url")."#nossos-produtos" ?>">Nossos Produtos</a></li>
            <li class="link_05"><a class="link_05" href="<?= bloginfo("url")."#contato" ?>">Contato</a></li>
        </ul>
        <div class="menu-mobile menu-mobile-02">
            <div class="linha linha-01"></div>
            <div class="linha linha-02"></div>
            <div class="linha linha-03"></div>
        </div>
    </div>
<div id="app">
    <section class="container-area-de-pesquisa">
        <b-container class="container-geral area-de-pesquisa">
            <h4 class="titulo-inicial">Lorem Ipsum Ispanos</h4>
            <h2 class="mb-4">Encontre o caminho certo</h2>
            <div class="d-flex gap-2">
                <b-form-input></b-form-input>
                <b-button pill v-b-toggle.filtros @click="mudaDropdown()">
                    <b-icon :icon="iconeDropdown"></b-icon>
                </b-button>
            </div>
            <filtros-checkbox titulo="Grupos" :grupos="grupos"></filtros-checkbox>
        </b-container>
        <div class="filtros-ativos">
            <b-container class="container-geral">
                <b-button pill class="me-1">Filtro</b-button>
                <b-button pill class="me-1">Filtro</b-button>
            </b-container>
        </div>
    </section>
    
    <section class="itens-de-pesquisa">
        <b-container class="p-0 mb-5">
            <div class="container-geral">
                <div class="d-flex flex-row flex-wrap gap-3 justify-content-center">
                    <card-item></card-item>
                    <card-item></card-item>
                    <card-item></card-item>
                </div>
            </div>
        </b-container>
        <div class="d-flex justify-content-center gap-1">
            <b-button pill>
                <b-icon icon="chevron-double-left"></b-icon>
            </b-button> 
            <b-button pill>
                <span class="ps-1 pe-1">1</span>
            </b-button> 
            <b-button pill>
                <span class="ps-1 pe-1">2</span>
            </b-button>  
                <span class="mt-1">...</span>
            <b-button pill>
                <span class="ps-1 pe-1">12</span>
            </b-button> 
            <b-button pill>
                <b-icon icon="chevron-double-right"></b-icon>
            </b-button> 
        </div>
    </section>
</div>
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
            <span>/<a class="link_01" href="<?= bloginfo("url")."#menu-topo" ?>">&nbsp;&nbsp;Home</a></span>
            <span>/<a class="link_02" href="<?= bloginfo("url")."#sobre-nos" ?>">&nbsp;&nbsp;Sobre Nós</a></span>
            <span>/<a class="link_03" href="<?= bloginfo("url")."#economia" ?>">&nbsp;&nbsp;Conteúdo</a></span>
            <span>/<a class="link_04" href="<?= bloginfo("url")."#nossos-produtos" ?>">&nbsp;&nbsp;Nossos Produtos</a></span>
            <span>/<a class="link_05" href="<?= bloginfo("url")."#contato" ?>">&nbsp;&nbsp;Contato</a></span>
        </div>
    </div>
</footer>
<script>

    const URL = "http://localhost/api-dakhia/dakhia/api/public"

    let filtroCheckBoxComponent = {
        template: `
            <b-collapse id="filtros" class="filtros">
                <div class="area-de-filtros">
                    <h6>{{ titulo }}</h6>
                    <ul class="lista-grupos">
                        <li v-for="grupo of grupos" v-key="grupo">
                            <b-form-checkbox
                                :id="grupo.grupo"
                                :name="grupo.grupo"
                                value="accepted"
                                unchecked-value="not_accepted"
                            >
                                <p class="ms-2">{{ grupo.grupo }}</p>
                            </b-form-checkbox>
                        </li>
                    </ul>
                </div>
            </b-collapse>
        `,
        props: ["titulo", "grupos"]
    }

    let cardItemComponent = {
        template: `
            <div class="item-card">
                <div class="descricao-topo-card">
                    <p>{{ descricaoTopo }}</p>
                </div>
                <div class="titulos-container-card">
                    <h3 class="titulo-card">Teste</h3>
                    <p class="subtitulo-card">TESTE S80 (T1S20)</p>
                    <div class="linha-azul-card"></div>
                </div>
                <div class="descricao-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ad non nam harum, beatae voluptatem necessitatibus voluptatibus eveniet minus iste magni itaque ullam. Debitis a labore vel excepturi, reiciendis quisquam?</p>
                </div>
                <div class="caracteristicas-card">
                    <div class="caracteristica-geral-card">
                        <div class="linha-cinza-caracteristica-card"></div>
                        <p class="caracteristica-card">TESte</p>
                    </div>
                    <div class="caracteristica-geral-card">
                        <div class="linha-cinza-caracteristica-card"></div>
                        <p class="caracteristica-card">tensão</p>
                    </div>
                    <div class="caracteristica-geral-card">
                        <div class="linha-cinza-caracteristica-card"></div>
                        <p class="caracteristica-card">fórmula</p>
                    </div>
                </div>
            </div>
        `,
        data() {
            return {
                descricaoTopo: "elemento x99000" // Antony: fiz apenas para exibir que é possivel utilizar data bind nesse componente
            }
        }
    }

    new Vue({
        components: {
            'filtros-checkbox': filtroCheckBoxComponent,
            'card-item': cardItemComponent
        },
        data() {
            return {
                iconeDropdown: "arrow-down",
                grupos: []
            }
        },
        methods: {
            mudaDropdown() {
                this.iconeDropdown === "arrow-down"? this.iconeDropdown = "arrow-up": this.iconeDropdown = "arrow-down"
            }
        },
        mounted() {
            axios.get(URL+"/grupos/listar")
            .then(resposta => this.grupos = resposta.data)
        }
    }).$mount("#app")
</script>
</body>
</html>