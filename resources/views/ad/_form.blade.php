<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Post Title']) }}
      @if ($errors->has('title'))
        <span class="help-block">
          <strong>{{ $errors->first('title') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      {{ Form::select('breed_id', $breeds, null, ['class' => 'form-control', 'placeholder' => 'Select a Breed']) }}
      @if ($errors->has('breed_id'))
        <span class="help-block">
          <strong>{{ $errors->first('breed_id') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      {{ Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
      @if ($errors->has('location'))
        <span class="help-block">
          <strong>{{ $errors->first('location') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) }}
      @if ($errors->has('price'))
        <span class="help-block">
          <strong>{{ $errors->first('price') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      {{ Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Quantity']) }}
      @if ($errors->has('quantity'))
        <span class="help-block">
          <strong>{{ $errors->first('quantity') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      {{ Form::file('image[]', ['class' => 'form-control', 'multiple' => true]) }}
      @foreach ($errors->get('image.*') as $message)
        <span class="help-block">
          <strong>{{ $message[0] }}</strong>
        </span>
      @endforeach
    </div>

    <div class="form-group">
      {{ Form::button('Post Ad', ['class' => 'btn btn-primary', 'type' => 'Submit']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 9]) }}
      @if ($errors->has('description'))
        <span class="help-block">
          <strong>{{ $errors->first('description') }}</strong>
        </span>
      @endif
    </div>
  </div>
</div>
