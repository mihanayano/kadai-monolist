{"filter":false,"title":"edit.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/edit.blade.php","ace":{"folds":[],"scrolltop":0.21875,"scrollleft":0,"selection":{"start":{"row":25,"column":11},"end":{"row":25,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"f2b9026f8f1d4430dd379ec3a748cc858d9e3875","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>","","    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}","","        ","        {!! Form::label('status', 'ステータス') !!}","        {!! Form::text('status') !!}","","        ","        {!! Form::label('content', 'tasklist:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('refresh') !!}","","    {!! Form::close() !!}","","@endsection"],"id":42}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<div class=\"container\">","<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>","<div class=\"row\">","    ","    <div class=\"col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3\">","    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}","","        <div class=\"form-group\">","        {!! Form::label('status', 'status') !!}","        {!! Form::text('status', null, ['class' => 'form-control']) !!}","         </div>","        <div class=\"form-group\">","        {!! Form::label('content', 'tasklist') !!}","        {!! Form::text('content', null, ['class' => 'form-control']) !!}","        </div>","        {!! Form::submit('refresh') !!}","","    {!! Form::close() !!}","        </div>","</div>","</div>","@endsection"],"id":43}]]},"timestamp":1527827809434}