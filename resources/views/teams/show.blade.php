@extends('layout')

@section('content')

<h1>Team Name: {{ $team->team_name }}

<hr>
<a href="{{ route('teams.index') }}" class="btn btn-info">Back to all teams</a>
<a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">Edit team</a>

<div class="pull-right">
    
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['teams.destroy', $team->id]
        ]) !!}
            {!! Form::submit('Delete this team?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
 
</div>

@stop
