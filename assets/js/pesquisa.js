const lupa = document.querySelectorAll('.pesquisa')
const lupa2 = document.querySelector('.lupa')

lupa2.onmouseenter = ()=>{
    lupa2.querySelector('.circulo-01').style.display = 'flex'
    lupa2.querySelector('.circulo-01').style.animation = 'lupa .3s'
}

lupa2.onmouseleave = ()=>{
    lupa2.querySelector('.circulo-01').style.animation = 'lupaInverso .3s'
    setTimeout(()=>{
        lupa2.querySelector('.circulo-01').style.display = 'none'
    }, 300)
}
