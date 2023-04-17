@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <a href="/user/{{ $post->user->username }}" class="text-decoration-none text-dark">
                    <p class="fw-light">by {{ $post->user->name }} 2 hours ago</p>
                </a>
                <h2>{{ $post->title }}</h2>
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                    <p>{{ $post->category->topic }}</p>
                </a>
            </div>
        </div>
    </div>
@endsection
