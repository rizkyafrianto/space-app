@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Icon {{ auth()->user()->name }}</h1>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-12 col-lg-7 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <small>
                                <p class="fw-light">{{ $post->created_at->diffForHumans() }}</p>
                            </small>
                            <a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">
                                <h5 class="card-title fs-5 fw-bold">{{ $post->title }}</h5>
                            </a>
                            <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                                <p class="mt-2 btn btn-dark">{{ $post->category->topic }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
