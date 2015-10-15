@extends('layout')

@section('content')

<h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
<p><p>
<h2>Mobile: {{ $player->mobile }}</h2>
<h3>Email: {{ $player->email }}</h3>
<p>
Gender:
@if ($player->gender === '1')
    Male
@elseif ($player->gender === '0')
    Female
@endif
<p>
Team: 
@if ($player->gender === '1')
    Mens
@elseif ($player->gender === '0')
    Ladies
@endif
{{ $player->team_id }}'s
<p>
Rating: {{ $player->rating }}
<p>
Login Hash: {{ $player->login_hash }}
<p>

@if ($player->position)
    Position: {{ $player->position }}
@endif


<hr>
<a href="{{ route('players.index') }}" class="btn btn-info">Back to all players</a>
<a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary">Edit player</a>

<div class="pull-right">
    
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['players.destroy', $player->id]
        ]) !!}
            {!! Form::submit('Delete this player?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
 
</div>

@stop