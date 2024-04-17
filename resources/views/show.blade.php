<!DOCTYPE html>
<html>
<head>
    <title>Song Details</title>
</head>
<body>
    @if ($song)
        <h1>{{ $song->title }}</h1>
        <p>{{ $song->singer }}</p>
    @endif
</body>
</html>
