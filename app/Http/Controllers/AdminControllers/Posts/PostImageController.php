<?php

namespace App\Http\Controllers\AdminControllers\Posts;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts\PostImageModel;
use Validator;
use Image;

class PostImageController extends Controller
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
        $request->validate([
            'file_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:3072|dimensions:max_width=2500,max_height=2000',
        ]);

        $medium_width = env('MEDIUM_WIDTH');
        $medium_height = env('MEDIUM_HEIGHT');

        $req = $request->all();
        $file_name = '';

        if ($request->hasFile('file_image')) {

            $file = $request->file('file_image');

            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            // Always save as webp
            $file_name = Str::slug($originalName) . '-' . Str::random(40) . '.webp';

            $destinationPath = public_path('uploads/medium');

            $image = Image::make($file->getRealPath());

            $image->resize($medium_width, $medium_height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $image->encode('webp', 90)
                ->save($destinationPath . '/' . $file_name);
        }

        $req['post_id'] = $request->post_id;
        $req['file_name'] = $file_name;
        $req['title'] = $request->title;

        PostImageModel::create($req);

        return redirect()->back()->with('message', 'Image Upload Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id, $id)
    {
        $data = PostImageModel::where('id', $id)->first();
        return view('admin.multiple-photo.edit', compact('id', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = PostImageModel::find($id);

        $post_id = $req->post_id;

        $data = PostImageModel::where('post_id', $post_id)->get();

        $document = "";

        if ($request->hasFile('file_name')) {

            // Delete old image
            if ($req->file_name && file_exists(public_path('uploads/medium/' . $req->file_name))) {
                unlink(public_path('uploads/medium/' . $req->file_name));
            }

            $medium_width = env('MEDIUM_WIDTH');
            $medium_height = env('MEDIUM_HEIGHT');

            $file = $request->file('file_name');

            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            // Always save as webp
            $document = Str::slug($originalName) . '-' . Str::random(40) . '.webp';

            $destinationPath = public_path('uploads/medium');

            $image = Image::make($file->getRealPath());

            $image->resize($medium_width, $medium_height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $image->encode('webp', 90)
                ->save($destinationPath . '/' . $document);

            $req->file_name = $document;
        }

        $req->title = $request->title;

        if ($req->save()) {
            return redirect()->route('admin.multiplephoto', compact('post_id', 'data'))
                ->with('message', 'Update Sucessful.');
        } else {
            return "Error";
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PostImageModel::find($id);
        if ($data->file_name) {

            if (file_exists(public_path('uploads/medium/' .  $data->file_name))) {
                unlink('uploads/medium/' . $data->file_name);
            }
        }
        $data->delete();
        return response()->json([
            'message' => 'Delete Successful!',
            'class_name' => 'alert-success'
        ]);
    }

    public function upload_form($id)
    {
        // return $id;
        $post_id = $id;
        $data = PostImageModel::where('post_id', $id)->get();
        return view('admin.multiple-photo.create', compact('post_id', 'data'));
    }
}
