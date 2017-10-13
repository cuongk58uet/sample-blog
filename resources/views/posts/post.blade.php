<div class="panel panel-default">
  <div class="panel-heading">
    {{ $post->title }}
  </div>
  <div class="panel-body">
    {{ $post->content }}
  </div>
  <a href="/post/{{$post->id}}" id="readmore" class="btn btn-md btn-primary">Learn more</a>
</div>

