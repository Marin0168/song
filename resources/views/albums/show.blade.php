<x-app-layout>
    @if ($album)
        <h1>{{ $album->name }}</h1>
        <p>{{ $album->year }}</p>
    @endif
@auth
    <form method="GET" action="{{ route('albums.edit', $album->id) }}">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
</form>
@endauth

</x-app-layout>
