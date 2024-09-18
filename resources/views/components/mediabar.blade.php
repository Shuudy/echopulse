<div class="mediabar">
    <div class="mediabar-progressbar-container" id="progressbar-container">
        <div class="mediabar-progressbar" id="progressbar"></div>
    </div>
    <div class="mediabar-content">      

        <div class="mediabar-controls-left"></div>

        <div class="mediabar-controls-center">
            <div class="mediabar-before">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" color="#fff" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M20.341 4.247l-8 7a1 1 0 0 0 0 1.506l8 7c.647 .565 1.659 .106 1.659 -.753v-14c0 -.86 -1.012 -1.318 -1.659 -.753z" stroke-width="0" fill="currentColor" />
                    <path d="M9.341 4.247l-8 7a1 1 0 0 0 0 1.506l8 7c.647 .565 1.659 .106 1.659 -.753v-14c0 -.86 -1.012 -1.318 -1.659 -.753z" stroke-width="0" fill="currentColor" />
                </svg>
            </div>
            <div class="mediabar-playpause">
                <div class="mediabar-playpause-playbutton" data-playing="false">
                    <svg class="mediabar-playpause-playicon" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" color="#fff" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="currentColor" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mediabar-playpause-pauseicon mediabar-hidden" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" color="#fff" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 4h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor" />
                        <path d="M17 4h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="mediabar-after">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" color="#fff" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M2 5v14c0 .86 1.012 1.318 1.659 .753l8 -7a1 1 0 0 0 0 -1.506l-8 -7c-.647 -.565 -1.659 -.106 -1.659 .753z" stroke-width="0" fill="currentColor" />
                    <path d="M13 5v14c0 .86 1.012 1.318 1.659 .753l8 -7a1 1 0 0 0 0 -1.506l-8 -7c-.647 -.565 -1.659 -.106 -1.659 .753z" stroke-width="0" fill="currentColor" />
                </svg>
            </div>
            <div class="mediabar-timecode">
                <span class="mediabar-timecode-current">0:00</span>
                <span>/</span>
                <span class="mediabar-timecode-duration">0:00</span>
            </div>
        </div>

        <div class="mediabar-controls-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M15 8a5 5 0 0 1 0 8" />
                <path d="M17.7 5a9 9 0 0 1 0 14" />
                <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
            </svg>

            <input type="range" class="volume-control" min="0" max="1" step="0.01" value="1">            
        </div>
    </div>
</div>