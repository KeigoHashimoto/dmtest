{!!Form::open(['route'=>'cats.create'])!!}
    <div>
        {!!Form::label('name','名前')!!}
        {!!Form::text('name')!!}
    </div>
    
    <div>
        {!!Form::label('age','年齢')!!}
        {!!Form::number('age')!!}
    </div>
    
    <div>
        {!!Form::label('content','内容')!!}
        {!!Form::textarea('content')!!}
    </div>
    
    {!!Form::submit('登録')!!}
{!!Form::close()!!}