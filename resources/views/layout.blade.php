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
        <div class="music-img"><img src="https://cdn.venngage.com/template/thumbnail/small/bf008bfe-9bf6-4511-b795-e86f070bfff5.webp" alt=""></div>
        <div class="music-desc">
            <span>Music name</span>
            <span>Music name</span>
        </div>        
    </div>
    <audio src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/858/outfoxing.mp3" crossorigin="anonymous" ></audio>
    <x-sidebar />
    <x-mediabar />
</body>
</html>