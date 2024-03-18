@extends('todo.layouts.default')

@section('content')
 @foreach($errors->all() as $error)
    <div class='errors'>{{$error}}</div>
@endforeach

<form method="POST" action="{{ route('user-login') }}">
@csrf
<!--Обратить внимание на сооответсвие типам полей -->
    <input type="email" name='email' placeholder="email">
    <input type="text" name='password' placeholder="password">
    <button type="submit">Submit</button>
    </form>
@stop