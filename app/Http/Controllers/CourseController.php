<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
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
            'course_en' => 'required|string',
            'course_ar' => 'required|string',
            'course_image' => 'required|',
            'price' => 'required|string',
            'instructor_en' => 'required|string',
            'instructor_ar' => 'required|string',
            'instructor_image' => 'required|',
            'start_at' => 'required|date',
            'status' => 'required|',
        ]);

        $course_image = rand().'_'.time().'_'.$request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->move(public_path('uploads'), $course_image);
        $instructor_image = rand().'_'.time().'_'.$request->file('instructor_image')->getClientOriginalName();
        $request->file('instructor_image')->move(public_path('uploads'), $instructor_image);

        Course::create([
            'course_en' => $request->get('course_en'),
            'course_ar' => $request->get('course_ar'),
            'price' => $request->get('price'),
            'instructor_en' => $request->get('instructor_en'),
            'instructor_ar' => $request->get('instructor_ar'),
            'start_at' => $request->get('start_at'),
            'status' => $request->get('status'),
            'topics_en' => $request->get('topics_en'),
            'topics_ar' => $request->get('topics_ar'),
            'objectives_en' => $request->get('objectives_en'),
            'objectives_ar' => $request->get('objectives_ar'),
            'course_image' => $course_image,
            'instructor_image' => $instructor_image,
        ]);

        $notification = array(
            'message' => 'Saved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return response()->view('admin.courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_en' => 'required|string',
            'course_ar' => 'required|string',
            'course_image' => 'required|',
            'price' => 'required|string',
            'instructor_en' => 'required|string',
            'instructor_ar' => 'required|string',
            'instructor_image' => 'required|',
            'start_at' => 'required|date',
            'status' => 'required|',
        ]);

        $course_image = rand().'_'.time().'_'.$request->file('course_image')->getClientOriginalName();
        $request->file('course_image')->move(public_path('uploads'), $course_image);
        $instructor_image = rand().'_'.time().'_'.$request->file('instructor_image')->getClientOriginalName();
        $request->file('instructor_image')->move(public_path('uploads'), $instructor_image);

        Course::find($id)->update([
            'course_en' => $request->get('course_en'),
            'course_ar' => $request->get('course_ar'),
            'price' => $request->get('price'),
            'instructor_en' => $request->get('instructor_en'),
            'instructor_ar' => $request->get('instructor_ar'),
            'start_at' => $request->get('start_at'),
            'status' => $request->get('status'),
            'topics_en' => $request->get('topics_en'),
            'topics_ar' => $request->get('topics_ar'),
            'objectives_en' => $request->get('objectives_en'),
            'objectives_ar' => $request->get('objectives_ar'),
            'course_image' => $course_image,
            'instructor_image' => $instructor_image,
        ]);

        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.courses.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        File::delete(public_path('uploads/'.$course->course_image));
        File::delete(public_path('uploads/'.$course->instructor_image));

        $isDeleted = $course->delete();
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
