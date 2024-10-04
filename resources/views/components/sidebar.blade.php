<div class="sidebar">
    <div class="sidebar-logo">Echo Pulse</div>
    <div class="sidebar-sep"></div>
    <div class="sidebar-links">
        @foreach($musiques as $musique)
        <a class="sidebar-link {{ Request::is('musique/'.$musique['id']) ? 'active' : '' }}" href="{{ route('musique.show', $musique['id']) }}">
            <div class="sidebar-music-photo">
                <img src="{{ asset('images/'.$musique['chemin_fichier_image']) }}" alt="" srcset="">
            </div>
            <div class="sidebar-music-info">
                <span>{{ Str::limit($musique['titre'], 20) }}</span>
                <span>{{ Str::limit($musique['nom_artiste'], 20) }}</span>
            </div>
        </a>
        @endforeach
    </div>
</div>