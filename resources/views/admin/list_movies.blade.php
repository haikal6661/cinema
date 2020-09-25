@extends('layouts.dashboard')

@section('title')
    List Movies
@endsection

@section('breadcrumb')
<h1 class="mt-4">List Movies</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item">Movies</li>
    <li class="breadcrumb-item active">List Movies</li>
</ol>
@endsection

@section('content')
<div class="content-container">
    <div class="jumbotron shadow" style="padding: 2rem 2rem">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Year</th>
                <th scope="col">Genre</th>
                <th scope="col">Rating</th>
                <th scope="col">Duration</th>
                <th style="text-align: center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($movies as $key => $item)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->movie_title}}</td>
                <td>{{$item->movie_year}}</td>
                <td>{{$item->movie_genre}}</td>
                <td>0.0</td>
                <td>124 min</td>
                <td style="text-align: center"><a class="btn btn-success" href="{{$item->id}}/view_movies" role="button" title="View"><i class="fas fa-eye"></i></a>
                  <a class="btn btn-primary" href="{{$item->id}}/edit_movies" role="button" title="Edit"><i class="fas fa-edit"></i></a>
                  <a class="btn btn-danger" href="{{$item->id}}/delete" onClick="return confirm('Are you sure you want to delete this movie?');" role="button" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection