@extends('layouts.dashboard')

@section('title')
    Home
@endsection

@section('breadcrumb')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item active"></li>
</ol>
@endsection

@section('content')
<div class="content-container">
  
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" style="padding: 2rem 2rem">
        <div class="row">
          <!-- Users card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2" style="border-left-color: #2196f3;border-left-width: thick;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">149</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Movies Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2" style="border-left-color: #f44336;border-left-width: thick;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Movies</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">43</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-film fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Branches Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2" style="border-left-color: #607d8b;border-left-width: thick;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Branches</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-code-branch fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Earnings (Monthly) Card -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2" style="border-left-color: #ff9800;border-left-width: thick;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">RM40,000</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="jumbotron" style="padding: 2rem 2rem">
        <h1>Top Selling</h1>
        <div class="row">
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie1.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Avengers (End Game)</h5>
              <p class="card-text">2018</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie2.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Aquaman</h5>
              <p class="card-text">2017</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie3.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Joker</h5>
              <p class="card-text">2019</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie4.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Hacker</h5>
              <p class="card-text">2015</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie5.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Legend</h5>
              <p class="card-text">2017</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie6.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Bloodshot</h5>
              <p class="card-text">2019</p>
            </div>
          </div>
          <div class="card shadow" style="width: 12rem; margin:10px;">
            <img class="card-img-top" src="/images/movie7.jpg" alt="Card image cap" style="height: 250px">
            <div class="card-body">
              <h5 class="card-title">Jigsaw</h5>
              <p class="card-text">2018</p>
            </div>
          </div>
        </div>
        
      </div>
  </div>
@endsection
