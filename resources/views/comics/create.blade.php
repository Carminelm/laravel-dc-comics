@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>New Comics</h1>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('comics.store')}}"method="POST"></form>
    @csrf
    <form>

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
          @error('title')
          <small class="text-danger"> {{$message}} </small>
          @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="series" name="series" value="{{old('series')}}">
            @error('series')
            <small class="text-danger"> {{$message}} </small>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection

