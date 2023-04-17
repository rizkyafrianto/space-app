@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-center pt-3 pb-2 mb-1 mt-3">
        <h1 class="h2">Create new post</h1>
    </div>
    <div class="container-fluid mb-5">
        <div class="row  d-flex justify-content-center">
            <div class="col-sm-12 col-lg-6 mt-3">
                <form method="post" action="/profile/manage">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Slug input --}}
                    <div class="mb-3" style="display:none;">
                        <label for="slug" class="form-label">Auto generate slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" readonly required value="{{ old('slug') }}">
                        @error('slug')
                            {{ $message }}
                        @enderror
                    </div>
                    {{-- Category input --}}
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                                {{-- memberi old value --}}
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->topic }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->topic }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{-- body input --}}
                    <div class="mb-3">
                        <label for="body" class="form-label">Create your article here</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body" class="form-control @error('body') is-invalid @enderror">
                        </trix-editor>
                        @error('body')
                            {{ $messsage }}
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-success" type="submit">Publish</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // event for change title -> slug
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/profile/manage/updateSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // event for delete fitur attach file trix
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        });
    </script>
@endsection
