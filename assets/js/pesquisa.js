const lupa = document.querySelectorAll('.pesquisa')
const caixa_de_pesquisa = document.querySelector('.modal-pesquisa')
const fecha_pesquisa = document.querySelector('.fecha-pesquisa-modal')

fecha_pesquisa.addEventListener('click', ()=>{
    caixa_de_pesquisa.style.display = 'none'
})

lupa[0].addEventListener('click', abrirPesquisa)
lupa[1].addEventListener('click', abrirPesquisa)
lupa[2].addEventListener('click', abrirPesquisa)
lupa[3].addEventListener('click', abrirPesquisa)
function abrirPesquisa(){
    caixa_de_pesquisa.style.display="flex"
}
