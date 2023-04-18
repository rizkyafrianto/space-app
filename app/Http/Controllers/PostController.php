<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Symfony\Component\Translation\CatalogueMetadataAwareInterface;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'space',
            'posts' => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'single post',
            'post' => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('tag', [
            'title' => 'tag',
            'posts' => $category->posts,
            'category' => $category->topic
        ]);
    }

    public function user(User $user)
    {
        return view('user', [
            'title' => 'user',
            'posts' => $user->posts,
            'user' => $user->name
        ]);
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/profile');
    }
}
