<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($songs as $song)
   <a href="{{ route('show', $song->id) }}"><strong>titel: {{$song->title}}</strong></br>
   singer: {{$song->singer}}</br></a>
@endforeach

</body>
</html>