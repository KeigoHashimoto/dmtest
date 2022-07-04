@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <p>ログインユーザー：{{ Auth::user()->name }}</p>
        
        {!!link_to_route('cats.form','猫を譲る')!!}
        
        <h2>自分の投稿</h2>
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
