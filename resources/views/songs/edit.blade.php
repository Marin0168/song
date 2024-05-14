@auth
<x-app-layout>
    <div class="flex justify-between max-w-md mx-auto">
    <form method="POST" action="{{ route('songs.update', ['song' => $song->id]) }}">
        @csrf 
        @method('PUT')

        <div class="mb-4">
        <label for="singer" class="block text-gray-700">Singer</label>
            <input type="text" name="singer" id="singer" value="{{ old('singer', $song->singer) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">

            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $song->title) }}" required 
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Save</button>
    </form>

    <form method="POST" action="{{ route('songs.destroy', $id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
    </form>
</div>



</x-app-layout>

@else
    <script>window.location = "{{ route('songs.show', $band->id) }}";</script>
@endauth