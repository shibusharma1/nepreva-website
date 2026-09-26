<?php

namespace App\Http\Controllers\AdminControllers\Posts;

use App\Models\Posts\PostTypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Image;

class PostTypeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = PostTypeModel::orderBy('ordering', 'asc')->get();
    return view('admin.post-type.index', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // List Posttype Template
    $fileList = scandir(resource_path('views/themes/default/'));
    $filterArray = $this->filter_template_posttype($fileList);

    $filename = array();
    foreach ($filterArray as $filterArr) {
      $filename[] = $this->remove_extention($filterArr);
    }
    $file1 = array('page' => 'Choose Template');
    foreach ($filename as $file) {
      $file1[$file] = $file;
    }
    $templates = $file1;

    $ordering = PostTypeModel::max('ordering');
    $ordering = $ordering + 1;
    return view('admin.post-type.create', compact('ordering', 'templates'));
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
      'post_type' => 'required',
      'uri' => 'required|unique:cl_post_type'
    ]);
    $medium_width = env('MEDIUM_WIDTH');
    $medium_height = env('MEDIUM_HEIGHT');
    $data = $request->all();
    $banner = '';
    if ($request->hasFile('banner')) {
      $file = $request->file('banner');
      $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
      $extension = strtolower($file->getClientOriginalExtension());
      $destinationPath_medium = public_path('uploads/medium');
      $destinationOriginal = public_path('uploads/original');
      // SVG/PDF remain unchanged
      if (in_array($extension, ['svg', 'pdf'])) {
        $banner = Str::slug($originalName) . '-' . Str::random(40) . '.' . $extension;
        $file->move($destinationOriginal, $banner);
        copy(
          $destinationOriginal . '/' . $banner,
          $destinationPath_medium . '/' . $banner
        );
      } else {
        // Everything else becomes WEBP
        $banner = Str::slug($originalName) . '-' . Str::random(40) . '.webp';
        $image = Image::make($file->getRealPath());
        // Original
        $image->encode('webp', 90)
          ->save($destinationOriginal . '/' . $banner);
        // Medium
        $image->resize($medium_width, $medium_height, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })
          ->encode('webp', 90)
          ->save($destinationPath_medium . '/' . $banner);
      }
    }
    $data['banner'] = $banner;
    $data['uri'] = Str::slug($request->uri);
    $result = PostTypeModel::create($data);
    if ($result) {
      return redirect()->back()->with('message', 'Stored Successfully.');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Posts\PostTypeModel  $postTypeModel
   * @return \Illuminate\Http\Response
   */
  public function show(PostTypeModel $postTypeModel)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Posts\PostTypeModel  $postTypeModel
   * @return \Illuminate\Http\Response
   */
  public function edit(PostTypeModel $postTypeModel, $posttype, $id)
  {

    // List Posttype Template
    $fileList = scandir(resource_path('views/themes/default/'));
    $filterArray = $this->filter_template_posttype($fileList);

    $filename = array();
    foreach ($filterArray as $filterArr) {
      $filename[] = $this->remove_extention($filterArr);
    }
    $file1 = array('page' => 'Choose Template');
    foreach ($filename as $file) {
      $file1[$file] = $file;
    }
    $templates = $file1;

    $data = PostTypeModel::find($id);
    return view('admin.post-type.edit', compact('data', 'templates'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Posts\PostTypeModel  $postTypeModel
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PostTypeModel $postTypeModel, $posttype, $id)
  {
    // dd($request->all());
    $request->validate([
      'post_type' => 'required',
      'uri' => 'required'
    ]);
    $medium_width = env('MEDIUM_WIDTH');
    $medium_height = env('MEDIUM_HEIGHT');
    $data = PostTypeModel::find($id);
    $product_name = '';
    if ($request->hasFile('banner')) {
      // Delete old image
      if ($data->banner) {
        if (file_exists(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner)) {
          unlink(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner);
        }
        if (file_exists(env('PUBLIC_PATH') . 'uploads/original/' . $data->banner)) {
          unlink(env('PUBLIC_PATH') . 'uploads/original/' . $data->banner);
        }
      }
      $file = $request->file('banner');
      $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
      $extension = strtolower($file->getClientOriginalExtension());
      $destinationPath_medium = public_path('uploads/medium');
      $destinationOriginal = public_path('uploads/original');
      // SVG/PDF remain unchanged
      if (in_array($extension, ['svg', 'pdf'])) {
        $product_name = Str::slug($originalName) . '-' . Str::random(40) . '.' . $extension;
        $file->move($destinationOriginal, $product_name);
        copy(
          $destinationOriginal . '/' . $product_name,
          $destinationPath_medium . '/' . $product_name
        );
      } else {
        // Convert to WEBP
        $product_name = Str::slug($originalName) . '-' . Str::random(40) . '.webp';
        $image = Image::make($file->getRealPath());
        // Original
        $image->encode('webp', 90)
          ->save($destinationOriginal . '/' . $product_name);
        // Medium
        $image->resize($medium_width, $medium_height, function ($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })
          ->encode('webp', 90)
          ->save($destinationPath_medium . '/' . $product_name);
      }
      $data->banner = $product_name;
    }
    $data->post_type = $request->post_type;
    $data->caption = $request->caption;
    $data->meta_keyword = $request->meta_keyword;
    $data->meta_description = $request->meta_description;
    $data->content = $request->content;
    // $data->uri = Str::slug($request->uri);
    $data->template = $request->template;
    $data->uid = $request->uid;
    $data->ordering = $request->ordering;
    $data->is_menu = $request->is_menu;
    $data->is_footer_menu = $request->is_footer_menu;
    $data->save();
    return redirect()->back()->with('message', 'Update Successful.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Posts\PostTypeModel  $postTypeModel
   * @return \Illuminate\Http\Response
   */
  public function destroy(PostTypeModel $postTypeModel, $posttype, $id)
  {
    $data = PostTypeModel::find($id);
    if ($data->banner) {
      if (file_exists(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner)) {
        unlink(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner);
      }
      if (file_exists(env('PUBLIC_PATH') . 'uploads/original/' . $data->banner)) {
        unlink(env('PUBLIC_PATH') . 'uploads/original/' . $data->banner);
      }
    }
    $data->delete();
  }

  // Filter Template Child
  private function filter_template_posttype($template)
  {
    $tmpl2 = array();
    if (!empty($template)) {
      foreach ($template as $tmpl) {
        if (strpos($tmpl, "posttypeTemplate-") !== false) {
          $tmpl2[] = $tmpl;
        }
      }
    }
    return $tmpl2;
  }

  // Remove Extention
  private function remove_extention($filename)
  {
    $exp = explode('.', $filename);
    $file = $exp[0];
    return $file;
  }
}
