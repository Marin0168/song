<x-songs-layouts>
    <x-slot:title>
        CreatePage
    </x-slot:title>
    <x-slot:currentpage>
    @if (Route::currentRouteName() == 'songs.create')
        bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium
    @else
        text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium
    @endif
</x-slot:currentpage>


    <form method="POST" action="{{ route('songs.store') }}" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
            <label for="singer" class="block text-gray-700 text-sm font-bold mb-2">Singer:</label>
            <input type="text" id="singer" name="singer" value="{{ old('singer') }}" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Song
            </button>
        </div>
    </form>
</x-songs-layouts>
