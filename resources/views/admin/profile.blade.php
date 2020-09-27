@extends('layouts.dashboard')

@section('title')
    My Profile
@endsection

@section('breadcrumb')
<h1 class="mt-4">My Profile</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item active">My Profile</li>
</ol>
@endsection

@section('content')
<style>
    .card {
        margin: 0px 180px 10px 180px;
    }
    .card-img-top {
        padding-top: 10px;
        align-self: center;
        width: 20%;
        height: 20%;
        object-fit: cover;
    }
</style>

<div class="content-container">
    <div class="jumbotron shadow" style="padding: 2rem 2rem">
        <div class="card">
            <img class="card-img-top" src="/storage/uploads/user.png" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">{{ Auth::user()->name }}</p>
                <h5 class="card-title">Age</h5>
                <p class="card-text">26</p>
                <h5 class="card-title">Email</h5>
                <p class="card-text">{{ Auth::user()->email }}</p>
                <h5 class="card-title">Role</h5>
                <p class="card-text">Admin</p>
                <h5 class="card-title">Created At</h5>
                <p class="card-text">{{ Auth::user()->created_at }}</p>
            </div>
          </div>
    </div>
</div>

@endsection