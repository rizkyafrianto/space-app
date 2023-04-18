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
                            <a href="/{{ $post->slug }}" class="text-decoration-none text-dark">
                                <h5 class="card-title fs-3 fw-bold">{{ $post->title }}</h5>
                                <p class="fw-lighter mt-3">{!! $post->excerpt !!}</p>
                            </a>
                            </a>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="/tag/{{ $post->category->slug }}"
                                    class="text-decoration-none text-dark fw-lighter">
                                    <span>{{ $post->category->topic }}</span>
                                </a>
                                <span class="d-flex justify-content-end">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"><i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                                                <li><a class="dropdown-item" href="/dashboard/profile/edit">Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/{{ $post->slug }}" method="post">
                                                        @csrf
                                                        @method('get')
                                                        <button class="dropdown-item btn btn-tertiary text-danger"
                                                            onclick="return confirm('are you sure?')">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
