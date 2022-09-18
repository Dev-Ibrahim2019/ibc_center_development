<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index() {
        $about = About::find(1);
        return response()->view('admin.home.about', compact('about'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'about_image' => 'required',
        ]);

        $about_image = rand().'_'.time().'_'.$request->file('about_image')->getClientOriginalName();
        $request->file('about_image')->move(public_path('uploads/'), $about_image);

        About::find($id)->update([
            'title_ar' => $request->get('title_ar'),
            'title_en' => $request->get('title_en'),
            'content_ar' => $request->get('content_ar'),
            'content_en' => $request->get('content_en'),
            'about_image' => $about_image
        ]);

        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function homeAbout() {
        $aboutPage = About::find(1);
        return response()->view('frontend.about', compact('aboutPage'));
    }
}
