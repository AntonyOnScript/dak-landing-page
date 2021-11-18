// menus

let menus = document.querySelector('.menu')
let menu_lateral = document.querySelector('.menu-lateral')
let menu_01 = document.querySelector('.menu-mobile-01')
let menu_02 = document.querySelector('.menu-mobile-02')
let menu_topo = document.querySelector('#menu-topo')

let link_menu_01 = document.querySelector('.link_01')
let link_menu_02 = document.querySelector('.link_02')
let link_menu_03 = document.querySelector('.link_03')
let link_menu_04 = document.querySelector('.link_04')
let link_menu_05 = document.querySelector('.link_05')
let menu_fixo = document.querySelector('.menu[menu-fixo]')

// MENU FIXO 

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
        document.body.style.overflowY = "hidden"
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
        document.body.style.overflowY = "hidden"
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
    menu_topo.querySelector('img').style.visibility = "visible"
    menu_lateral.style.display = "none"
 
    document.body.style.overflowY = "auto"
}

link_menu_01.onclick = fechaMenuLateral
link_menu_02.onclick = fechaMenuLateral
link_menu_03.onclick = fechaMenuLateral
link_menu_04.onclick = fechaMenuLateral
link_menu_05.onclick = fechaMenuLateral