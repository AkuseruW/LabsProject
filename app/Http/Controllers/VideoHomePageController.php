<?php

namespace App\Http\Controllers;

use App\VideoHomePage;
use Illuminate\Http\Request;

class VideoHomePageController extends Controller
{

    public function create(Request $request)
    {
        $video = new VideoHomePage;
        $video->video =$request -> video;
        $video->save();
        return redirect()->back();
    }


    public function store(Request $request)
    {
        //
    }



    
    public function edit(VideoHomePage $videoHomePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoHomePage  $videoHomePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoHomePage $videoHomePage)
    {
        $request->validate([
            'video' => 'required|',
        ]);

        $video = VideoHomePage::find(1);
        $video->video =$request->video;
        $video->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoHomePage  $videoHomePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoHomePage $videoHomePage)
    {
        //
    }
}
