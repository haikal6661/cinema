@extends('layouts.dashboard')

@section('title')
    User Role
@endsection

@section('breadcrumb')
<h1 class="mt-4">Assign Role</h1>
<ol class="breadcrumb shadow mb-4">
    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
    <li class="breadcrumb-item active">Assign Role</li>
</ol>
@endsection

@section('content')
<div class="content-container">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRoleModal"><i class="fas fa-plus"></i>
  Add New Role
</button>
@if (session('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>	
  <strong>{{ session('success') }}</strong>
</div>
@endif
<!-- Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="add_role" method="post" action="{{ route('add_role') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="role-title">Role Title:</label>
            <input type="text" name="role-title" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="form1" class="btn btn-primary">Add Role</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <br><br>
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
            <td style="text-align: center">
              <button type="button" class="btn btn-primary" title="Assign Role" data-toggle="modal" data-target="#assignRoleModal{{$item->id}}"><i class="fas fa-plus"></i>
              </button>  
              <a class="btn btn-danger" href="{{$item->id}}/" onClick="return confirm('Are you sure you want to delete this user?');" role="button" title="Delete"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <!-- Modal -->
          <div class="modal fade" id="assignRoleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="assignRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="roleModalLabel">Assign Role</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="assign_role" method="post" action="{{$item->id}}/assign" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <div class="form-group">
                        <label for="role">Select Role To Assign:</label>
                        <select name="role" class="form-control">
                          @foreach ($roles as $key => $role)
                          <option value="{{$role->id}}">{{$role->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Assign</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>
  </div>
  
</div>
@endsection