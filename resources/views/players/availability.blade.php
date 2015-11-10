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

{!! Form::model($player, [
    'method' => 'PATCH',
    'route' => ['eventplayer.update', $player->id],
    'class' => 'form-inline'
]) !!}

    @foreach($upcomingEventsFiltered as $event)
    <div class="row">
    <font color="black">
        @if ($event['responded'])
            <div class="col-md-4"> 
                @if($event['availability'])
                    <font color="green">
                @else
                    <font color="red">
                @endif  
                {{ $event['nicedate'] }}
            </div>
            <div class="col-md-4">
                    {!! Form::label('availability_notes', 'Notes:') !!}
                    {!! Form::text('availability_notes['. $event['id'] .']', $event['availability_notes'], ['class' => 'form-control']) !!}
                    
            </div>
        @else
            <div class="col-md-4">
                <font color="black">
                {{ $event['nicedate'] }}
                </font>
            </div>
            <div class="col-md-4">
                    {!! Form::label('availability_notes', 'Notes:') !!}
                    {!! Form::text('availability_notes['. $event['id'] .']', null, ['class' => 'form-control']) !!}
            </div>
        @endif
    </font>
        
        <div class="col-md-4">

        1{!! Form::radio('availability['. $event['id'] .']', '1', $event['availability']) !!} Available &nbsp; &nbsp; &nbsp; 
        2{!! Form::radio('availability['. $event['id'] .']', '0', if($event['availability']) !!} Not Available &nbsp; &nbsp; &nbsp;

       @if($event['responded'])
            @if($event['availability'])
               1{!! Form::radio('availability['. $event['id'] .']', '1', true) !!} Available &nbsp; &nbsp; &nbsp; 
               2{!! Form::radio('availability['. $event['id'] .']', '0', false) !!} Not Available &nbsp; &nbsp; &nbsp;
            @else

               3{!! Form::radio('availability['. $event['id'] .']', '1', false) !!} Available &nbsp; &nbsp; &nbsp; 
               4{!! Form::radio('availability['. $event['id'] .']', '0', true) !!} Not Available &nbsp; &nbsp; &nbsp;

            @endif
        @else
            5{!! Form::radio('availability['. $event['id'] .']', '1', false) !!} Available &nbsp; &nbsp; &nbsp; 
            6{!! Form::radio('availability['. $event['id'] .']', '0', false) !!} Not Available &nbsp; &nbsp; &nbsp;
        @endif
             
        </div>
    </div>
    @endforeach
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</form>
 


@stop
      
