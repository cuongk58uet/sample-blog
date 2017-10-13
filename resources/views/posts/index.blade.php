@extends('master')
@section('title', 'Home')
@section('content')
<div class="container">
  <div class="col-md-8">
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    @foreach($posts as $post)
       @include('posts.post')
    @endforeach()
    {{ $posts->links() }}
  </div>
  <div class="col-md-4">
    @include('shared.sidebar')
  </div>
</div>
@endsection()
