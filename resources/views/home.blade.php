@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-7 offset-md-1 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="fw-light">by munajar 2 hours ago</p>
                            <a href="/post/{{ $post->id }}" class="text-decoration-none text-dark">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </a>
                            <a href="/post/{{ $post->id }}" class="text-decoration-none text-dark">
                                <p class="fw-lighter">{{ $post->excerpt }}</p>
                            </a>
                            <p>in nature</p>
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
