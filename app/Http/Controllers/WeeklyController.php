<?php

namespace App\Http\Controllers;
use DB;
use App\Player;
use App\Team;
use App\EventPlayer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        DB::enableQueryLog();
   
    $event_id = 2;
    $filtered = array();



    //SELECT *
    //FROM `players`  
    //LEFT JOIN `event_player` 
    //ON event_player.`event_id`=1
    //AND event_player.player_id=players.id where team_id=1


    // $teams = Team::orderBy('team_name')->get();
    //     foreach ($teams as $team) { 
    //          $filtered[$team->id] = $team;
    //          $filtered[$team->id]['players'] = 

    //          Team::find($team->id)->players()
    //          ->select('id AS player_id', 'team_id', 'first_name', 'last_name', 'event_id', 'rating', 'position', 'starred', 'mobile', 'availability', 'availability_notes')
    //          ->leftjoin('event_player', function ($join) {
    //                 $join->on('event_player.player_id', '=', 'players.id'); 
    //                 $join->where('event_player.event_id', '=', '1');
    //             })
    //                 ->where('team_id', $team->id)
    //                 ->orderBy('rating')
    //                 ->orderBy('position', 'is', 'null')
    //                 ->orderBy('position', 'Asc')  
    //                 ->orderBy('first_name')
    //          ->get();               
    //     }

        // $teams = Team::with(['players' => function ($query) {
        //     $query
        //         ->orderBy('rating')
        //         ->orderBy('position', 'is', 'null')
        //         ->orderBy('position', 'ASC')
        //         ->orderBy('first_name')
        //         ;
        //     }])
        

           //->get();


        $teams = Team::with(['players' => function ($query) {
            $query
                ->leftjoin('event_player', function ($join) {
                    $join->on('event_player.player_id', '=', 'players.id');
                    $join->where('event_player.event_id', '=', '1');
                })

                ->orderBy('position', 'is', 'null')
                ->orderBy('position', 'ASC')
                ->orderBy('availability', 'DESC')
                ->orderBy('rating')
                ->orderBy('first_name')
                ;
            }])

           ->get();


    

          


    //return DB::getQueryLog();

   

    return view('weekly.index')->withTeams($teams);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
