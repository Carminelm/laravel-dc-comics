@extends('layouts.main')



@section('content')
<table class="table">
@foreach ($comics as $comic)
  <tbody>
    <tr>
      <td>{{$comic->id}}</td> 
      <td>{{$comic->type}}</td>
      <td>{{$comic->description}}</td>



    </tr>
@endforeach
  </tbody>
</table>

@endsection