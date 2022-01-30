<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        View::share('notices', Notice::all());
        return view('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
            'title' => 'required|min:5',
            'status' => ['required', Rule::in(["publish", "draft"])],
            'attachment' => 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar,7z,jpg,jpeg,png,gif,bmp,svg,txt|max:4096',
        ])->validate();

        $notice = new Notice;
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->status = $request->status;
        if ($request->has('attachment')) {

            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/notice'), $fileName);
            // $notice->attachment = $request->attachment->store('public/notice');
            $notice->attachment = "notice/" . $fileName;
        }
        $notice->save();

        return redirect(route('admin.notice.index'))->with('success', 'Notice created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        dd('NoticeController@show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice, $id)
    {
        View::share('notice', Notice::find($id));

        return view('admin.notice.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice, $id)
    {
        Validator::make($request->all(), [
            'title' => 'required|min:5',
            'status' => ['required', Rule::in(["publish", "draft"])],
            'attachment' => 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar,7z,jpg,jpeg,png,gif,bmp,svg,txt|max:4096',
        ])->validate();

        $notice = Notice::find($id);

        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->status = $request->status;

        if ($request->has('attachment')) {
            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/notice'), $fileName);
            $notice->attachment = "notice/" . $fileName;
        }

        $notice->save();

        return redirect(route('admin.notice.index'))->with('success', 'Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice, $id)
    {
        Notice::find($id)->delete();
        return redirect()->back()->with('success', 'Notice deleted successfully');
    }
}
