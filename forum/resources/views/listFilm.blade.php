@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
        <a href="{{route('film.create')}}" class="btn btn-dark m-2">ajouter</a>
            <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
            <tr>
            <th scope="row">{{$film->id}}</th>
            <td>{{$film->titre}}</td>
            <td>{{$film->image}}</td>
            <td></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>
</div>
@endsection