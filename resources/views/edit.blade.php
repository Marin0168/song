<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
</head>
<body>
    <form method="POST" action="">
        @csrf 
        <label for="song">Song</label>
        <input type="text" name="song" id="song" value="{{ $song }}">
        <button type="submit">Save</button>
    </form>
</body>
</html>
