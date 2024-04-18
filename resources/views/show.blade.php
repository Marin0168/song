<x-layouts>
    <x-slot:title>
        ShowPage
    </x-slot:title>
    @if ($song)
        <h1>{{ $song->title }}</h1>
        <p>{{ $song->singer }}</p>
    @endif

<form method="GET" action="{{ route('edit', $id) }}">
    @csrf
    @method('PUT')
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
</form>

</x-layouts>
