const youtube = document.querySelector('.youtube')
const video_modal_box = document.querySelector('.modal-box-video')
const video_modal = video_modal_box.querySelector('iframe')
const fecha_video_modal = video_modal_box.querySelector('.fecha-video-modal')
const logo_youtube = document.querySelector('.logo-youtube')

window.onkeyup = function(e){
    if(e.key === 'Escape'){ 
        if(video_modal_box.style.display === "flex"){
            saiDoModal()
        }
    }
}

logo_youtube.onclick = ()=>{
    video_modal_box.style.display="flex"
}

fecha_video_modal.onclick = ()=>{
    saiDoModal()
}

youtube.addEventListener('click', ()=>{
    video_modal_box.style.display="flex"
})

function saiDoModal(){
    video_modal.src = video_modal.src+'?paused=1'
    video_modal_box.style.display = "none"
}