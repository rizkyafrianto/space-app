@extends('layouts.main')

@section('container')
   <div class="container mt-5 mb-5">
      <div class="row">
         <div class="col-sm-12 col-lg-7 mt-3 mb-3">
            <h2>{{ $user }}</h2>
         </div>
         @foreach ($posts as $post)
            <div class="col-sm-12 col-lg-7 mt-3">
               <div class="card">
                  <div class="card-body">
                     <small>
                        <p class="fw-light">{{ $post->created_at->diffForHumans() }}
                        </p>
                     </small>
                     <a href="/{{ $post->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title fs-3 fw-bold">{{ $post->title }}</h5>
                        <p class="fw-lighter mt-3">{!! $post->excerpt !!}</p>
                     </a>
                     <div class="d-flex justify-content-between mt-3">
                        <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                           <span>{{ $post->category->topic }}</span>
                        </a>
                        @include('partials.dotbutton')
                     </div>
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
