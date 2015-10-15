@extends('layout')

@section('content')

<h1>Editing "{{ $event->date->format('l jS F Y - d/m/Y') }}"</h1>
<p class="lead">Edit and save this event below, or <a href="{{ route('events.index') }}">go back to all events.</a></p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($event, [
    'method' => 'PATCH',
    'route' => ['events.update', $event->id]
]) !!}

        <div class="form-group">
            {!! Form::label('date', 'Match Date') !!}
            {!! Form::date('date', $event->date , ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('date') }}</small>
        </div>



{!! Form::submit('Update event', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop