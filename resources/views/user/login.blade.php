@extends('home')

@section('content')
    <form action="/login" method="post">
        @csrf
        <input name="name" type="text" placeholder="Your name">
        <input name="email" type="email" placeholder="Your email">
        <input name="password" value="" type="password" placeholder="Your password">
        <input type="submit" value="Log in">
    </form>
@endsection
