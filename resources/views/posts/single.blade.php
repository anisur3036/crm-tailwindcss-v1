    @extends('app')

    @section('content')
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 mx-auto">
          <h1 class="my-4 text-center">Welcome to the Blog </h1>
          <div class="card mb-4">
            <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">{{ $post->title }}</h2>
              <p class="card-text"> {{ $post->body }} </p>
            </div>
            <div class="card-footer text-muted">
              Posted {{ $post->created_at->diffForHumans() }} by
              <a href="#">{{ $post->user->name }} </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    @endsection
