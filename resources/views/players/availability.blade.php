@extends('loginhash')
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

{!! Form::model($player, [
    'method' => 'PATCH',
    'route' => ['eventplayer.update', $player->id],
    'class' => 'form-inline'
]) !!}


<div class="form-group">
@foreach($upcomingEventsFiltered as $event)
    <div class="row  col-border">
                    
            @if ($event['responded'] & $event['availability'])
                <?php
                    //LEVEL 1
                     $level = 1; 
                     $colour = 'green'; 
                    ?>
            @endif
            
            @if ($event['responded'] & !$event['availability'] & isset($event['availability']))
                <?php
                    //LEVEL 2
                    $level = 2; 
                    $colour = 'red'; 
                ?>
            @endif
            
            @if($event['responded'] & !isset($event['availability']))
                <?php
                    //LEVEL 3
                    $level = 3; 
                    $colour = 'orange'; 
                ?>
            @endif
            
            @if( !$event['responded'] & isset($event['responded']) & (!$event['availability']) & isset($event['availability'])) 
                <?php
                    //LEVEL 4
                    $level = 4;
                    $colour = 'black'; 
                ?>
            @endif

        <div class="col-md-4 level{{$level}} col-border">     
            {{ $event['nicedate'] }}
        </div>
        
        <div class="col-md-4 level{{$level}} col-border">
            @if ($level == 1)
            {!! Form::radio('availability['. $event['id'] .']','1', true) !!} Yes
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','0', false) !!} No    
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','3', false) !!} Maybe
            @endif

            @if ($level == 2)
            {!! Form::radio('availability['. $event['id'] .']','1', false) !!} Yes
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','0', true) !!} No    
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','3', false) !!} Maybe
            @endif

            @if ($level == 3)
            {!! Form::radio('availability['. $event['id'] .']','1', false) !!} Yes
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','0', false) !!} No    
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','3', true) !!} Maybe
            @endif

            @if ($level == 4)
            {!! Form::radio('availability['. $event['id'] .']','1', false) !!} Yes
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','0', false) !!} No    
            &nbsp;&nbsp;&nbsp;
            {!! Form::radio('availability['. $event['id'] .']','3', false) !!} Maybe
            @endif

        </div>
        <div class="col-md-4 level{{$level}} col-border">
                {!! Form::label('availability_notes', 'Notes:') !!}
                {!! Form::text('availability_notes['. $event['id'] .']', $event['availability_notes'], ['class' => 'form-control input-lg']) !!}
        </div>

    </div>
    <hr width="60%">
    @endforeach
    <div class="row  col-border">
        <div class="col-md-12 col-border">
            <hr width="80%">
                <center>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </center>
        </div>
    </div>
</form>
</div>
@endsection