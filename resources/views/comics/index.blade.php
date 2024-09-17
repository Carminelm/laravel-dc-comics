@extends('layouts.main')



@section('content')
<table class="table">

  <tbody>
  @foreach ($comics as $comic)
    <tr>
      <td>{{$comic->id}}</td> 
      <td>{{$comic->title}}</td>
      <td>{{$comic->description}}</td>



    </tr>
@endforeach
  </tbody>
</table>

@endsection