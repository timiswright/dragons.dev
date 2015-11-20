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
<p>
    {{ $team->team_name }}<br>

    @foreach($team->players as $player)

       {{$player->first_name}} {{$player->last_name}} {{$player->position}} {{$player->rating}}
        
        {{$player->availability}}<br>

    @endforeach



</p>
@endforeach




            

@endsection
