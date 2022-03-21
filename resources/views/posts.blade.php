
@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-light text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-purple" type="submit" ><img src="image/search1.png" class="img-fluid" width="30px" height="30px"></button>
              </div>
        </form>
    </div>
</div>


@if($posts->count())

<div class="card mb-3 text-light" >
    <img src="image/6.jpeg" style="width: 1300px; height:600px" alt="{{ $posts[0]->category->name }}">
    <div class="card-body position-absolute text-light">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-light">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-light">
        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-info bg-transparent"> Detail</a>


    </div>
  </div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">
                    {{ $post->category->name }}
                    </a>
                </div>
                <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title text-dark">{{ $post->title }}</h5>
                  <p>
                    <small class="text-dark">
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-info ">Detail</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found</p>

@endif

<div class="d-flex justify-content-center ">
{{ $posts->links() }}
</div>

@endsection
