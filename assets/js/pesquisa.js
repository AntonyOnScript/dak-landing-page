const lupa = document.querySelectorAll('.pesquisa')
const lupa2 = document.querySelector('.lupa')
const caixa_de_pesquisa = document.querySelector('.modal-pesquisa')
const fecha_pesquisa = document.querySelector('.fecha-pesquisa-modal')

fecha_pesquisa.addEventListener('click', ()=>{
    caixa_de_pesquisa.style.display = 'none'
})

lupa2.onmouseenter = ()=>{
    lupa2.querySelector('.circulo-01').style.display = 'block'
    lupa2.querySelector('.circulo-01').style.animation = 'lupa .3s'
}

lupa2.onmouseleave = ()=>{
    lupa2.querySelector('.circulo-01').style.animation = 'lupaInverso .3s'
    setTimeout(()=>{
        lupa2.querySelector('.circulo-01').style.display = 'none'
    }, 300)
}

lupa2.onclick = abrirPesquisa
lupa[0].addEventListener('click', abrirPesquisa)
lupa[1].addEventListener('click', abrirPesquisa)
function abrirPesquisa(){
    caixa_de_pesquisa.style.display="flex"
}
