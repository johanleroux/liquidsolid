@extends('layouts.obaju')
@section('title', 'Users')
  @section('content')
    <div class="container">
      <div class="col-md-12">
        {!! Breadcrumbs::render('user_index') !!}
      </div>
      <div class="col-md-12">
        <div class="box">
          <h2>Users</h2>
          <hr>
          @if($users->count() > 0)
            <table class="table table-striped" style="width:100%">
              <tr class="header">
                <th>ID</th>
                <th>User</th>
                <th>Email</th>
                <th class="text-center">Moderator</th>
                <th class="text-center">Breeder</th>
                <th class="text-right">Created At</th>
              </tr>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td><a href="{{ action('UsersController@show', $user->id) }}">{{ $user->name }}</a></td>
                  <td>{{ $user->email }}</td>
                  <td class="text-center">
                    @if($user->hasRole('moderator'))
                      <a href="{{ action('UsersController@toggleRole', ['user' => $user->id, 'role' => 'moderator']) }}"><i class="fa fa-check"></i></a>
                    @else
                      <a href="{{ action('UsersController@toggleRole', ['user' => $user->id, 'role' => 'moderator']) }}"><i class="fa fa-ban"></i></a>
                    @endif
                  </td>
                  <td class="text-center">
                    @if($user->hasRole('breeder'))
                      <a href="{{ action('UsersController@toggleRole', ['user' => $user->id, 'role' => 'breeder']) }}"><i class="fa fa-check"></i></a>
                    @else
                      <a href="{{ action('UsersController@toggleRole', ['user' => $user->id, 'role' => 'breeder']) }}"><i class="fa fa-ban"></i></a>
                    @endif
                  </td>
                  <td class="text-right">{{ $user->created_at }}</td>
                </tr>
              @endforeach
            </table>
            {{ $users->links() }}
          @else
            <p>No users found</p>
          @endif
        </div>
      </div>
    </div>
  @endsection
