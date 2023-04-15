@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <p>By: {{ $post->user->name }}</p>
                <h2>{{ $post->title }}</h2>
                <article class="my-3 fs-6">
                    {{ $post->body }}
                </article>
                <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                    <p>{{ $post->category->topic }}</p>
                </a>
            </div>
        </div>
    </div>
@endsection
