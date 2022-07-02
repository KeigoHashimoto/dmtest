@extends('layouts.app')

@section('content')
@foreach($users as $user)
    <li>{!!link_to_route('user.show',$user->name,[$user->id])!!}</li>
@endforeach

@endsection