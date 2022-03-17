<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        View::share('results', Result::all());
        return view('admin.result.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.result.create');
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
            'title' => 'required|string|min:5|max:255',
            'status' => 'required|in:published,draft',
            'attachment' => 'nullable|mimes:pdf,doc,docx,zip,rar,jpg,jpeg,png,gif'
        ]);

        if ($request->has('attachment') && $request->file('attachment')->isValid()) {
          
            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/results'), $fileName);
            $path = "results/" . $fileName;

            $result = Result::create([
                'title' => $request->title,
                'class' => $request->class,
                'status' => $request->status,
                'attachment' => $path
            ]);
        } else {
            $result = Result::create([
                'title' => $request->title,
                'class' => $request->class,
                'status' => $request->status
            ]);
        }

        return redirect()->route('admin.result.index')->with('success', 'Result created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        View::share('result', $result);
        return view('admin.result.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'status' => 'required|in:published,draft',
            'attachment' => 'nullable|mimes:pdf,doc,docx,zip,rar,jpg,jpeg,png,gif'
        ]);

        if ($request->has('attachment') && $request->file('attachment')->isValid()) {
           
            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/results'), $fileName);
            $path = "results/" . $fileName;

            $result->update([
                'title' => $request->title,
                'class' => $request->class,
                'status' => $request->status,
                'attachment' => $path
            ]);
        } else {
            $result->update([
                'title' => $request->title,
                'class' => $request->class,
                'status' => $request->status
            ]);
        }

        return redirect()->route('admin.result.index')->with('success', 'Result updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return redirect()->route('admin.result.index')->with('success', 'Result deleted successfully');
    }
}
