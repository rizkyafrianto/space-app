@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By: Munajar in web programming
                </p>
                <article class="my-3 fs-6">
                    {{ $post->body }}
                </article>

                <a href="/" class="d-block">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
