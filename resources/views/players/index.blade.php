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



@foreach($players as $player)
    <h3>{{ $player->first_name }} {{ $player->last_name }}</h3>
    <p></p>
    <h4>{{ $player->mobile_number }}</h4>
    <p>
        <a href="{{ route('players.show', $player->id) }}" class="btn btn-info">View player</a>
        <a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary">Edit player</a>
    </p>
    <hr>
@endforeach

            
    </form>
@stop