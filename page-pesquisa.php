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
        margin-top: 30px;
    }

</style>
<body>
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
            <b-collapse id="filtros" class="filtros">
                <div class="area-de-filtros">
                    <h6>Polimetros</h6>
                    <b-row>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                    </b-row>
                </div>
            </b-collapse>
            <b-collapse id="filtros" class="filtros">
                <div class="area-de-filtros">
                    <h6>Polimetros</h6>
                    <b-row>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                    </b-row>
                </div>
            </b-collapse>
            <b-collapse id="filtros" class="filtros">
                <div class="area-de-filtros">
                    <h6>Polimetros</h6>
                    <b-row>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                        <b-col class="d-flex flex-column">
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                            <div>
                                <b-form-checkbox
                                    id="checkbox-1"
                                    v-model="status"
                                    name="checkbox-1"
                                    value="accepted"
                                    unchecked-value="not_accepted"
                                >
                                    <p class="ms-2">Propriedade Quimica</p>
                                </b-form-checkbox>
                            </div>
                        </b-col>
                    </b-row>
                </div>
            </b-collapse>
        </b-container>
        <div class="filtros-ativos">
            <b-container class="container-geral">
                <b-button pill class="me-1">Filtro</b-button>
                <b-button pill class="me-1">Filtro</b-button>
            </b-container>
        </div>
    </section>
    
    <section class="itens-de-pesquisa">
        <b-container>
            <div class="container-geral">
                <b-row class="mw-100">
                    <b-col class="p-0">
                        <card-item />
                    </b-col>
                </b-row>
            </div>
        </b-container>
    </section>
</div>

<script>

    Vue.component('card-item', {
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
    })

    new Vue({
        data() {
            return {
                iconeDropdown: "arrow-down"
            }
        },
        methods: {
            mudaDropdown() {
                this.iconeDropdown === "arrow-down"? this.iconeDropdown = "arrow-up": this.iconeDropdown = "arrow-down"
            }
        }
    }).$mount("#app")

</script>
</body>
</html>