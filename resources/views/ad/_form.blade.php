<div class="signup-form">
  <div class="col-sm-12"><h2>{{ $title }}</h2></div>
  <div class="col-sm-6">
    {{ csrf_field() }}
    {{ Form::text('title', null, ['placeholder' => 'Post Title']) }}
    @if ($errors->has('title'))
      <span class="help-block">
        <strong>{{ $errors->first('title') }}</strong>
      </span>
    @endif
    {{ Form::select('breed_id', $breeds, null, ['placeholder' => 'Select a Breed']) }}
    @if ($errors->has('breed_id'))
      <span class="help-block">
        <strong>{{ $errors->first('breed_id') }}</strong>
      </span>
    @endif
    {{ Form::text('location', null, ['placeholder' => 'Location']) }}
    @if ($errors->has('location'))
      <span class="help-block">
        <strong>{{ $errors->first('location') }}</strong>
      </span>
    @endif
    {{ Form::text('price', null, ['placeholder' => 'Price']) }}
    @if ($errors->has('price'))
      <span class="help-block">
        <strong>{{ $errors->first('price') }}</strong>
      </span>
    @endif
    {{ Form::file('image[]', ['multiple' => true]) }}
    @foreach ($errors->get('image.*') as $message)
      <span class="help-block">
        <strong>{{ $message[0] }}</strong>
      </span>
    @endforeach
    {{ Form::button('Post Ad', ['class' => 'btn btn-default', 'type' => 'Submit']) }}
  </div>
  <div class="col-sm-6">
    {{ Form::textarea('description', null, ['placeholder' => 'Description', 'rows' => 9]) }}
    @if ($errors->has('description'))
      <span class="help-block">
        <strong>{{ $errors->first('description') }}</strong>
      </span>
    @endif
  </div>
</div>
