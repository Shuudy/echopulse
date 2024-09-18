import '../css/app.scss';

const audioElement = document.querySelector("audio");
const audioCtx = new AudioContext();
const track = audioCtx.createMediaElementSource(audioElement);

const progressBarContainer = document.querySelector(".mediabar-progressbar-container");
const progressBarFilled = document.querySelector(".mediabar-progressbar");

const playButton = document.querySelector(".mediabar-playpause-playbutton");
const playIcon = document.querySelector(".mediabar-playpause-playicon");

const playerCurrentTime = document.querySelector(".mediabar-timecode-current");
const playerDuration = document.querySelector(".mediabar-timecode-duration");

const pauseIcon = document.querySelector(".mediabar-playpause-pauseicon");

window.addEventListener("load", () => {
    setTimes()

    audioElement.addEventListener("timeupdate", () => {
        progressUpdate();
        setTimes()
        console.log("timeupdate");
    });
    
    playButton.addEventListener('click', () => {
        console.log("Click play button")
        // Si l'audio est en stop, alors on démarre l'audio
        if (audioCtx.state === "suspended") {
            audioCtx.resume();
        }
    
        if (playButton.dataset.playing === "false") {
            audioElement.play();
    
            playButton.dataset.playing = "true";
            playIcon.classList.add("mediabar-hidden");
            pauseIcon.classList.remove("mediabar-hidden");
        } else if (playButton.dataset.playing === "true") {
            audioElement.pause();
    
            playButton.dataset.playing = "false";
            pauseIcon.classList.add("mediabar-hidden");
            playIcon.classList.remove("mediabar-hidden");
        }
    });

    audioElement.addEventListener("ended", () => {
        playButton.dataset.playing = "false";

        pauseIcon.classList.add("mediabar-hidden");
        playIcon.classList.remove("mediabar-hidden");

        progressBarFilled.style.width = "0%";
        audioElement.currentTime = 0;
        audioElement.duration = audioElement.duration;
    });
    
    const gainNode = audioCtx.createGain();
    
    const volumeControl = document.querySelector(".volume-control");
    volumeControl.addEventListener("input", () => {
        gainNode.gain.value = volumeControl.value;
    });
    
    track.connect(gainNode).connect(audioCtx.destination);
    
    function setTimes() {
        playerCurrentTime.textContent = new Date(audioElement.currentTime * 1000)
          .toISOString()
          .substr(14, 5)
        playerDuration.textContent = new Date(audioElement.duration * 1000)
          .toISOString()
          .substr(14, 5)
      }

    function progressUpdate() {
        const percent = (audioElement.currentTime / audioElement.duration) * 100;
        progressBarFilled.style.width = `${percent}%`;
    }
    
    function scrub(event) {
        const scrubTime =
        (event.offsetX / progressBarContainer.offsetWidth) * audioElement.duration;
        console.log(audioElement.currentTime)
        audioElement.currentTime = 20;
        console.log(scrubTime, audioElement.currentTime)
    }
    
    progressBarContainer.addEventListener("click", scrub);
}, false);
