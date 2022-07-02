<div class="">
    <h1>猫投稿一覧</h1>
    @foreach($cats as $cat)
        <p>{{$cat->name}}</p>
        <p>{{$cat->age}}</p>
        <p>{{$cat->content}}</p>
        @include('favorite_btn.favorite_btn')
        {!!Form::open(['route'=>['cat.delete',$cat->id],'method'=>'delete'])!!}
            {!!Form::submit('削除')!!}
        {!!Form::close()!!}
    @endforeach
    
    {{$cats->links()}}
</div>