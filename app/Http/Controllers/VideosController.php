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
     * @param int $id
     * @return \illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Videos::find($id);

        if (file_exists(public_path() . $video->video)) {
            unlink(public_path() . $video->video);
        }

        if (file_exists(public_path() . $video->thumbnail)) {
            unlink(public_path() . $video->thumbnail);
        }


        $video->delete();
        return redirect()->route('deleteVideo');
    }
}
