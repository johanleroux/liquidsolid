{{ $user->name }}
@if($user->id == Auth::user()->id)
  <a href="{{ action('UsersController@edit', $user->id) }}">Edit</a>
@endif
