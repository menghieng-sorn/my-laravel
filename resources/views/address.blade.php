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
        //has one relation
        {{-- @foreach ($users as $user)
            <div>{{ $user->name }}</div>
           <div>Address : {{ $user->address->country}}</div>
            <hr>
        @endforeach --}}

         //has many relation
        @foreach ($users as $user)
            <div>{{ $user->name }}</div>
            @foreach ($user->addresses as $address)
                <div>Address : {{ $address->country}}</div>
            @endforeach
            <hr>
        @endforeach
    </div>
    <br>
    <div>
        {{-- @foreach ($addresses as $address)
            <div>{{ $address->country }}</div>
            <div>User : {{ $address->user->name}}</div>
            <div>Email : {{ $address->user->email}}</div>
            <hr>
        @endforeach --}}
    </div>
</body>
</html>
