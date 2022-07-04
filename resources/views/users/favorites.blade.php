@extends('layouts.app')

@section('content')
<div>
    <h2>お気に入り投稿一覧</h2>
    @foreach($favorites as $favorite)
        <li>{{$favorite->name}}({{$favorite->age}}歳)</li>
    @endforeach
</div>
@endsection