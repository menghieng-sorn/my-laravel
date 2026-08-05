<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($posts as $post)
            <div>{{ $post->name }}</div>
            <div>Author : {{ $post->user->name }}</div>
            <hr>
        @endforeach
    </div>
    <br>
    <div>
        @foreach ($users as $user)
            <div>{{ $user->name }}</div>
                <div>Post : {{ $user->posts->count() }}</div>
            <hr>
        @endforeach
    </div>
</body>
</html>
