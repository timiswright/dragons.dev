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

            {!! Form::open(['method' => 'POST', 'route' => 'events.store', 'class' => 'form-horizontal']) !!}
            {!! Form::token() !!}
                
                <div class="form-group">
                    {!! Form::label('match_date', 'Match Date') !!}
                    {!! Form::date('match_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('match_date') }}</small>
                </div>
                
            
                <div class="btn-group pull-right">
                    {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                </div>


            
            {!! Form::close() !!}

            
    </form>
@stop