<x-app-layout>

    @foreach($albums as $album)
    <div class="my-4 bg-red-400">
        <a href="{{ route('albums.show', $album->id) }}" class="block hover:bg-gray-100 rounded-lg p-4 transition duration-300 ease-in-out">
            <strong class="text-blue-500">Name:</strong> {{ $album->name }} <br>
            <span class="text-gray-600">Year: {{ $album->year }}</span>
        </a>
    </div>
@endforeach

</x-app-layout>