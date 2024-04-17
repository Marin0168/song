<x-layouts>
    @if ($song)
        <h1>{{ $song->title }}</h1>
        <p>{{ $song->singer }}</p>
    @endif
</x-layouts>
