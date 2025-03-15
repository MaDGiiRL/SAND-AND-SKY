<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
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
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);


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
