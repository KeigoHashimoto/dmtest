@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <p>ログインユーザー：{{ Auth::user()->name }}</p>
        
        @include('cats.form')
        @include('cats.cats')
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
