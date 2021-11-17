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

    .area-de-pesquisa, .filtros-ativos-container {
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

</style>
<body>
<div id="app">
    <div class="container-area-de-pesquisa">
        <b-container class="area-de-pesquisa">
            <h4 class="titulo-inicial">Lorem Ipsum Ispanos</h4>
            <h2 class="mb-4">Encontre o caminho certo</h2>
            <div class="d-flex gap-2">
                <b-form-input></b-form-input>
                <b-button pill v-b-toggle.filtros><b-icon-arrow-down></b-icon-arrow-down></b-button>
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
            <b-container class="filtros-ativos-container">
                <b-button pill class="me-1">Filtro</b-button>
                <b-button pill class="me-1">Filtro</b-button>
            </b-container>
        </div>
    </div>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data() {
            return {
                URL_BASE: 'https://jsonplaceholder.typicode.com',
                colunas: [
                    {key: 'userId'},
                    {key: 'id'},
                    {key: 'title'},
                    {key: 'body'}
                ],
                linhas: [],
                id: 3
            }
        },
        methods: {
            listar() {
                axios.get(`${this.URL_BASE}/posts`)
                    .then(response => {
                        this.linhas = response.data
                    })
            },
            pesquisar() {
                axios.get(`${this.URL_BASE}/posts/${this.id}`)
                    .then(response => {
                        document.getElementById('results').innerHTML = response.data.body
                    })
            },
        }
    })
</script>
</body>
</html>