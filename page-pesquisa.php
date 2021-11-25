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
        font-size: 15px;
        padding-top: 5px;
        font-weight: 600;
        letter-spacing: 2px;
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
    

</style>
<body>
<!-- [ANTONY] Menu principal -->
<div class="menu" menu-fixo>
    <a href="<?php echo home_url(); ?>" class="logo-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_colorido.svg"></a>
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
    <a href="<?php echo home_url(); ?>" class="logo-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo_colorido.svg"></a>
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
    <section class="container-area-de-pesquisa">
        <b-container class="container-geral area-de-pesquisa">
            <h1 class="mb-4">Encontre o composto certo</h1>
            <div class="d-flex gap-2">
                <b-form-input class="input-pesquisa" v-model="filtroPesquisa" placeholder="Pesquise por nome, código ou grupo do produto." @input="fazerPesquisa($event)"></b-form-input>
                <!--b-button pill>
                    <b-icon icon="search"></b-icon>
                </b-button-->
                <b-button pill v-b-toggle.filtros @click="mudaDropdown()">
                    <b-icon :icon="iconeDropdown"></b-icon>
                </b-button>
            </div>
            <filtros-checkbox titulo="Grupos" :grupos="grupos" @atualizadados="atualizaGrupos" :gruposglobais="gruposSelecionados" :esvaziar="esvaziarLista"></filtros-checkbox>
        </b-container>
        <div class="filtros-ativos">
            <b-container class="container-geral">
                <b-button pill @click="limparFiltros()">Limpar Filtros</b-button>
                <b-button pill class="me-1" v-if="gruposSelecionados" v-for="grupo of gruposSelecionados" :key="grupo">{{ grupo }}</b-button>
            </b-container>
        </div>
        <div class="contador-produtos">
            <b-button pill >{{ produtos.length }} {{ produtos.length != 1 ? "Produtos" : "Produto" }}</b-button>
        </div>
    </section>
    <section class="itens-de-pesquisa">
        <b-container class="p-0 mb-5">
            <div class="container-geral">
                <div class="d-flex flex-row flex-wrap gap-3 justify-content-center">                    
                    <card-item v-for="produto of produtos" v-key="produto" :id="produto.id" :grupo="produto.grupo" :nome="produto.nome" :codigo="produto.codigo" :caracteristicas="produto.caracteristicas"></card-item>                    
                </div>                
            </div>
        </b-container>     
        <div class="d-flex justify-content-center pb-5 pt-0" v-if="carregando">
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

    let filtroCheckBoxComponent = {
        template: `
            <b-collapse id="filtros" class="filtros">
                <div class="area-de-filtros">
                    <h6>{{ titulo }}</h6>
                    <ul class="lista-grupos">
                        <b-form-checkbox-group
                            v-model="gruposSelecionados"
                            :options="grupos"
                        >
                        </b-form-checkbox-group>
                    </ul>
                </div>
            </b-collapse>
        `,
        props: ["titulo", "grupos", "gruposglobais", "esvaziar"],
        data() {
            return {
                gruposSelecionados: []
            }
        },
        watch: {
            gruposSelecionados(novo, velho) {
                this.$emit("atualizadados", this.gruposSelecionados)
            },
            esvaziar(novo, velho) {
                if(novo === true) {
                    this.gruposSelecionados = []
                }
            }
        }
    }

    let cardItemComponent = {
        template: `            
            <div class="item-card">                
                <a v-bind:href="'<?php echo get_site_url(); ?>/produto?id='+id">
                    <div class="descricao-topo-card">
                        <p>{{ grupo }}</p>
                    </div>
                    <div class="titulos-container-card">
                        <h2 class="titulo-card">{{ nome }}</h2>
                        <p class="subtitulo-card">{{ codigo }}</p>
                        <div class="linha-azul-card"></div>
                    </div>
                    <div class="container-caracteristicas">
                        <div class="descricao-card">
                            <p>{{ caracteristicas }}</p>
                        </div>                    
                    </div>
                </a>
            </div>            
        `,
        props: ["id", "grupo", "nome", "codigo", "caracteristicas"]
    }

    new Vue({
        components: {
            'filtros-checkbox': filtroCheckBoxComponent,
            'card-item': cardItemComponent
        },
        data() {
            return {
                iconeDropdown: "arrow-down",
                grupos: [],
                produtos: [],
                gruposSelecionados: [],
                filtroPesquisa: "",
                esvaziarLista: false,
                carregando: true
            }
        },
        methods: {
            mudaDropdown() {
                this.iconeDropdown === "arrow-down" ? this.iconeDropdown = "arrow-up" : this.iconeDropdown = "arrow-down"
            },
            atualizaGrupos(dados) {
                this.esvaziarLista = false
                this.gruposSelecionados = dados
                this.atualizarProdutos()
            },
            fazerPesquisa(valor) {
                this.filtroPesquisa = valor
                this.atualizarProdutos()
            },
            atualizarProdutos() {
                this.carregando = true
                axios.get(URL + "/produtos/listar", {
                    params: {
                        pesquisa: this.filtroPesquisa,
                        grupos: this.gruposSelecionados
                    }
                })
                    .then(resposta => {
                        this.produtos = resposta.data
                        this.carregando = false
                    })
            },
            limparFiltros() {
                this.gruposSelecionados = []
                this.filtroPesquisa = ""
                this.atualizarProdutos()
                this.esvaziarLista = true
                this.limparCheckBoxes()
            },
            limparCheckBoxes() {
                let checkboxes = document.querySelectorAll(".lista-grupos input[type='checkbox']")

                checkboxes.forEach(checkbox => {
                    if (checkbox.checked === true) checkbox.checked = false
                })
            }
        },
        mounted() {
            axios.get(URL + "/grupos/listar")
                .then(resposta => {
                    this.grupos = resposta.data.map(item => {
                        return {text: item.grupo, value: item.grupo}
                    })
                })

            axios.get(URL + "/produtos/listar")
                .then(resposta => { 
                    this.produtos = resposta.data
                    this.carregando = false
                })
        }
    }).$mount("#app")
</script>
</body>
</html>