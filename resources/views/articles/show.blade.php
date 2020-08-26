@extends('layouts.app')

@section('content')
<div id="wrapper">
  <div id="page" class="content">
    <div class="title">
      <h2>{{ $article->title }}</h2>
    </div>
    {{ $article->body }}
    <br><br>

    <div class="comments">
      <ul class="list-group">
        @foreach ($article->comments as $comment)
        <li class="list-group-item">
          <strong>
            Posted by {{ $comment->user->name }} 
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
          </strong>
          {{ $comment->body }}
        </li>
        @endforeach
      </ul>
    </div>
    <br>

    <div class="card">
      <div class="card-block">
        <form method="POST" action="{{ route('comments.store', $article) }}">
          @csrf
          <div class="form-group">
            <textarea name="body" placeholder="Your comment here"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary">Edit</a></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection