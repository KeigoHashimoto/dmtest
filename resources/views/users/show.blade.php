@extends('layouts.app')

@section('content')
{{$user->name}}
{{$user->email}}

@include('cats.cats')
@endsection