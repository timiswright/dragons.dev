<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('teams.index')->withTeams($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TeamRequest  $request
     * @return Response
     */
    public function store(TeamRequest $request)
    {
        
        Team::create($request->all());
        
        flash()->success('Success!' , 'The Team has been created.');

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
        $team = Team::findOrFail($id);

        return view('teams.show')->withTeam($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        if (is_null($team))
        {
            return Redirect::route('teams.index');
        }
        return view('teams.edit')->withTeam($team);
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
        $team = Team::findOrFail($id);
    
        $input = $request->all();
    
        $team->fill($input)->save();
    
        flash()->success('Success!', 'The Team has been updated!');
    
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        $team->delete();

        flash()->success('Success!', 'The Team has been deleted!');

        return redirect()->route('teams.index');
    }

}
