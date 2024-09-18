@extends('layouts.main')



@section('content')
<table class="table">

  <tbody>

  </tbody>
</table>

@endsection


<table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">descrizione</th>
        <th scope="col">toolz</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>
            <a href="{{route('comics.show', $comic)}}" class="btn btn-info">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a href="#" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i>
            </a>
        </td>




        </tr>
    @endforeach
    </tbody>
  </table>
