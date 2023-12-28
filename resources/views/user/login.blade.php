<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <input name="name" type="text" placeholder="Your name">
        <input name="email" type="email" placeholder="Your email">
        <input name="password" value="" type="password" placeholder="Your password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>