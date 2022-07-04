@if(Auth::id() != $cat->user->id)
    @if(!Auth::user()->is_favorite($cat->id))
        {!!Form::open(['route'=>['favorite',$cat->id]])!!}
            {!!Form::submit('お気に入り')!!}
        {!!Form::close()!!}
    @else 
        {{--messageboardへのリンク--}}
        {!!link_to_route('messageboard','メッセージを送る',[$cat->id])!!}
    @endif
@else
    {!!link_to_route('messageboard','メッセージを見る',[$cat->id])!!}
@endif