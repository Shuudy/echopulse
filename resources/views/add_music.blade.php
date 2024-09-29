<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('musique.store') }}" method="post">
        @csrf
        <input type="text" name="titre">
        <input type="text" name="nom_artiste">
        <input type="text" name="album">

        <input type="file" name="fichier_audio">
        <input type="file" name="fichier_image">

        <input type="submit">
    </form>
</body>
</html>