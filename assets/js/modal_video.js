const youtube = document.querySelector('.youtube')
const video_modal_box = document.querySelector('.modal-box-video')
const video_modal = video_modal_box.querySelector('iframe')
const fecha_video_modal = video_modal_box.querySelector('.fecha-video-modal')

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