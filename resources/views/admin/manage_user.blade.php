@extends('layouts.dashboard')

@section('title')
    User List
@endsection

@section('breadcrumb')
<h1 class="mt-4">Manage User</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item active">Manage User</li>
</ol>
@endsection

@section('content')
<div class="content-container">
    <div class="jumbotron shadow" style="padding: 2rem 2rem">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th style="text-align: center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $key => $item)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td style="text-align: center"><a class="btn btn-success" href="{{$item->id}}/" role="button" title="View"><i class="fas fa-eye"></i></a>
                  <a class="btn btn-primary" href="{{$item->id}}/" role="button" title="Edit"><i class="fas fa-edit"></i></a>
                  <a class="btn btn-danger" href="{{$item->id}}/" onClick="return confirm('Are you sure you want to delete this user?');" role="button" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection