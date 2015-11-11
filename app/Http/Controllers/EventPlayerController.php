<?php

namespace App\Http\Controllers;
use App\Team;
use App\Event;
use App\Player;
use App\EventPlayer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $player = Player::whereLoginHash($id)->firstOrFail();
        $playerEvents = $player->events;
        $upcomingEvents = Event::where('date', '>', Carbon::now())
            ->where('date', '<', Carbon::now()->addWeeks(5))
            ->orderBy('date', 'asc')
            ->get();

        $upcomingEventsFiltered = [];

        foreach ($upcomingEvents as $event) 
        {
        $upcomingEventsFiltered[$event->id] = $event->toArray(); // might as well keep it as an array since we are using an array below
        $upcomingEventsFiltered[$event->id]['nicedate'] = $event->date->format('l jS F Y'); // you must add 'date' to the 'protected $dates' array on the Event model
        
        if ($playerEvent = $playerEvents->find($event)) {
            $upcomingEventsFiltered[$event->id]['responded']          = true;
            $upcomingEventsFiltered[$event->id]['availability_notes'] = EventPlayer::where('event_id', $event->id)->first()->availability_notes;
            $upcomingEventsFiltered[$event->id]['availability']       = EventPlayer::where('event_id', $event->id)->first()->availability;
        } else {
            $upcomingEventsFiltered[$event->id]['responded']          = false;
            $upcomingEventsFiltered[$event->id]['availability_notes'] = false;
            $upcomingEventsFiltered[$event->id]['availability']       = false;
        }
    }
      
         

        //return $upcomingEventsFiltered;

        //flash()->success('Welcome Back '.$player->first_name.'!','');
        return view('players.availability', [
            'player'  =>  $player,
            'playerEvents'  =>  $playerEvents,
            'upcomingEvents'  =>  $upcomingEvents,
            'upcomingEventsFiltered' => $upcomingEventsFiltered
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $events = [];
        foreach ($request->input('availability_notes') as $eventId => $notes) {


    // we already have $notes as we're foreaching through
    // _POST[availability_notes], but we need to get the corresponding
    // availability field
            $availability = array_get($request->input('availability'), $eventId);
    // only add the user's response to the array if at least one of them is
    // filled out
            if ($notes !== '' || ! is_null($availability)) {
                $events[$eventId] = ['availability_notes' => $notes, 'availability' => $availability];
            }
 
        }
        return $events;
                $player->events()->sync($events);

        //if you have to fill out note and radios
        //foreach ($request->input('availability') as $eventId => $available) {
        //    $events[$eventId] = ['availability' => $available, 'availability_notes' => $request->input('availability_notes')[$eventId]];
        //} 
        flash()->success('Updated!' , 'Thank you for updating your availability.');
        return redirect()->back();
        
    }



}
