@extends('layouts.main')

@section('container')
   <div class="row justify-content-center mb-5 px-5">
      <div class="col-sm-12 col-md-12 col-lg-8">
         <h2 class="mb-3">{{ $post->title }}</h2>
         <a href="/user/{{ $post->user->username }}" class="text-decoration-none text-dark">
            <p class="fw-light">by {{ $post->user->name }} {{ $post->created_at->diffForHumans() }}</p>
         </a>
         <div class="my-5">
            <img src="{{ asset('storage/' . $post->image) }} " class="card-img-top" alt=""
               style="height: 10rem; width:auto;">
         </div>
         <article class="my-3 fs-5">
            {!! $post->body !!}
         </article>
         <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
            <p class="mt-5">{{ $post->category->topic }}</p>
         </a>
      </div>
   </div>
@endsection
