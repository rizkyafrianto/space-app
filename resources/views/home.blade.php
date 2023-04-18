@extends('layouts.main')

@section('container')
   <div class="container mt-5 mb-5">
      <div class="row">
         @foreach ($posts as $post)
            <div class="col-sm-12 col-lg-7 mt-3">
               <div class="card">
                  <div class="card-body">
                     <small>
                        <a href="/user/{{ $post->user->username }}" class="text-decoration-none text-dark">
                           <p class="fw-light">by {{ $post->user->name }} {{ $post->created_at->diffForHumans() }}
                           </p>
                        </a></small>
                     <a href="/{{ $post->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title fs-3 fw-bold">{{ $post->title }}</h5>
                        <p class="fw-lighter mt-3">{!! $post->excerpt !!}</p>
                     </a>
                     <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                        <p class="mt-4 btn btn-tertiary">{{ $post->category->topic }}</p>
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
   {{-- <p class="text-center fs-4">No post found</p> --}}
@endsection
