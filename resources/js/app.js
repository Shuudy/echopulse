import '../css/app.scss';

const audioElement = document.querySelector("audio");
const audioCtx = new AudioContext();
const track = audioCtx.createMediaElementSource(audioElement);

const progressBarContainer = document.querySelector(".mediabar-progressbar-container");
const progressBarFilled = document.querySelector(".mediabar-progressbar");

const playButton = document.querySelector(".mediabar-playpause-playbutton");
const playIcon = document.querySelector(".mediabar-playpause-playicon");
const pauseIcon = document.querySelector(".mediabar-playpause-pauseicon");

const playerCurrentTime = document.querySelector(".mediabar-timecode-current");
const playerDuration = document.querySelector(".mediabar-timecode-duration");

const volumeIcon = document.querySelector(".volume-icon");
const mutedIcon = document.querySelector(".volume-icon-mute");
const volumeControl = document.querySelector(".volume-control");

let isMuted = false;
let previousVolume = volumeControl.value;
const gainNode = audioCtx.createGain();

window.addEventListener("load", () => {

    // Autoplay
    if (playButton.dataset.playing === "false") {
        audioElement.play().then(() => {
            playButton.dataset.playing = "true";
            playIcon.classList.add("mediabar-hidden");
            pauseIcon.classList.remove("mediabar-hidden");
        }).catch(() => {
            console.log("Autoplay bloqué par le navigateur. L'utilisateur doit interagir avec la page.");
        });
    }

    setTimes()

    audioElement.addEventListener("timeupdate", () => {
        progressUpdate();
        setTimes();
    });

    const analyser = audioCtx.createAnalyser();
    analyser.fftSize = 256;
    const bufferLength = analyser.frequencyBinCount;
    const dataArray = new Uint8Array(bufferLength);

    track.connect(analyser).connect(audioCtx.destination);

    const canvas = document.querySelector(".frequency-canvas");
    const canvasCtx = canvas.getContext("2d");

    canvas.width = 600;
    canvas.height = 300;

    function draw() {
        requestAnimationFrame(draw);

        analyser.getByteFrequencyData(dataArray);

        canvasCtx.clearRect(0, 0, canvas.width, canvas.height);

        const barWidth = (canvas.width / bufferLength) * 1.1;
        let barHeight;
        let x = 0;

        for (let i = 0; i < bufferLength; i++) {
            barHeight = dataArray[i] / 2;

            canvasCtx.fillStyle = 'rgba(138, 43, 226, .5)';
            canvasCtx.fillRect(x, canvas.height - barHeight / 2, barWidth, barHeight);

            x += barWidth + 1;
        }
    }

    audioElement.addEventListener("play", () => {
        if (audioCtx.state === 'suspended') audioCtx.resume();
        
        draw();
    });

    function togglePlayPause() {
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
    }

    audioElement.addEventListener("ended", () => {
        playButton.dataset.playing = "false";

        pauseIcon.classList.add("mediabar-hidden");
        playIcon.classList.remove("mediabar-hidden");

        progressBarFilled.style.width = "0%";
        audioElement.currentTime = 0;

        // Play the next music when the music is ended
        const nextButton = document.querySelector(".mediabar-after a");
        if (nextButton.getAttribute("href") != "") {
            nextButton.click();
        }
    });
    
    const savedVolume = localStorage.getItem("savedVolume");
    volumeControl.value = savedVolume !== null ? savedVolume : volumeControl.value;
    gainNode.gain.value = volumeControl.value;

    function updateVolumeIcon() {
        if (isMuted) {
            volumeIcon.classList.add('mediabar-hidden'); // Masquer l'icône du volume activé
            mutedIcon.classList.remove('mediabar-hidden'); // Afficher l'icône mute
        } else {
            volumeIcon.classList.remove('mediabar-hidden'); // Afficher l'icône du volume activé
            mutedIcon.classList.add('mediabar-hidden'); // Masquer l'icône mute
        }
    }    

    function toggleMute () {
        if (!isMuted) {
            previousVolume = volumeControl.value;
            volumeControl.value = -1;
            gainNode.gain.value = -1;
            isMuted = true;
        } else {
            volumeControl.value = previousVolume;
            gainNode.gain.value = previousVolume;
            isMuted = false;
        }
        updateVolumeIcon();
    }
    
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
        const scrubTime = (event.offsetX / progressBarContainer.offsetWidth) * audioElement.duration;
        audioElement.currentTime = scrubTime;
    }
    
    // Events
    playButton.addEventListener('click', togglePlayPause);
    progressBarContainer.addEventListener("click", scrub);

    volumeControl.addEventListener("input", () => {
        gainNode.gain.value = volumeControl.value;
        localStorage.setItem("savedVolume", volumeControl.value);
        if (volumeControl.value > -1) isMuted = false;
        updateVolumeIcon();
    });

    volumeIcon.addEventListener("click", toggleMute);
    mutedIcon.addEventListener("click", toggleMute);

    document.addEventListener("keyup", (e) => {
        if (e.key == " " || e.code == "Space") {
            togglePlayPause();
        }
    })
}, false);


