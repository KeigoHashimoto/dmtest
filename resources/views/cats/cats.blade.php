<div class="">
    @foreach($cats as $cat)
        <p>{{$cat->name}}</p>
        <p>{{$cat->age}}</p>
        <p>{{$cat->content}}</p>
        @include('favorite_btn.favorite_btn')
        @if(Auth::id() == $cat->user->id)
        {!!Form::open(['route'=>['cat.delete',$cat->id],'method'=>'delete'])!!}
            {!!Form::submit('削除')!!}
        {!!Form::close()!!}
        
        
        @endif
    @endforeach
    
    {{$cats->links()}}
</div>