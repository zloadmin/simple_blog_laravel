@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row posts">
        @foreach($posts as $post)
            <div class="col-md-4 post-item">
                <a href="/post/{{ $post->id }}">
                    <img class="img-responsive" src="{{ $post->image }}" alt="">
                </a>
                <h3>
                    <a href="{{ url('/post/'.$post->id) }}">{{ $post->title }}</a>
                </h3>
                <p>{{ $post->short_story }}</p>
            </div>
        @endforeach
    </div>
    <div class="row pages">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>
</div>
@endsection
