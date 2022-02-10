<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('teachers', Teacher::all());
        return view('admin.teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'id' => 'numeric|nullable',
            'name' => 'min:5',
            'phone' => 'min:6|max:15|nullable',
            'email' => 'email|nullable',
            'designation' => 'string|nullable',
            'designation' => 'string|min:5|nullable',
            'photo' => 'mimes:jpg,jpeg,png,gif,bmp,svg|max:4096',
        ])->validate();


        $teacher = new Teacher;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->designation = $request->designation;

        if ($request->has('photo')) {

            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('storage/teacher'), $fileName);
            $teacher->photo = "teacher/" . $fileName;
        }
        $teacher->save();


        return redirect(route('admin.teacher.index'))->with('success', 'Notice created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        Validator::make($request->all(), [
            'id' => 'numeric|nullable',
            'name' => 'min:5',
            'phone' => 'min:6|max:15|nullable',
            'email' => 'email|nullable',
            'designation' => 'string|min:5|nullable',
            'photo' => 'mimes:jpg,jpeg,png,gif,bmp,svg|max:4096',
        ])->validate();


        $teacher->teacher_id = $request->teacher_id;
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->designation = $request->designation;

        if ($request->has('photo')) {

            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('storage/teacher'), $fileName);
            $teacher->photo = "teacher/" . $fileName;
        }
        $teacher->save();


        return redirect(route('admin.teacher.index'))->with('success', 'Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teacher.index')->with('success', 'Teacher deleted successfully');
    }
}
