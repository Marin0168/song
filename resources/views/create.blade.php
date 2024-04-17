<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form method="POST" action="{{ route('store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="singer">Singer:</label>
            <input type="text" id="singer" name="singer" value="{{ old('singer') }}" required>
        </div>
        <button type="submit">Create Song</button>
    </form>
</body>
</html>