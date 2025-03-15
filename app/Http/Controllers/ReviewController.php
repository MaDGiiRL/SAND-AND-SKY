<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;

class ReviewController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // {Auth::user()->reviews()->create altro metodo
        Review::create([
            'name' => $request->name,
            'title' => $request->title,
            'comment' => $request->comment,
            'img' => $request->hasFile('img') ? $request->file('img')->store('images', 'public') : null,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'comment' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'rating' => 'required',
        ]);

        return redirect(route('review.index'))->with('message', 'Comment sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }

    public function user_review($id)
    {
        $user = User::find($id);
        $reviews = $user->reviews;

        return view('review.user', compact('reviews', 'user'));
    }
}
