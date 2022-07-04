@extends('layouts.app')

@section('content')
<div>
    {!!Form::open(['route'=>['post.messages',$user->id]])!!}
        {!!Form::label('message','Message')!!}
        {!!Form::text('message')!!}
        {!!Form::submit('Post')!!}
    {!!Form::close()!!}
</div>
@foreach($messages as $message)
    <li>{{$message->message}}</li>
@endforeach
@endsection