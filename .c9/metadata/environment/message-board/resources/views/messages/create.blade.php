{"filter":false,"title":"create.blade.php","tooltip":"/message-board/resources/views/messages/create.blade.php","ace":{"folds":[],"scrolltop":81.109375,"scrollleft":0,"selection":{"start":{"row":28,"column":11},"end":{"row":28,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php"}},"hash":"b8ca054acfed6916dfbc24993a3d6b2bdd8d94b0","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":9,"column":3},"end":{"row":19,"column":25},"action":"remove","lines":[" {!! Form::model($message, ['route' => 'messages.store']) !!}","","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('投稿') !!}","","    {!! Form::close() !!}"],"id":11}],[{"start":{"row":9,"column":3},"end":{"row":23,"column":33},"action":"insert","lines":[" {!! Form::model($message, ['route' => 'messages.store']) !!}","            ","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","                    ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","                ","                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}","        ","            {!! Form::close() !!}"],"id":12}],[{"start":{"row":7,"column":4},"end":{"row":8,"column":30},"action":"insert","lines":["  <div class=\"row\">","        <div class=\"col-xs-6\">"],"id":13}]]},"timestamp":1527749302462}