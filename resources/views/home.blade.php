<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <!-- Style -->

    <style>
        div.container{
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }

    </style>
</head>
<body>

    @include('header')

    <div class="container">
        <h1>
            Hello World!
        </h1>
        <h1>
            {{ $firstName }} {{ $lastName }}, {{ $address }}
        </h1>
    </div>

    <div class="container">
        @foreach ($knowledges as $knowledge)
            <p>{{$firstName}} {{$lastName}} conosce {{$knowledge}}</p>
        @endforeach
    </div>

</body>
</html>