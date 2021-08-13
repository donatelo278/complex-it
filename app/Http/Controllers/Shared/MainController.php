<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('public.template.main', [
            'posts' => Post::query()->with('author')->orderBy('id', 'DESC')->paginate(5)
        ]);
    }
}
