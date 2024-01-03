<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <title>Document</title>
</head>

<body>
    @auth
        <header>
            <h1>Hello {{ Auth::user()->name }} </h1>
        </header>
        <nav>
            <ul>
                <li><a href="/dashboard">Main</a></li>
                <li><a href="/dashboard/create">Create blog</a></li>
                <li><a href="/dashboard/profile">Profile</a></li>
            </ul>
            <form action="/logout" method="get">
                @csrf
                <input type="submit" value="Logout">
            </form>
        </nav>
    @endauth

    @guest
        <header>
            <h1>Must log in</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/register">register</a></li>
                <li><a href="/login">Log in</a></li>
            </ul>
        </nav>
    @endguest

    @yield('content')
</body>

</html>
