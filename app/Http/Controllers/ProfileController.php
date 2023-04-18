<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.profile.index', [
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->get(),
            'title' => auth()->user()->username
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.profile.create', [
            'title' => auth()->user()->username,
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/dashboard/profile')->with('success', 'New post has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $profile)
    {
        return view('dashboard.profile.show', [
            'post' => $profile,
            'title' => $profile->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $profile)
    {
        return view('dashboard.profile.edit', [
            'post' => $profile,
            'categories' => Category::all(),
            'title' => 'Editing'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $profile)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];

        if ($request->slug != $profile->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $profile->id)->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $profile)
    {
        Post::destroy($profile->id);
        return redirect('/dashboard/profile')->with('success', 'Post has been deleted');
    }

    // library slugable  that change title to slug by event js
    public function updateSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
