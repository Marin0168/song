@auth
<x-app-layout>
    <div class="flex justify-between max-w-md mx-auto">
    <form method="POST" action="{{ route('albums.update', ['album' => $album->id]) }}">
        @csrf 
        @method('PUT')

        <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $album->name) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">

            <label for="year" class="block text-gray-700">Year</label>
            <input type="text" name="year" id="year" value="{{ old('year', $album->year) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Save</button>
    </form>

    <form method="POST" action="{{ route('albums.destroy', $album->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
    </form>
</div>



</x-app-layout>
@else
    <script>window.location = "{{ route('albums.show', $band->id) }}";</script>
@endauth

