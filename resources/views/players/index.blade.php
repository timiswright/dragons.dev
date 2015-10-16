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



@foreach($players->chunk(3) as $player)
<div class="row course-set courses__row">
    @foreach($player as $eachplayer)
        <div class="col-md-4 course-block course-block-lessons">
            <h3>{{ $eachplayer->first_name }} {{ $eachplayer->last_name }}</h3>
            <p></p>
            <h4>{{ $eachplayer->mobile_number }}</h4>
            <p>
                <a href="{{ route('players.show', $eachplayer->id) }}" class="btn btn-info">View player</a>
                <a href="{{ route('players.edit', $eachplayer->id) }}" class="btn btn-primary">Edit player</a>
            </p>
            <hr>
        </div>
    @endforeach
</div>
@endforeach

            

@stop
