@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
  <table class="table table-hover">
      <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
      </thead>
      <tbody>
      @if($users)

          @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->user_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>

          @endforeach
        @endif
      </tbody>
    </table>
    @stop
