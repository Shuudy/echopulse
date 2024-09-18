<div class="sidebar">
    <div class="sidebar-logo">Echo Pulse</div>
    <div class="sidebar-sep"></div>
    <div class="sidebar-links">
        @foreach($musiques as $musique)
        <a class="sidebar-link" href="{{ route("musique.show", $musique['id']) }}">{{ $musique['titre'] }}</a>
        @endforeach
    </div>
</div>