@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 offset-md-1 mb-3">
                <h2> {{ $user }} </h2>
            </div>
            @foreach ($posts as $post)
                <div class="col-md-7 offset-md-1 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="/user/{{ $post->user->username }}" class="text-decoration-none text-dark">
                                <p class="fw-light">by {{ $post->user->name }} 2 hours ago</p>
                            </a>
                            <a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="fw-lighter mt-3">{{ $post->excerpt }}</p>
                            </a>
                            <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                                <p>{{ $post->category->topic }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
