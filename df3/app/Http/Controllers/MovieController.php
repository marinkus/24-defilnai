<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use App\Models\Tag;
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
            'movies' => Movie::orderBy('updated_at', 'desc')->paginate(5)
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
            'categories' => Category::all(),
            'tags' => Tag::orderBy('title')->get()
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

        $request->validate(
            [
                'title' => 'required|min:3|max:40',
                'price' => 'required|numeric|min:1|max:100',
                'photo.*' => 'sometimes|required|mimes:jpg|max:5000',
                'category_id' => 'required|numeric|gt:0',
            ],
            [
                'title.required' => 'Nera pavadinimo',
                'title.min' => 'Per trumpas pavadinimas',
                'title.max' => 'Per ilgas pavadinimas',
                'price.required' => 'nera kainos',
                'price.numeric' => 'Kaina turi buti parasyta skaiciais',
                'category_id.gt' => 'Nepasirinkta kategorija'
            ]
        );

        Movie::create([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id
        ])->addImages($request->file('photo'))
        ->addTags($request->tag);

        return redirect()->route('m_index')->with('ok', 'All Good!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
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
    public function edit(Movie $movie)
    {
        return view('movie.edit', [
            'movie' => $movie,
            'categories' => Category::all(),
            'tags' => Tag::orderBy('title')->get(),
            'checkedTags' => $movie->getPivot->pluck('tag_id')->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

        $request->validate(
            [
                'title' => 'required|min:3|max:60',
                'price' => 'required|numeric|min:1|max:100',
                'photo.*' => 'sometimes|required|mimes:jpg|max:5000',
            ],
            [
                'title.required' => 'Nera pavadinimo',
                'title.min' => 'Per trumpas pavadinimas',
                'title.max' => 'Per ilgas pavadinimas',
                'price.required' => 'nera kainos',
                'price.numeric' => 'Kaina turi buti parasyta skaiciais',
            ]
        );

        $movie->update([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);
        $movie->removeImages($request->delete_photo)
            ->addImages($request->file('photo'))
            ->removeTags($request->tag)
            ->addTags($request->tag);

        return redirect()->route('m_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

        if ($movie->getPhotos()->count()) {
            $delIds = $movie->getPhotos()->pluck('id')->all();
            $movie->removeImages($delIds);
        }

        $movie->delete();
        return redirect()->route('m_index');
    }
}
