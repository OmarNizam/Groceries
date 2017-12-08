
<div class="col-lg-4">
  <a href="/groceries/{{ $grocery->id }}" class="blog-post-title">{{ $grocery->name }}</a>
  <p class="blog-post-meta">The amount is {{ $grocery->amount }}</p>
  <img src="/images/{{ $grocery->photo }}" width=150px>
  <p class="blog-post-meta">
    {{ $grocery->user->name }} on
    {{ $grocery->created_at->diffForHumans() }}
  </p>
    @if ($grocery->modify())
      <form method="POST" action="/groceries/{{ $grocery->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
      <p><a class="btn btn-success" href="/groceries/{{ $grocery->id }}/edit" role="button">Edit &raquo;</a></p>
    @endif
</div>
