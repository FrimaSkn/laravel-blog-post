{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" value="{{ request('search') }}" name="search">
            <button class="btn btn-dark" type="submit" id="button-addon2">Seacrh</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count()) 
    <div class="card mb-3 shadow-sm">
      @if ($posts[0]->image)
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->category->name }}">
        @else
          <img src="https://source.unsplash.com/1200x500?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        @endif  
      
        <div class="card-body text-center">
          <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
            <p>
                <small class="text-muted">
                 By. <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small> 
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn btn-info text-white btn-gradient" href="/posts/{{ $posts[0]->slug }}">Read More</a> 
        </div>
      </div>
    
        <div class="row">

            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm" style="min-height: 545px;">
                    <div style="background-color: rgba(0, 0, 0, 0.5)" class="position-absolute px-3 py-2 text-white"><a class="text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>

                    @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                  @else
                  <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                  @endif 
                    
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                         By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
                        </small> 
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a class="text-decoration-none btn btn-gradient btn-info text-white" href="/posts/{{ $post->slug }}">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
  

    @else
    <p class="text-center fs-4">No post fount</p>
    @endif
    <div class="d-flex justify-content-end">
      {{ $posts->links() }}
    </div>

@endsection