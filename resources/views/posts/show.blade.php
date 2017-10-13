@extends('master')
@section('title', $post->title)

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="mt-4">{{$post->title}}</h1>
        <p class="lead">by Anonymous</p>
        <hr>
        <b>Posted on <?php echo date('d/m/Y', strtotime($post->created_at)) ?></b>
        <hr>
        <p>{{$post->content}}</p>
        <hr>
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        @include('shared.sidebar')
      </div>
    </div>
  </div>
@endsection()
