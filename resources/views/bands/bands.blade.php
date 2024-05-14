<x-app-layout>

    @foreach($bands as $band)
    <div class="my-4 bg-red-400">
        <a href="{{ route('bands.show', $band->id) }}" class="block hover:bg-gray-100 rounded-lg p-4 transition duration-300 ease-in-out">
            <strong class="text-blue-500">Name:</strong> {{ $band->name }} <br>
            <span class="text-gray-600">Genre: {{ $band->genre }}</span>
        </a>
    </div>
@endforeach

</x-app-layout>