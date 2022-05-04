<header>
    <ul>
        <li>
            <a href="{{route('home')}}">Homepage</a>
        </li>
        <li>
            <a href="{{route('contacts')}}">Contact us</a>
        </li>
        <li>
            <a href="{{route('products')}}">Products</a>
        </li>
        <li>
            <a href="{{route('aboutUs')}}">About Us</a>
        </li>
        <li>
            <a href="{{route('shop')}}">Shop</a>
        </li>
    </ul>
</header>

<style>
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