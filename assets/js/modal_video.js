const youtube = document.querySelector('.youtube')
const video_modal_box = document.querySelector('.modal-box-video')
const video_modal = video_modal_box.querySelector('iframe')
const fecha_video_modal = video_modal_box.querySelector('.fecha-video-modal')
const logo_youtube = document.querySelector('.logo-youtube')
const botao_assista_agora = document.querySelector('.assista-agora')

window.onkeyup = function(e){
    if(e.key === 'Escape'){ 
        if(video_modal_box.style.display === "flex"){
            saiDoModalVideo()
        }
    }
}

botao_assista_agora.addEventListener('click', mostraModalVideo)

logo_youtube.addEventListener('click', mostraModalVideo)

fecha_video_modal.addEventListener('click', saiDoModalVideo)

youtube.addEventListener('click', mostraModalVideo)

function saiDoModalVideo(){
    video_modal.src = video_modal.src+'?paused=1'
    video_modal_box.style.display = "none"
}

function mostraModalVideo(){
    video_modal_box.style.display="flex"
}