<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achivement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('achivements', Achivement::all());
        return view('admin.achivement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achivement.create');
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
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'in:published,draft',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $achivement = new Achivement();
        $achivement->title = $request->title;
        $achivement->description = $request->description;
        $achivement->status = $request->status;

        if ($request->has('attachment')) {
            $achivement->attachment =  Storage::disk('public')->put('achivements', $request->attachment);
        }

        $achivement->save();
        return redirect()->route('admin.achivement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function show(Achivement $achivement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achivement $achivement)
    {
        view()->share('achivement', $achivement);
        return view('admin.achivement.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achivement $achivement)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'in:published,draft',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $achivement->title = $request->title;
        $achivement->description = $request->description;
        $achivement->status = $request->status;

        if ($request->has('attachment')) {
            $achivement->attachment =  Storage::disk('public')->put('achivements', $request->attachment);
        }

        $achivement->save();
        return redirect()->route('admin.achivement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achivement $achivement)
    {
        $achivement->delete();
        return redirect()->route('admin.achivement.index');
    }
}
