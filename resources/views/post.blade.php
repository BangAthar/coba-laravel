@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
    
                <p>By <a href="/posts?author=" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/public' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else    
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/posts" class="btn btn-primary">Back To Posts</a>
            </div>
        </div>
    </div>  
@endsection