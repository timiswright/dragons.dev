<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Event::create($request->all());
        
        flash()->success('Success!' , 'The Event has been created.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $event = event::findOrFail($id);

        return view('events.show')->withEvent($event);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit')->withEvent($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $this->validate($request, [
            'date' => 'required'
        ]);
    
        $input = $request->all();
    
        $event->fill($input)->save();
    
        flash()->success('Success!', 'The Event has been updated!');
    
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        flash()->success('Success!', 'The Event has been deleted!');

        return redirect()->route('events.index');
    }

    public function playersevents()
    {
        return $this->belongsToMany('App\EventPlayer');
    }
}
