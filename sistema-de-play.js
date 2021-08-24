const musicContainer = document.getElementById('playing');
const playBtn = document.getElementById('play');
const audio = document.getElementById('audio');
const mutebtn = document.getElementById("mutebtn");

// Play som
function playSong() {
    musicContainer.classList.add('play');
    playBtn.querySelector('i.fa').classList.remove('fa-play');
    playBtn.querySelector('i.fa').classList.add('fa-pause');

    audio.play();
}

// Pause som

function pauseSong() {
    musicContainer.classList.remove('play');
    playBtn.querySelector('i.fa').classList.add('fa-play');
    playBtn.querySelector('i.fa').classList.remove('fa-pause');
    audio.pause();
    audio.src = audio.src;
}
// clicar som
playBtn.addEventListener('click', () => {
    const isPlaying = musicContainer.classList.contains('play');

    if (isPlaying) {
        pauseSong();
    } else {
        playSong();
    }

});

mutebtn.addEventListener("click",mute);
function mute() {
            if(audio.muted){
                musicContainer.classList.remove('mutebtn');
                mutebtn.querySelector('i.fa').classList.add('fa-volume-up');
                mutebtn.querySelector('i.fa').classList.remove('fa-volume-off');
                audio.muted= false;
                
            }else{
                musicContainer.classList.add('mutebtn');
                mutebtn.querySelector('i.fa').classList.add('fa-volume-off');
                mutebtn.querySelector('i.fa').classList.remove('fa-volume-up');
                audio.muted = true;
            }
        }
