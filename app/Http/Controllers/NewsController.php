<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return response()->view('admin.news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.news.create');
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
            'auther' => 'required|string',
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'content_ar' => 'required',
            'content_en' => 'required',
            'image_name' => 'required',
        ]);

        $image_name = rand().'_'.time().'_'.$request->file('image_name')->getClientOriginalName();
        $request->file('image_name')->move(public_path('uploads'), $image_name);

        News::create([
            'auther' => $request->get('auther'),
            'title_ar' => $request->get('title_ar'),
            'title_en' => $request->get('title_en'),
            'content_ar' => $request->get('content_ar'),
            'content_en' => $request->get('content_en'),
            'image_name' => $image_name
        ]);

            $notification =  array(
                'message' => 'Created Successfully',
                'alert-type' => 'success'
            );


        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id){
        $newss= News::findOrFail($id);
        return view('jadwa.news-page', compact('newss'));
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return response()->view('admin.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'auther' => 'required|string',
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'content_ar' => 'required',
            'content_en' => 'required',
            'image_name' => 'required',
        ]);

        $image_name = rand().'_'.time().'_'.$request->file('image_name')->getClientOriginalName();
        $request->file('image_name')->move(public_path('uploads'), $image_name);

        News::find($id)->update([
            'auther' => $request->get('auther'),
            'title_ar' => $request->get('title_ar'),
            'title_en' => $request->get('title_en'),
            'content_ar' => $request->get('content_ar'),
            'content_en' => $request->get('content_en'),
            'image_name' => $image_name
        ]);

            $notification =  array(
                'message' => 'Updated Successfully',
                'alert-type' => 'success'
            );


        return redirect()->route('admin.news.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        File::delete(public_path('uploads/'.$news->image_name));

        $isDeleted = $news->delete();
        if($isDeleted) {
            return response()->json([
                'tilte' => 'success',
                'text' => 'Deleted Successfully',
                'icon' => 'success',
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'tilte' => 'Failed',
                'text' => 'Failed to delete',
                'icon' => 'error',
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
