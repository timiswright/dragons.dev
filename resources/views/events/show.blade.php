@extends('layout')

@section('content')

<h1>Match Date: {{ $event->date->format('l jS F Y - d/m/Y') }} </h1>{{ $event->date->diffForHumans() }}

<hr>
<a href="{{ route('events.index') }}" class="btn btn-info">Back to all events</a>
<a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit event</a>

<div class="pull-right">
    
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['events.destroy', $event->id]
        ]) !!}
            {!! Form::submit('Delete this event?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
 
</div>

@stop