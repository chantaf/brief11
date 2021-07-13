@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
        <form method="POST" action="{{route('film.store')}}">
        @csrf
        <div class="form-group">
            <label >titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="form-group">
            <label >date Pub</label>
            <input type="date" class="form-control" name="datePub" >
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
  </div>
</div>
@endsection