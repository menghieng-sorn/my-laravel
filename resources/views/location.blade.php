<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location</title>
</head>

<body>
    <div>
       <p>Country : {{ $country->name }}</p>
       <ul>
        @foreach($country->cities as $city_item)
            <li>{{ $city_item->name }}</li>
        @endforeach
       </ul>
      <ul>
         @foreach($country->states as $state)
           <li>State : {{ $state->name }}</li>
           <ul>
            <p>City : </p>
            @foreach($state->cities as $city)
            <li>{{ $city->name }}</li>
            @endforeach
           </ul>
        @endforeach
      </ul>

    </div>
</body>

</html>
