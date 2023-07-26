<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Videos;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideosController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Videos::find($id),
            'comments' => Comments::all(),
            'recommendedVideos' => Videos::inRandomOrder()->get()
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videos $videos)
    {
        //
    }
}
