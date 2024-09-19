<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="music">
        <div class="music-img"><img src="{{ asset('images/'.$musique['chemin_fichier_image']) }}" alt=""></div>
        <div class="music-desc">
            <span>{{ $musique['titre'] }}</span>
            <span>{{ $musique['nom_artiste'] }}</span>
        </div>
    </div>
    <audio src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/858/outfoxing.mp3" crossorigin="anonymous" ></audio>
    <x-sidebar :musiques="$musiques" />
    <x-mediabar :musique="$musique" />
</body>
</html>