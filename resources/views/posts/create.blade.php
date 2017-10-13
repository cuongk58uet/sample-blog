@extends('master')
@section('title', 'Create New Post')

@section('content')
<div class="col-md-8">
    @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
  <form method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Title</label>
      <input class="form-control" name="title" type="text" placeholder="Title here...">
    </div>
    <div class="form-group">
      <label for="">Content</label>
      <textarea class="form-control" name="content" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-md btn-default">Submit</button>
  </form>
</div>

@endsection()
