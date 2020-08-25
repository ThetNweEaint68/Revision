@extends('layouts.app')

@section('content')
<div id="page" class="container">
  <h1>New Article</h1>
  <form action="/articles" method="POST">
    @csrf

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input 
        class="input @error('title') is-danger @enderror" 
        type="ttext" 
        name="title" 
        id="title"
        value="{{ old('title') }}">
        @error('title')
        <p class="help is-danger">{{ $errors->first('title') }}</p>
        @enderror
      </div>
    </div>

    <div class="field">
      <label class="label" for="body">Body</label>
      <div class="control">
        <textarea class="textarea @error('body') is-danger @enderror"name="body" id="body">
          {{ old('body') }}
        </textarea> 
        @error('body')
        <p class="help is-danger">{{ $errors->first('body') }}</p>
        @enderror
      </div>
    </div>

    <div class="field is-grouped">
      <div class="control">
        <button class="button is-link" type="submit">Submit</button>
      </div>
    </div>
    
  </form>
</div>
@endsection