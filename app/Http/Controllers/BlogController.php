<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;

class BlogController extends Controller 
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogs = Blog::with('user')->orderBy('created_at', 'desc')->paginate(4);

        if ($request->ajax()) {
            return view('blog.partials.blogs', compact('blogs'));
        }

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
            'category_id' => $request->category_id,
        ]);


        return redirect(route('blog.index'))->with('message', 'Article Posted.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Prende gli ultimi 5 articoli

        return view('blog.show', compact('blog', 'latestBlogs'));
    }


    public function user_blog($id)
    {
        $user = User::find($id);
        $blogs = $user->blogs;

        return view('blog.user', compact('blogs', 'user'));
    }
    
    public function filterByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $blogs = Blog::with('user')->where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(4);
        return view('blog.category', compact('category', 'blogs'));
    }
}
