let slide_01_01 = document.querySelector('.slide-01-01')
let slide_01_02 = document.querySelector('.slide-01-02')
let slide_01_03 = document.querySelector('.slide-01-03')

let area_botao_slider_01_01 = document.querySelector('.area-botao-slider-01-01')
let area_botao_slider_01_02 = document.querySelector('.area-botao-slider-01-02')
let area_botao_slider_01_03 = document.querySelector('.area-botao-slider-01-03')

let botao_slider_01_01 = document.querySelector('.botao-slider-01-01')
let botao_slider_01_02 = document.querySelector('.botao-slider-01-02')
let botao_slider_01_03 = document.querySelector('.botao-slider-01-03')

let slide_02_01 = document.querySelector('.slide-02-01')
let slide_02_02 = document.querySelector('.slide-02-02')
let slide_02_03 = document.querySelector('.slide-02-03')

let seta_01 = document.querySelector('.seta-01')
let seta_02 = document.querySelector('.seta-02')

let area_botao_slider_02_01 = document.querySelector('.area-botao-slider-02-01')
let area_botao_slider_02_02 = document.querySelector('.area-botao-slider-02-02')
let area_botao_slider_02_03 = document.querySelector('.area-botao-slider-02-03')

let botao_slider_02_01 = document.querySelector('.botao-slider-02-01')
let botao_slider_02_02 = document.querySelector('.botao-slider-02-02')
let botao_slider_02_03 = document.querySelector('.botao-slider-02-03')

// conteudo do before 
let before_numero = document.querySelector('.textos-hero div h3')
before_numero.dataset.content = '01'

document.addEventListener('click', passaSlide)

passaSlideAutomatico(slide_01_03, slide_01_01, slide_01_02)
passaSlideAutomatico(slide_02_03, slide_02_01, slide_02_02)

//funções
function passaSlide(e){
    acaoDosBotoes(e.target)
}
// a cada 5.5 segundos passa o slide do hero automaticamente

const intervaloSlide01 = setInterval(() => {
    passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03)
}, 5500);

const intervaloSlide02 = setInterval(() => {
    passaSlideAutomatico(slide_02_01, slide_02_02, slide_02_03)
}, 5500);

// verifica a resolução
window.onresize = verificaTela
function verificaTela(){
    if(window.innerWidth<=1315){
        clearInterval(intervaloSlide01)
        botao_slider_01_01.style.visibility = 'hidden'
        botao_slider_01_02.style.visibility = 'hidden'
        botao_slider_01_03.style.visibility = 'hidden'

        slide_01_01.style.display = "none"
        slide_01_02.style.display = "none"
        slide_01_03.style.display = "none"

        document.querySelector('.slider').style.backgroundColor = "#c6e0eb"
    }
    if(window.innerWidth>1315){
        botao_slider_01_01.style.visibility = 'visible'
        botao_slider_01_02.style.visibility = 'visible'
        botao_slider_01_03.style.visibility = 'visible'

        slide_01_01.style.display = "flex"
        slide_01_02.style.display = "none"
        slide_01_03.style.display = "none"
    }
}

verificaTela()
// verifica qual número vai ser apresentado no hero
function checkBefore(){
    if(slide_01_01.style.display!=="none"){
        before_numero.dataset.content = '01'
    }else if(slide_01_02.style.display!=="none"){
        before_numero.dataset.content = '02'
    }else if(slide_01_03.style.display!=="none"){
        before_numero.dataset.content = '03'
    }
}

// passa o slide automático
function passaSlideAutomatico(slide01, slide02, slide03){
    if(slide01.style.display!=="none"){
        passaSlideProLado(slide02, slide03, slide01)
        checkBefore()
    }else if(slide02.style.display!=="none"){
        passaSlideProLado(slide03, slide02, slide01)
        checkBefore()
    }else if(slide03.style.display!=="none"){
        passaSlideProLado(slide01, slide02, slide03)
        checkBefore()
    }
}

// ação dos botoes no slide
function acaoDosBotoes(elemento){
    if(elemento.classList.contains('area-botao-slider-01-01') || elemento.classList.contains('botao-slider-01-01')){
        passaSlideProLado(slide_01_01, slide_01_02, slide_01_03)
    }
    if(elemento.classList.contains('area-botao-slider-01-02') || elemento.classList.contains('botao-slider-01-02')){
        passaSlideProLado(slide_01_02, slide_01_01, slide_01_03)
    }
    if(elemento.classList.contains('area-botao-slider-01-03') || elemento.classList.contains('botao-slider-01-03')){
        passaSlideProLado(slide_01_03, slide_01_02, slide_01_01)
    }

    if(elemento.classList.contains('area-botao-slider-02-01') || elemento.classList.contains('botao-slider-02-01')){
        passaSlideProLado(slide_02_01, slide_02_02, slide_02_03)
    }
    if(elemento.classList.contains('area-botao-slider-02-02') || elemento.classList.contains('botao-slider-02-02')){
        passaSlideProLado(slide_02_02, slide_02_01, slide_02_03)
    }
    if(elemento.classList.contains('area-botao-slider-02-03') || elemento.classList.contains('botao-slider-02-03')){
        passaSlideProLado(slide_02_03, slide_02_02, slide_02_01)
    }

    if(elemento.classList.contains('seta-01')){
        passaSlideAutomatico(slide_02_02, slide_02_01, slide_02_03)
    }
    if(elemento.classList.contains('seta-02')){
        passaSlideAutomatico(slide_02_01, slide_02_02, slide_02_03)
    }
}

function passaSlideProLado(source_01, source_02, source_03){
    if(source_01.classList.contains('slide-01-01')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03)
        mudaCorDoBotãoAutomático(botao_slider_01_01)
    }
    if(source_01.classList.contains('slide-01-02')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03)
        mudaCorDoBotãoAutomático(botao_slider_01_02)
    }
    if(source_01.classList.contains('slide-01-03')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03)
        mudaCorDoBotãoAutomático(botao_slider_01_03)
    }

    if(source_01.classList.contains('slide-02-01')){
        resetarCoresSlide(botao_slider_02_01, botao_slider_02_02, botao_slider_02_03)
        mudaCorDoBotãoAutomático(botao_slider_02_01)
    }
    if(source_01.classList.contains('slide-02-02')){
        resetarCoresSlide(botao_slider_02_01, botao_slider_02_02, botao_slider_02_03)
        mudaCorDoBotãoAutomático(botao_slider_02_02)
    }
    if(source_01.classList.contains('slide-02-03')){
        resetarCoresSlide(botao_slider_02_01, botao_slider_02_02, botao_slider_02_03)
        mudaCorDoBotãoAutomático(botao_slider_02_03)
    }
    
    source_02.style.animation = source_03.style.animation = "animacao 1s"
    source_02.style.display = source_03.style.display = 'none'
    source_01.style.display = 'flex'

    checkBefore()
}

function mudaCorDoBotãoAutomático(botao){
    botao.style.backgroundColor = "var(--cor-primaria)"
}

function resetarCoresSlide(botao_01, botao_02, botao_03){
    botao_01.style.backgroundColor = botao_02.style.backgroundColor = botao_03.style.backgroundColor = "rgba(0, 0, 0, 0.1)"
}

// estilo

area_botao_slider_01_01.onmouseenter = function(){
    botao_slider_01_01.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_01_01.onmouseout = function(){
    if(slide_01_01.style.display==="none") botao_slider_01_01.style.backgroundColor = "rgba(0,0,0,0.1)"
}

area_botao_slider_01_02.onmouseenter = function(){
    botao_slider_01_02.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_01_02.onmouseout = function(){
    if(slide_01_02.style.display==="none") botao_slider_01_02.style.backgroundColor = "rgba(0,0,0,0.1)"
}

area_botao_slider_01_03.onmouseenter = function(){
    botao_slider_01_03.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_01_03.onmouseout = function(){
    if(slide_01_03.style.display==="none") botao_slider_01_03.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_01_01.onmouseenter = function(){
    botao_slider_01_01.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_01_01.onmouseout = function(){
    if(slide_01_01.style.display==="none") botao_slider_01_01.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_01_02.onmouseenter = function(){
    botao_slider_01_02.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_01_02.onmouseout = function(){
    if(slide_01_02.style.display==="none") botao_slider_01_02.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_01_03.onmouseenter = function(){
    botao_slider_01_03.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_01_03.onmouseout = function(){
    if(slide_01_03.style.display==="none") botao_slider_01_03.style.backgroundColor = "rgba(0,0,0,0.1)"
}

/*------------------------------------------------------------------------------------------------*/

area_botao_slider_02_01.onmouseenter = function(){
    botao_slider_02_01.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_02_01.onmouseout = function(){
    if(slide_02_01.style.display==="none") botao_slider_02_01.style.backgroundColor = "rgba(0,0,0,0.1)"
}

area_botao_slider_02_02.onmouseenter = function(){
    botao_slider_02_02.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_02_02.onmouseout = function(){
    if(slide_02_02.style.display==="none") botao_slider_02_02.style.backgroundColor = "rgba(0,0,0,0.1)"
}

area_botao_slider_02_03.onmouseenter = function(){
    botao_slider_02_03.style.backgroundColor = "var(--cor-primaria)"
}
area_botao_slider_02_03.onmouseout = function(){
    if(slide_02_03.style.display==="none") botao_slider_02_03.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_02_01.onmouseenter = function(){
    botao_slider_02_01.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_02_01.onmouseout = function(){
    if(slide_02_01.style.display==="none") botao_slider_02_01.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_02_02.onmouseenter = function(){
    botao_slider_02_02.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_02_02.onmouseout = function(){
    if(slide_02_02.style.display==="none") botao_slider_02_02.style.backgroundColor = "rgba(0,0,0,0.1)"
}

botao_slider_02_03.onmouseenter = function(){
    botao_slider_02_03.style.backgroundColor = "var(--cor-primaria)"
}
botao_slider_02_03.onmouseout = function(){
    if(slide_02_03.style.display==="none") botao_slider_02_03.style.backgroundColor = "rgba(0,0,0,0.1)"
}