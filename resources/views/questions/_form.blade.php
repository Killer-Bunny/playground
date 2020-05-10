@csrf
<div class="form-group">
  <label for="question-title">Question Title</label>
  <input type="text" value="{{ old('title', $question->title) }}" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} " />

  @if($errors->has('title'))
    <div class="invalid-feedback">
      <strong>{{ $error->first('title') }}</strong>
    </div>
  @endif
</div>
<div class="form-group">
  <label for="question-body">Question Content</label>
  <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body) }}</textarea>
  @if($errors->has('title'))
    <div class="invalid-feedback">
      <strong>{{ $error->first('body') }}</strong>
    </div>
  @endif
</div>
<div>
  <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>
