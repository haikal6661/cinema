@extends('layouts.dashboard')

@section('title')
    View Movies
@endsection

@section('breadcrumb')
<h1 class="mt-4">View Movies</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item">Movies</li>
    <li class="breadcrumb-item active">View Movies ({{$movie->movie_title}})</li>
</ol>
@endsection

@section('content')

<div class="content-container">
    <div class="jumbotron shadow" style="padding: 2rem 2rem">
        <h4>{{$movie->movie_title}} ({{$movie->movie_year}})</h4>
        <div class="container-ml-2">
            <div class="row">
              <div class="col-2">
                <div class="card shadow" style="width: 15rem; height: 22rem;">
                    <img style="width: 15rem; height:22rem; border-radius:5px;" src="/storage/movie_poster/{{$movie->movie_poster}}" alt="Movie Poster">
                </div>
              </div>
              <div class="col">
                <div class="card shadow img-fluid" style="height: 22rem;">
                    <img class="card-img-top" src="/storage/uploads/card-info.jpg" alt="Card image" style="width:100%; height: 22rem; border-radius:5px; opacity:0.5;">
                    <div class="card-img-overlay">
                      {{$movie->movie_synopsis}} <br>
                      {{$movie->movie_genre}}
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection