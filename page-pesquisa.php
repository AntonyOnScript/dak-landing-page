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
<body>
<div id="app">
    <b-form>
        <b-form-input v-model="id"></b-form-input>
        <b-button variant="primary" @click="pesquisar">Pesquisar</b-button>
    </b-form>
    <div id="results"></div>
    <b-table striped hover :fields="colunas" :items="linhas"></b-table>
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
        },
        created() {
            this.listar()
        }
    })
</script>
</body>
</html>