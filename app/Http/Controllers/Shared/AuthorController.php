<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($name)
    {
        $author = Author::query()->where('name', $name)->with('post')->first();
        if(is_null($author)) return abort('404');
        return view('public.show.author', [
            'author' => $author
        ]);
    }
}
