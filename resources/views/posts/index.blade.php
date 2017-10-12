@extends('master')
@section('title', 'Home')
@section('content')
<div class="container">
  <div class="col-md-8">
    @foreach($posts as $post)
      <div class="panel panel-default">
        <div class="panel-heading">
          {{ $post->title }}
        </div>
        <div class="panel-body">
          {{ $post->content }}
        </div>
        <a href="/post/{{$post->id}}" id="readmore" class="btn btn-md btn-primary">Learn more</a>
      </div>
    @endforeach()
    {{ $posts->links() }}
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Search</div>
      <div class="panel-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <!-- Category area -->
    <div class="panel panel-default">
          <div class="panel-heading">Categories</div>
          <div class="panel-body">
            <ul class="list-unstyled">
              <div class="col-md-6">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Javascript</a></li>
              </div>
              <div class="col-md-6">
                <li><a href="#">PHP</a></li>
                <li><a href="#">Ruby on Rails</a></li>
                <li><a href="#">Node JS</a></li>
              </div>
            </ul>
          </div>
        </div>
  </div>
</div>
@endsection()
