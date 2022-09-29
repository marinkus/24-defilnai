<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movie.index', [
            'movies' => Movie::orderBy('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('m_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Category $movie)
    {
        return view('movie.show', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $movie)
    {
        return view('movie.edit', [
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $movie)
    {
        $movie->update([
            'title' => $request->title
        ]);
        return redirect()->route('c_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $movie)
    {
        $movie->delete();
        return redirect()->route('c_index');
    }
}
