@extends('layouts/app')

@section('content')
    hello
    <form action="/roles" method="post">
        @csrf
        <input type="text" name="name">
        <input type="number" name="level">
        <input type="submit" value="追加する">
    </form>
    @foreach ($roles as $role)
        <p>{{$role->name}}</p>
    @endforeach
@endsection