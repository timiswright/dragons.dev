@extends('layout')

@section('content')

<h1>Editing "{{ $team->team_name }}"</h1>
<p class="lead">Edit and save this team below, or <a href="{{ route('teams.index') }}">go back to all teams.</a></p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($team, [
    'method' => 'PATCH',
    'route' => ['teams.update', $team->id]
]) !!}

        <div class="form-group">
                {!! Form::label('team_name', 'First Name:') !!}
                {!! Form::text('team_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('team_name') }}</small>
        </div>



{!! Form::submit('Update team', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop