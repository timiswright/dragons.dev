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

            {!! Form::open(['method' => 'POST', 'route' => 'players.store', 'class' => 'form-horizontal']) !!}
            {!! Form::token() !!}
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name:') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('first_name') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('last_name') }}</small>
                </div>
            
                <div class="form-group ">
                    {!! Form::label('gender', 'Gender:') !!}
                    
                        M: {!! Form::radio('gender', '1') !!}
                    &nbsp;
                        F: {!! Form::radio('gender', '0') !!} 
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::label('mobile', 'Mobile Number:') !!}
                    {!! Form::number('mobile', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                </div>

                <div class="form-group">

                    {!! Form::label('team_id', 'Main Team') !!}
                    {!! Form::select('team_id', 
                        [
                            '1' => '1`s', 
                            '2' => '2`s',
                            '3' => '3`s',
                            '4' => '4`s',
                            '5' => '5`s',
                            '6' => '6`s',
                            '7' => '7`s'
                        ], null, 
                    [
                        'class' => 'form-control', 
                        'required' => 'required',
                        'placeholder' => 'Please select the main team'
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('team_id') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::label('rating', 'Rating') !!}
                    {!! Form::select('rating', 
                    [
                        '1' => '1',
                        '1.5' => '1.5',
                        '2' => '2',
                        '2.5' => '2.5',
                        '3' =>'3',
                        '3.5' => '3.5',
                        '4' => '4',
                        '4.5' => '4.5',
                        '5' => '5',
                        '5.5' => '5.5',
                        '6' => '6',
                        '6.5' => '6.5',
                        '7' => '7',
                        '7.5' => '7.5',
                        '99' => '99'
                    ]
                    , null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '', '']) !!}
                    <small class="text-danger">{{ $errors->first('rating') }}</small>
                </div>

                <div class="form-group">

                    {!! Form::label('position', 'Player Role:') !!}
                    {!! Form::select('position', 
                        [
                            'C' => 'Captain', 
                            'GK' => 'Goal Keeper' 
                        ], null, ['class' => 'form-control', 'placeholder' => 'Player Position', '']) !!}
                    <small class="text-danger">{{ $errors->first('position') }}</small>
                </div>
                
            
                <div class="btn-group pull-right">
                    {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                </div>
            
            {!! Form::close() !!}

            
    </form>
@stop