@extends('home')

@section('content')
    <form action="/register" method="post">
        @csrf
        <input name="name" type="text" placeholder="Set name">
        <input name="email" type="email" placeholder="Set email">
        <input name="password" type="password" placeholder="Set password">
        <input name="repeate_password" type="password" placeholder="Repeate password">
        <input type="submit" value="Submit">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
