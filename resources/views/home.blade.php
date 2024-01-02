<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- @if (Auth::check())
        <h1>hi {{ Auth::user() }}</h1>
        <form action="/logout" method="get">
            @csrf
            <input type="submit" value="Logout">
        </form>
    @endif --}}

    {{-- @auth --}}
    {{-- <h1>hi {{ Auth::user()->name }}</h1> --}}
    @auth
        <div>
            <h1>Hello {{ Auth::user()->name }} </h1>
            <form action="/logout" method="get">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </div>
    @endauth

    @yield('content')
    {{-- @endauth

    @guest
        <h1>Must log in</h1>
    @endguest --}}

</body>

</html>
