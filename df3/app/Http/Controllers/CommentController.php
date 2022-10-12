<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::orderBy('title')->paginate(5);
        return view('comment.index', [
            'movies' => $movie
        ]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
