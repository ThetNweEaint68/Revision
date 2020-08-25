@extends('layouts.app')

@section('content')
<div id="page" class="container">
    <h1>Update Article</h1>
    <form action="/articles/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="ttext" name="title" id="title" value="{{ $article->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>
            <div class="control">
                <textarea class="textarea"name="body" id="body">{{ $article->body }}</textarea> 
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