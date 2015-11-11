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
        
        <div class="col-md-4">
            {{ $event['nicedate'] }}
        </div>
        <div class="col-md-4">
        {{ $event['availability'] }}
{!! Form::radio('status','disabled', $event['availability']) !!} Maybe
    {!! Form::radio('status','disabled', $event['availability']) !!} Disabled    
{!! Form::radio('status','enabled', $event['availability']) !!} Enabled




<br><Br>
            {!! Form::radio('availability['. $event['id'] .']', null, $event['availability']) !!} Not Available 
                &nbsp; &nbsp; &nbsp; 
            {!! Form::radio('availability['. $event['id'] .']', null, $event['availability']) !!} Available
                &nbsp; &nbsp; &nbsp;
            {!! Form::radio('availability['. $event['id'] .']', null, $event['availability']) !!} Still Unsure 
                &nbsp; &nbsp; &nbsp;
        </div>
        <div class="col-md-4">
                {!! Form::label('availability_notes', 'Notes:') !!}
                {!! Form::text('availability_notes['. $event['id'] .']', $event['availability_notes'], ['class' => 'form-control']) !!}
        </div>
        

    </div>
    @endforeach
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</form>
@endsection