<?php

namespace App\Http\Controllers\AdminControllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts\AssociatedPostModel;
use Illuminate\Support\Str;

use Image;

class AssociatedPostController extends Controller
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

  public function associated_post($type, $id)
  {
    $data = AssociatedPostModel::where('post_id', $id)->get();
    return view('admin.associated-post.index', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $ordering = AssociatedPostModel::max('ordering');
    $ordering += 1;
    return view('admin.associated-post.create', compact('ordering'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if ($request->has('post_id')) {
      $post_type = $request->input('post_id');
    } else {
      return "Invalid Post";
    }
    $request->validate([
      'title' => 'required'
    ]);
    $medium_width = env('MEDIUM_WIDTH');
    $medium_height = env('MEDIUM_HEIGHT');

    $data = $request->all();

    $file = $request->file('thumbnail');
    $thumbnail_name = '';

    if ($request->hasFile('thumbnail')) {
      $thumbnail = $file->getClientOriginalName();
      $extension = strtolower($file->getClientOriginalExtension());
      $thumbnail = explode('.', $thumbnail);
      // Save as WebP
      $thumbnail_name = Str::slug($thumbnail[0]) . '-' . Str::random(40) . '.webp';
      $destinationPath_medium = public_path('uploads/medium');
      $destinationOriginal = public_path('uploads/original');
      if ($extension != 'svg') {
        // Medium Image
        Image::make($file->getRealPath())
          ->resize($medium_width, $medium_height, function ($constraint) {
            $constraint->aspectRatio();
          })
          ->encode('webp', 85)
          ->save($destinationPath_medium . '/' . $thumbnail_name);
        // Original Size (converted to WebP)
        Image::make($file->getRealPath())->encode('webp', 85)->save($destinationOriginal . '/' . $thumbnail_name);
      } else {
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $destinationPath_medium . '/' . $thumbnail_name);
      }
    }

    $data['page_key'] = time() . rand(500000, 999999999);
    $data['thumbnail'] = $thumbnail_name;
    $result = AssociatedPostModel::create($data);
    if ($result) {
      return redirect()->back()->with('message', 'Successfully added.');
    } else {
      return 'Error';
    }
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
  public function edit($type, $id)
  {
    $data = AssociatedPostModel::find($id);
    return view('admin.associated-post.edit', compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $type, $id)
  {
    $medium_width = env('MEDIUM_WIDTH');
    $medium_height = env('MEDIUM_HEIGHT');

    $data = AssociatedPostModel::find($id);
    $file =  $request->file('thumbnail');
    $file = $request->file('thumbnail');
    $thumbnail_name = '';

    if ($request->hasFile('thumbnail')) {
      if ($data->thumbnail) {
        if (file_exists(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail)) {
          unlink(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail);
        }
        if (file_exists(env('PUBLIC_PATH') . 'uploads/original/' . $data->thumbnail)) {
          unlink(env('PUBLIC_PATH') . 'uploads/original/' . $data->thumbnail);
        }
      }
      $thumbnail = $file->getClientOriginalName();
      $extension = strtolower($file->getClientOriginalExtension());
      $thumbnail = explode('.', $thumbnail);
      // Save as WebP
      $thumbnail_name = Str::slug($thumbnail[0]) . '-' . Str::random(40) . '.webp';
      $destinationPath_medium = public_path('uploads/medium');
      $destinationOriginal = public_path('uploads/original');
      if ($extension != 'svg') {
        // Medium Image
        Image::make($file->getRealPath())
          ->resize($medium_width, $medium_height, function ($constraint) {
            $constraint->aspectRatio();
          })
          ->encode('webp', 85)
          ->save($destinationPath_medium . '/' . $thumbnail_name);
        // Original Size
        Image::make($file->getRealPath())
          ->encode('webp', 85)
          ->save($destinationOriginal . '/' . $thumbnail_name);
      } else {
        move_uploaded_file(
          $_FILES["thumbnail"]["tmp_name"],
          $destinationPath_medium . '/' . $thumbnail_name
        );
      }
      $data->thumbnail = $thumbnail_name;
    }

    $data->title = $request->title;
    $data->sub_title = $request->sub_title;
    $data->brief = $request->brief;
    $data->composition = $request->composition;
    $data->purpose = $request->purpose;
    $data->information = $request->information;
    $data->ordering = $request->ordering;
    $data->icon = $request->icon;
    if ($data->save()) {
      return redirect()->back()->with('message', 'Update Sucessfully.');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($type, $id)
  {
    $data = AssociatedPostModel::find($id);
    if ($data->thumbnail  != NULL) {
      if (file_exists(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail)) {
        unlink(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail);
      }
      if (file_exists(env('PUBLIC_PATH') . 'uploads/original/' . $data->thumbnail)) {
        unlink(env('PUBLIC_PATH') . 'uploads/original/' . $data->thumbnail);
      }
    }
    $data->delete();
    return "Delete Successful";
  }
}
