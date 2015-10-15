@extends('layout')

@section('content')
 
 @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif



@foreach($teams as $team)
    <h3>Team: {{ $team->team_name }}
    <p></p>
    <p>
        <a href="{{ route('teams.show', $team->id) }}" class="btn btn-info">View team</a>
        <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">Edit team</a>
    </p>
    <hr>
@endforeach

            
    </form>
@stop
