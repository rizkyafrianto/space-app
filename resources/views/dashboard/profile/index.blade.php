@extends('layouts.main')
@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"><i class="bi bi-person-circle"></i> {{ auth()->user()->name }}</h1>
   </div>

   {{-- alert pop up when regist success --}}
   @if (session()->has('success'))
      <div class="alert alert-success col-lg-8 alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
   @endif

   <div class="container mt-5 mb-5">
      <div class="row">
         @foreach ($posts as $post)
            <div class="col-sm-12 col-lg-8 mt-3">
               <div class="card">
                  <div class="card-body">
                     <small>
                        <p class="fw-light">{{ $post->created_at->diffForHumans() }}</p>
                     </small>
                     <a href="/dashboard/profile/{{ $post->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title fs-3 fw-bold">{{ $post->title }}</h5>
                        <p class="fw-lighter mt-3">{!! $post->excerpt !!}</p>
                     </a>
                     <div class="d-flex justify-content-between mt-3">
                        <a href="/tag/{{ $post->category->slug }}" class="text-decoration-none text-dark fw-lighter">
                           <span>{{ $post->category->topic }}</span>
                        </a>
                        <span class="d-flex justify-content-end">
                           <ul class="navbar-nav">
                              <li class="nav-item dropdown">
                                 <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                       class="bi bi-three-dots"></i>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                                    {{-- edit button --}}
                                    <li><a class="dropdown-item btn btn-tertiary"
                                          href="/dashboard/profile/{{ $post->slug }}/edit">Edit</a>
                                    </li>
                                    {{-- delete button --}}
                                    <li>
                                       <form action="/dashboard/profile/{{ $post->slug }}" method="post">
                                          @csrf
                                          @method('delete')
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
