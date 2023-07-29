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
        $image_file = null;
        $video_file = null;

        $video = new Videos;

        $image_file = $request->file('image');
        $request->validate(['image' => 'required|mimes:jpg,jpeg|max:2048']);

        $video_file = $request->file('video');
        $request->validate(['video' => 'required|mimes:mp4']);

        $thumbnailPath = '/videos/Thumbnails/';
        $videosPath = '/videos/';

        $time = time();

        $extension = $image_file->getClientOriginalExtension();
        $imageName = $time . '.' . $extension;

        $extension = $video_file->getClientOriginalExtension();
        $videoName = $time . '.' . $extension;

        $video->title = $request->input('title');
        $video->video = $videosPath . $videoName;
        $video->thumbnail = $thumbnailPath . $imageName;
        $video->user = 'John Doe';
        $video->views = rand(10, 1000) . 'k views - ' . rand(1, 7) . 'days ago';

        $image_file->move(public_path() . $thumbnailPath, $imageName);
        $video_file->move(public_path() . $videosPath, $videoName);

        if ($video->save()) {
            return redirect()->route('videos.show', $video['id']);
        }
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
