<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add-banner');
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'caption' => 'required|string|max:255',
        ]);

        // Save the image to disk
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Store the data in your database
        $banner = new Banner;
        $banner->image = $imageName;
        $banner->caption = $request->input('caption');
        $banner->save();

        // Redirect back to the form with a success message
        return back()
            ->with('success', 'You have successfully uploaded an image.')
            ->with('image', $imageName);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner_img =Banner::all();
      //  print_r($banner_img);
       // return view('welcome' ,['banner' => $banner_img]);
        return view('welcome', ['banner_img' => $banner_img]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        {
            $banner_imgs =Banner::all();
          //  print_r($banner_img);
           // return view('welcome' ,['banner' => $banner_img]);
            return view('get-banner', ['banner_imgs' => $banner_imgs]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
     $banners = Banner::find($id);
     return view('edit-banner' ,['banners' =>$banners] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
      // Validate the incoming request
      $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'caption' => 'required|string|max:255',
    ]);

    $banner = Banner::findOrFail($id);

    // If a new image is uploaded, save it and update the image name in the database
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $banner->image = $imageName;
    }

    // Update the caption
    $banner->caption = $request->input('caption');
    $banner->save();

    // Redirect back to the form with a success message
    return back()
        ->with('success', 'You have successfully updated the banner.')
        ->with('image', $banner->image);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user_delete =  Banner::find($id);
        $user_delete->delete();
        return back()->with('success', 'User deleted successfully');
    }
}
