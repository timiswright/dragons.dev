<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $players = Player::orderBy('first_name')->get();

        return view('players.index')->withPlayers($players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $teams = Team::lists('team_name', 'id');
        return view('players.create')->withTeams($teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PlayerRequest  $request
     * @return Response
     */
    public function store(PlayerRequest $request)
    {
        
        do {$login_hash = str_random(6); } while (Player::wherelogin_hash($login_hash)->exists());

        $request->merge([
            'login_hash' => $login_hash
        ]);

        Player::create($request->all());
        
        flash()->success('Success!' , 'The Player has been created.');

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
        $player = Player::findOrFail($id);

        return view('players.show')->withPlayer($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::lists('team_name', 'id');

        if (is_null($player))
        {
            return Redirect::route('players.index');
        }
        return view('players.edit')->withPlayer($player)->withTeams($teams);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PlayerRequest $request, $id)
    {
        $player = Player::findOrFail($id);

        //$this->validate($request, [
        //    'match_date' => 'required'
        //]);
    
        $input = $request->all();
    
        $player->fill($input)->save();
    
        flash()->success('Success!', 'The player has been updated!');
    
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);

        $player->delete();

        flash()->success('Success!', 'The player has been deleted!');

        return redirect()->route('players.index');
    }

}
