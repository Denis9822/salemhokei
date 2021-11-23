<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'file' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        ]);

        $hashName = $request->file->hashName();
        if ($request->file->move(public_path('videos'), $hashName)){
            $video  = Upload::create([
                'filename' => $hashName,
                'type' => 'video'
            ]);
            return response()->json([
                'upload_id' => $video->id,
                'filename' =>  'videos/' . $hashName
            ]);
        }else{
            return response()->json([
                'message' => 'Файл не загружен! попробуйте другой файл.'
            ]);
        }
    }
    public function store_image(Request $request)
    {


        $hashName = $request->file->hashName();
        if ($request->file->move(public_path('img'), $hashName)){
            $image  = Upload::create([
                'filename' => $hashName,
                'type' => 'image'
            ]);
            return response()->json([
                'image_id' => $image->id,
                'filename' =>  'img/' . $hashName
            ]);
        }else{
            return response()->json([
                'message' => 'Файл не загружен! попробуйте другой файл.'
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
