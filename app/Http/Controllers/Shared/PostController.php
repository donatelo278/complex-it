<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sundry\PostRequest;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        return view('public.form.create.post', [

        ]);
    }
    public function store(PostRequest $request)
    {
        $author = Author::query()->updateOrCreate([
           'name' => request()->ip(),
        ]);
        $post = Post::query()->create([
            'slug' => Str::slug($request->title.'_'.Str::uuid()),
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $author->id
        ]);
        return redirect()->route('public-main')->with('success', 'Успешно добавили пост');
    }
}
