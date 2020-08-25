@extends('layouts.app')

@section('content')
<div id="wrapper">
  <div id="page" class="container">
    @foreach ($articles as $article)
    <div class="content">
      <div class="title">
        <h2>
          <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </h2>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection