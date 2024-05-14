<x-app-layout>
    @if ($band)
        <h1>{{ $band->name }}</h1>
        <p>{{ $band->genre }}</p>
    @endif

    <form method="GET" action="{{ route('bands.edit', $band->id) }}">
    @auth
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
    @endauth
</form>

</x-app-layout>
