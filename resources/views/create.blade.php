<x-app-layout>
    @foreach(['songs', 'bands', 'albums'] as $resource)
        <div class="max-w-md mx-auto mb-8">
            <h1 class="text-2xl font-bold mb-4">{{ ucfirst($resource) }}</h1>
            <form method="POST" action="{{ route($resource.'.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label for="{{ $resource }}_name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="{{ $resource }}_name" name="name" value="{{ old('name') }}" required
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                @if ($resource == 'albums')
                    <div class="mb-6">
                        <label for="{{ $resource }}_year" class="block text-gray-700 text-sm font-bold mb-2">Year:</label>
                        <input type="text" id="{{ $resource }}_year" name="year" value="{{ old('year') }}" required
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                @else
                    <div class="mb-6">
                        <label for="{{ $resource }}_genre" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                        <input type="text" id="{{ $resource }}_genre" name="genre" value="{{ old('genre') }}" required
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                @endif
                <div class="flex items-center justify-end">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create {{ ucfirst($resource) }}
                    </button>
                </div>
            </form>
        </div>
    @endforeach
</x-app-layout>
