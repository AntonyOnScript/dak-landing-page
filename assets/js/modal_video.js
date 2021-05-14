const youtube = document.querySelector('.youtube')
const video_modal_box = document.querySelector('.modal-box-video')
const video_modal = video_modal_box.querySelector('iframe')
const fecha_video_modal = video_modal_box.querySelector('.fecha-video-modal')
const logo_youtube = document.querySelector('.logo-youtube')

logo_youtube.onclick = ()=>{
    video_modal_box.style.display="flex"
}

fecha_video_modal.onclick = ()=>{
    video_modal.src = video_modal.src+'?paused=1'
    video_modal_box.style.display = "none"
}

youtube.addEventListener('click', ()=>{
    video_modal_box.style.display="flex"
})

document.addEventListener('click', (e)=>{
    let el = e.target
    if(!el.classList.contains('youtube-video')) {
        video_modal_box.display = 'none'
    }
})