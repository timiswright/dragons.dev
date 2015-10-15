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



@foreach($events as $event)
    <h3>Match Date: {{ $event->date->format('D - d/m/Y') }}</h3>{{ $event->date->diffForHumans() }}
    <p></p>
    <p>
        <a href="{{ route('events.show', $event->id) }}" class="btn btn-info">View event</a>
        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit event</a>
    </p>
    <hr>
@endforeach

            
    </form>
@stop