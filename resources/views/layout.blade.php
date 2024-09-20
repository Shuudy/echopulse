<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $musique['titre'] }} - Echo Pulse</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="music">

        <div class="music-img"><img src="{{ asset('images/'.$musique['chemin_fichier_image']) }}" alt=""></div>
        <canvas class="frequency-canvas"></canvas>
        <div class="music-desc">
            <span>{{ $musique['titre'] }}</span>
            <span>{{ $musique['nom_artiste'].' • '.$musique['album'] }}</span>
        </div>
    </div>
    <audio src="{{ asset('musiques/'.$musique['chemin_fichier_audio']) }}"></audio>
    <x-sidebar :musiques="$musiques" />
    <x-mediabar :musique="$musique" :nextMusique="$nextMusique" :backMusique="$backMusique" />
</body>
</html>