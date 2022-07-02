@if(Auth::id() != $cat->user->id)
    @if(!Auth::user()->is_favorite($cat->id))
        {!!Form::open(['route'=>['favorite',$user->id]])!!}
            {!!Form::submit('お気に入り')!!}
        {!!Form::close()!!}
    @else 
        {{--messageboardへのリンク--}}
        <a href="">メッセージを送る</a>
    @endif
@endif