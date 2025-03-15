<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;

class BlogController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {

        return [
            'verified'
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('user')->orderBy('created_at', 'desc')->paginate(5); // Aggiunto ->get()
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {

        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'img' => $request->hasFile('img') ? $request->file('img')->store('images', 'public') : null,
            'user_id' => Auth::user()->id,
        ]);


        return redirect(route('blog.index'))->with('message', 'Article Posted.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Prende gli ultimi 5 articoli

        return view('blog.show', compact('blog', 'latestBlogs'));
    }
}
