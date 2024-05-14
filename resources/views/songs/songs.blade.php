<x-app-layout>
    @foreach($songs as $song)
    <div class="my-4 bg-red-400">
        <a href="{{ route('songs.show', $song->id) }}" class="block hover:bg-gray-100 rounded-lg p-4 transition duration-300 ease-in-out">
            <strong class="text-blue-500">Titel:</strong> {{ $song->title }} <br>
            <span class="text-gray-600">Singer: {{ $song->singer }}</span>
        </a>
    </div>
@endforeach

</x-app-layout>