@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>>{{$comic->title}}</h1>
    <p>
     Tipo:{{$comic->type}} | Serie {{$comic->series}} | Descrizione {{$comic->description}}
    </p>
</div>

@endsection


