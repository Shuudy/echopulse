<div class="sidebar">
    <div class="sidebar-logo">Echo Pulse</div>
    <div class="sidebar-sep"></div>
    <div class="sidebar-links">
        @foreach($musiques as $musique)
        <a class="sidebar-link" href="{{ route('musique.show', $musique['id']) }}">
            <div class="sidebar-music-photo">
                <img src="{{ asset('images/'.$musique['chemin_fichier_image']) }}" alt="" srcset="">
            </div>
            <div class="sidebar-music-info">
                <span>{{ $musique['titre'] }}</span>
                <span>{{ $musique['nom_artiste'] }}</span>
            </div>
        </a>
        @endforeach
    </div>
</div>