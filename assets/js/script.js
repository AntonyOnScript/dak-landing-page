let slide_01_01 = document.querySelector('.slide-01-01')
let slide_01_02 = document.querySelector('.slide-01-02')
let slide_01_03 = document.querySelector('.slide-01-03')
let slide_01_04 = document.querySelector('.slide-01-04')

let area_botao_slider_01_01 = document.querySelector('.area-botao-slider-01-01')
let area_botao_slider_01_02 = document.querySelector('.area-botao-slider-01-02')
let area_botao_slider_01_03 = document.querySelector('.area-botao-slider-01-03')
let area_botao_slider_01_04 = document.querySelector('.area-botao-slider-01-04')

let botao_slider_01_01 = document.querySelector('.botao-slider-01-01')
let botao_slider_01_02 = document.querySelector('.botao-slider-01-02')
let botao_slider_01_03 = document.querySelector('.botao-slider-01-03')
let botao_slider_01_04 = document.querySelector('.botao-slider-01-04')

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

var check
// conteudo do before 
let before_numero = document.querySelector('.textos-hero div h3')
before_numero.dataset.content = '01'

document.addEventListener('click', passaSlide)

passaSlideAutomatico(slide_01_03, slide_01_01, slide_01_02, slide_01_04)
passaSlideAutomatico(slide_02_03, slide_02_01, slide_02_02)

//funções
function passaSlide(e){
    acaoDosBotoes(e.target)
}
// a cada 5.5 segundos passa o slide do hero automaticamente

var intervaloSlide01 = setInterval(() => {
    passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
}, 5500);

const intervaloSlide02 = setInterval(() => {
    passaSlideAutomatico(slide_02_01, slide_02_02, slide_02_03)
}, 5500);

// verifica a resolução
window.onresize = verificaTela
function verificaTela(){
    if(window.innerWidth<=1315){
        botao_slider_01_01.style.visibility = 'hidden'
        botao_slider_01_02.style.visibility = 'hidden'
        botao_slider_01_03.style.visibility = 'hidden'
        botao_slider_01_04.style.visibility  = 'hidden'

        slide_01_01.style.display = "none"
        slide_01_02.style.display = "none"
        slide_01_03.style.display = "none"
        slide_01_04.style.display = "none"
        slide_01_04.pause()

        passaSlideAutomatico(slide_01_02, slide_01_01, slide_01_03, slide_01_04)

        document.querySelector('.slider').style.backgroundColor = "#c6e0eb"
    }
    if(window.innerWidth>1315){
        botao_slider_01_01.style.visibility = 'visible'
        botao_slider_01_02.style.visibility = 'visible'
        botao_slider_01_03.style.visibility = 'visible'
        botao_slider_01_04.style.visibility  = 'visible'
        slide_01_04.pause()

        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03, botao_slider_01_04)
        mudaCorDoBotãoAutomático(botao_slider_01_01)

        slide_01_01.style.display = "flex"
        slide_01_02.style.display = "flex"
        slide_01_03.style.display = "flex"
        slide_01_04.style.display = "flex"
        passaSlideAutomatico(slide_01_02, slide_01_01, slide_01_03, slide_01_04)
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
    }else if(slide_01_04.style.display!=="none"){
        before_numero.dataset.content = '04'
    }
}

// passa o slide automático
function passaSlideAutomatico(slide01, slide02, slide03, slide04){
    if(typeof slide04 !== "undefined"){
        if(slide01.style.display!=="none"){
            passaSlideProLado(slide02, slide03, slide01, slide04)
            checkBefore()
        }else if(slide02.style.display!=="none"){
            passaSlideProLado(slide03, slide02, slide01, slide04)
            checkBefore()
        }else if(slide03.style.display!=="none"){
            passaSlideProLado(slide04, slide02, slide03, slide01)
            checkBefore()
        }else if(slide04.style.display!=="none"){
            passaSlideProLado(slide01, slide02, slide03, slide04)
            checkBefore()
        }
    }else{
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
}

// ação dos botoes no slide
function acaoDosBotoes(elemento){
    if(elemento.classList.contains('area-botao-slider-01-01') || elemento.classList.contains('botao-slider-01-01')){
        passaSlideProLado(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
        if(!slide_01_04.paused){
            slide_01_04.pause()
            intervaloSlide01 = setInterval(() => {
                passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
            }, 5500);
        }
    }
    if(elemento.classList.contains('area-botao-slider-01-02') || elemento.classList.contains('botao-slider-01-02')){
        passaSlideProLado(slide_01_02, slide_01_01, slide_01_03, slide_01_04)
        if(!slide_01_04.paused){
            slide_01_04.pause()
            intervaloSlide01 = setInterval(() => {
                passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
            }, 5500);
        }
    }
    if(elemento.classList.contains('area-botao-slider-01-03') || elemento.classList.contains('botao-slider-01-03')){
        passaSlideProLado(slide_01_03, slide_01_02, slide_01_01, slide_01_04)
        if(!slide_01_04.paused){
            slide_01_04.pause()
            intervaloSlide01 = setInterval(() => {
                passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
            }, 5500);
        }
    }
    if(elemento.classList.contains('area-botao-slider-01-04') || elemento.classList.contains('botao-slider-01-04')){
        passaSlideProLado(slide_01_04, slide_01_02, slide_01_01, slide_01_03)
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

    if(elemento.classList.contains('seta-03')){
        if(!slide_01_04.paused){
            slide_01_04.pause()
            intervaloSlide01 = setInterval(() => {
                passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
            }, 5500);
        }
        passaSlideAutomatico(slide_01_02, slide_01_01, slide_01_04, slide_01_03)
    }
    if(elemento.classList.contains('seta-04')){
        if(!slide_01_04.paused){
            slide_01_04.pause()
            intervaloSlide01 = setInterval(() => {
                passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
            }, 5500);
        }
        passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
    }
}

function passaSlideProLado(source_01, source_02, source_03, source_04){
    if(source_01.classList.contains('slide-01-01')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03, botao_slider_01_04)
        mudaCorDoBotãoAutomático(botao_slider_01_01)
    }
    if(source_01.classList.contains('slide-01-02')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03, botao_slider_01_04)
        mudaCorDoBotãoAutomático(botao_slider_01_02)
    }
    if(source_01.classList.contains('slide-01-03')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03, botao_slider_01_04)
        mudaCorDoBotãoAutomático(botao_slider_01_03)
    }
    if(source_01.classList.contains('slide-01-04')){
        resetarCoresSlide(botao_slider_01_01, botao_slider_01_02, botao_slider_01_03, botao_slider_01_04)
        mudaCorDoBotãoAutomático(botao_slider_01_04)
        if(document.documentElement.scrollTop <= 1200){
            clearInterval(intervaloSlide01)
            slide_01_04.play()
            slide_01_04.onended = function(){
                passaSlideAutomatico(slide_01_04, slide_01_01, slide_01_02, slide_01_03)
                intervaloSlide01 = setInterval(() => {
                    passaSlideAutomatico(slide_01_01, slide_01_02, slide_01_03, slide_01_04)
                }, 5500);
            }
        }
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
    if(typeof source_04 !== "undefined" && typeof source_04 !== "null") {
        source_04.style.animation = "animacao 1s"
        source_04.style.display = "none"
    }
    source_02.style.display = source_03.style.display = 'none'

    source_01.style.display = 'flex'
    checkBefore()
}

function mudaCorDoBotãoAutomático(botao){
    botao.style.backgroundColor = "var(--cor-primaria)"
}

function resetarCoresSlide(botao_01, botao_02, botao_03, botao_04){
    botao_01.style.backgroundColor = botao_02.style.backgroundColor = botao_03.style.backgroundColor = "rgba(0, 0, 0, 0.1)"
    if(typeof botao_04!=="undefined"){
        botao_04.style.backgroundColor = "rgba(0, 0, 0, 0.1)"
    }
}

// MENU FIXO 

let menu_fixo = document.querySelector('.menu[menu-fixo]')
window.onscroll = function () {
    if(document.documentElement.scrollTop < 180){
        someMenu()
    }else if(document.documentElement.scrollTop > 180){
        apareceMenu()
    }
}
function someMenu(){
    menu_fixo.style.display="none"
}
function apareceMenu(){
    menu_fixo.style.animation = "apareceMenu .3s 1"
    menu_fixo.style.display = "flex"
}
// estilo
// menus
let menus = document.querySelector('.menu')
let menu_lateral = document.querySelector('.menu-lateral')
let menu_01 = document.querySelector('.menu-mobile-01')
let menu_02 = document.querySelector('.menu-mobile-02')
let menu_topo = document.querySelector('#menu-topo')

let link_menu_01 = document.querySelector('#link_01')
let link_menu_02 = document.querySelector('#link_02')
let link_menu_03 = document.querySelector('#link_03')
let link_menu_04 = document.querySelector('#link_04')
let link_menu_05 = document.querySelector('#link_05')

menu_01.addEventListener('click', function(){
    if(menu_01.getAttribute('ativado')){
        menu_01.removeAttribute('ativado')
        menu_02.removeAttribute('ativado')
        menu_01.style.position = "relative"
        menu_02.style.position = "relative"
        menu_01.style.right = "0px"
        menu_02.style.right = "0px"
        menu_fixo.style.zIndex = "4000"
        menu_fixo.style.backgroundColor = "white"
        menu_fixo.querySelector('img').style.visibility = "visible"

        menu_lateral.style.animation = "menuLateralSome .3s"
        setTimeout(() => {
            menu_lateral.style.display = "none"
        }, 300); 
        document.body.style.overflowY = "auto"

        menus.style.boxShadow = "0px 1px 10px rgba(0,0,0,0.1)"
    }else{
        menu_01.setAttribute('ativado', 's')
        menu_01.style.position = "absolute"
        menu_01.style.right = "0px"
        menu_01.style.display = "flex"
        menu_fixo.style.zIndex = "9000"
        menu_fixo.style.backgroundColor = "rgba(0,0,0,0)"
        menu_fixo.querySelector('img').style.visibility = "hidden"

        menu_lateral.style.top = document.documentElement.scrollTop+'px'
        menu_lateral.style.display = "flex"
        menu_lateral.style.animation = "menuLateral .3s"
        document.body.style.overflow = "hidden"
        menus.style.boxShadow = "0px 1px 10px rgba(0,0,0,0.0)"
    }
})

menu_02.addEventListener('click', function(){
    if(menu_02.getAttribute('ativado')){
        menu_02.removeAttribute('ativado')
        menu_01.removeAttribute('ativado')
        menu_01.style.position = "relative"
        menu_02.style.position = "relative"
        menu_01.style.right = "0px"
        menu_02.style.right = "0px"
        menu_topo.style.zIndex = "4000"
        menu_topo.querySelector('img').style.visibility = "visible"

        menu_lateral.style.animation = "menuLateralSome .3s"
        setTimeout(() => {
            menu_lateral.style.display = "none"
        }, 300); 
        document.body.style.overflowY = "auto"
    }else{
        menu_02.setAttribute('ativado', 's')
        menu_02.style.position = "absolute"
        menu_02.style.right = "0px"
        menu_topo.querySelector('img').style.visibility = "hidden"
        menu_topo.style.zIndex = "9000"

        menu_lateral.style.top = "0px"
        menu_lateral.style.display = "flex"
        menu_lateral.style.animation = "menuLateral .3s"
        document.body.style.overflow = "hidden"
        document.documentElement.scrollTop = 0
    }
})

function fechaMenuLateral(){
    menu_01.removeAttribute('ativado')
    menu_02.removeAttribute('ativado')
    menu_01.style.position = "relative"
    menu_02.style.position = "relative"
    menu_01.style.right = "0px"
    menu_02.style.right = "0px"
    menu_fixo.style.zIndex = "4000"
    menu_fixo.style.backgroundColor = "white"
    menu_fixo.querySelector('img').style.visibility = "visible"
    menu_lateral.style.display = "none"
 
    document.body.style.overflowY = "auto"
}

link_menu_01.onclick = fechaMenuLateral
link_menu_02.onclick = fechaMenuLateral
link_menu_03.onclick = fechaMenuLateral
link_menu_04.onclick = fechaMenuLateral
link_menu_05.onclick = fechaMenuLateral

// outras interações
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