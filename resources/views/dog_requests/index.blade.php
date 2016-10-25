@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">Dog Requests Index <a href="{{ action('DogRequestsController@create') }}" class="btn blue btn-xs btn-outline pull-right">Create <i class="fa fa-plus"></i></a></div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr>
              <th>Edit</th>
              <th>ID</th>
              <th>Breed</th>
              <th>Location</th>
            </tr>
            @forelse($list as $item)
            <tr>
                <td><a href="{{ action('DogRequestsController@edit', $item) }}">[Edit]</a></td>
                <td><a href="{{ action('DogRequestsController@show', $item) }}">{{ $item->id }}</a></td>
                <td>{{ $item->breed }}</td>
                <td>{{ $item->location }}</td>
            </tr>
            @empty
            <table>List is empty</table>
            @endforelse
          </table>
          {{ $list->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
