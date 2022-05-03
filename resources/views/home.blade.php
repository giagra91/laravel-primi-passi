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

        header{
            height: 80px;
            background-color: aquamarine
        }

        header ul{
            width: 70%;
            height: 100%;
            margin: 0 auto;
            list-style-type: none;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
    </style>
</head>
<body>

    <header>
        <ul>
            <li>
                <a href="{{route('contacts')}}">contact us</a>
            </li>
            <li>
                <a href="{{route('products')}}">products</a>
            </li>
            <li>
                <a href="{{route('aboutUs')}}">aboutUs</a>
            </li>
            <li>
                <a href="{{route('shop')}}">shop</a>
            </li>
        </ul>
    </header>
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