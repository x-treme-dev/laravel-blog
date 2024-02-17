@extends('layouts.default')
 
@section('content')
@foreach($post as $p)
    <article>
       
        <h1>{{ $p->title }}</h1>
        <p>Pub on </p>
         <p> {{ $p->body }} </p>
    </article>
@endforeach
@stop