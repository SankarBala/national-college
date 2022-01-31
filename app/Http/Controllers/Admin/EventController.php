<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        View::share('events', Event::all());
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'attachment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();


        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        if ($request->has('attachment')) {

            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/event'), $fileName);
            $event->event_picture = "event/" . $fileName;
        }

        $event->startTime = trim(explode('-', $request->eventTimeRange)[0]);
        $event->endTime = trim(explode('-', $request->eventTimeRange)[1]);

        $event->save();

        return redirect(route('admin.event.index'))->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        dd('EventController@show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        View::share('event', $event);
        return view('admin.event.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        Validator::make($request->all(), [
            'title' => 'required|min:5',
            'attachment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();


        $event->title = $request->title;
        $event->description = $request->description;
        if ($request->has('attachment')) {

            $fileName = time() . '.' . $request->attachment->extension();
            $request->attachment->move(public_path('storage/event'), $fileName);
            $event->event_picture = "event/" . $fileName;
        }
        $event->startTime = trim(explode('-', $request->eventTimeRange)[0]);
        $event->endTime = trim(explode('-', $request->eventTimeRange)[1]);

        $event->save();

        return redirect(route('admin.event.index'))->with('success', 'Event created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index');
    }
}
