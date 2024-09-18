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
        <div class="music-img"><img src="{{ asset($musique['chemin_fichier_image']) }}" alt=""></div>
        <span>{{ $musique['titre'] }}</span>
    </div>
    <x-sidebar :musiques="$musiques"/>
    <x-mediabar />
    
</body>
</html>