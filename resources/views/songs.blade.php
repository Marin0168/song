<x-layouts>
<x-slot:title>
        SongsPage
    </x-slot:title>
@foreach($songs as $song)
   <a href="{{ route('show', $song->id) }}"><strong>titel: {{$song->title}}</strong></br>
   singer: {{$song->singer}}</br></a>
@endforeach
</x-layouts>