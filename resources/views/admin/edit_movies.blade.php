@extends('layouts.dashboard')

@section('title')
    Edit Movies
@endsection

@section('breadcrumb')
<h1 class="mt-4">Edit Movies</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item">Movies</li>
    <li class="breadcrumb-item active">Edit Movies</li>
</ol>
@endsection

@section('content')

<div class="content-container">
    <div class="jumbotron shadow" style="padding: 2rem 2rem">
        <h3>Edit Movies</h3>
        <div class="card" style="width: 50rem;">
          <div class="card-body">
          <h5 class="card-title">{{$movie->movie_title}}</h5>
            @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{{ $message }}</strong>
                  </div>
                  @endif
                <form method="post" action="/{{$movie->id}}/update" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="movie_poster">Poster</label><br>
                <div class="card shadow" style="width: 15rem; height: 22rem;">
                    <img style="width: 15rem; height:22rem; border-radius:5px;" src="/storage/movie_poster/{{$movie->movie_poster}}" alt="Movie Poster">
                  </div><br>
                  <input type="file" name="file" class="{{ $errors->has('file') ? ' is-invalid' : '' }}" >
                  @if ($errors->has('file'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('file') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group">
                <label for="movie-title">Title</label>
              <input type="text" name="movie_title" class="form-control" value="{{$movie->movie_title}}">
              </div>
              <div class="form-group">
                <label for="movie-year">Year</label>
                <input type="text" name="movie_year" class="form-control" value="{{$movie->movie_year}}">
              </div>
              <div class="form-group">
                <label for="movie-genre">Genre</label>
                <input type="text" name="movie_genre" class="form-control" value="{{$movie->movie_genre}}">
              </div>
              <div class="form-group">
                <label for="movie-synopsis">Synopsis</label>
              </div>
              <textarea name="movie_synopsis" id="" cols="100" rows="10">{{$movie->movie_synopsis}}</textarea>
                  
                  {{-- @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{{ $message }}</strong>
                  </div>
                  @endif --}}
              
        
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Movies</button>
              </div>
            </form>
          </div>
        </div>
        
    </div>
</div>

@endsection