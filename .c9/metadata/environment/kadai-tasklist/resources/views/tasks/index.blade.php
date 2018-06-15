{"filter":false,"title":"index.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/index.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":45},"end":{"row":19,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"9d0d7f3f1932a0318f9dd44d6d22cf05ffd24bfb","undoManager":{"mark":36,"position":36,"stack":[[{"start":{"row":8,"column":27},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":4},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"insert","lines":["    "],"id":48}],[{"start":{"row":10,"column":8},"end":{"row":17,"column":13},"action":"remove","lines":["","        <ul>","            @foreach ($tasks as $task)","                 <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} >{{ $task->content }}</li>","","            @endforeach","           ","        </ul>"],"id":49},{"start":{"row":10,"column":8},"end":{"row":27,"column":16},"action":"insert","lines":[" <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                    <tr>","                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>","                        <td>{{ $message->title }}</td>","                        <td>{{ $message->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>"]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"remove","lines":[" "],"id":50},{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"remove","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":9,"column":4},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"insert","lines":["    "],"id":51}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":34},"action":"remove","lines":["message"],"id":52},{"start":{"row":18,"column":27},"end":{"row":18,"column":31},"action":"insert","lines":["task"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":44},"action":"remove","lines":["message"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":41},"action":"insert","lines":["task"]},{"start":{"row":20,"column":47},"end":{"row":20,"column":54},"action":"remove","lines":["message"]},{"start":{"row":20,"column":47},"end":{"row":20,"column":51},"action":"insert","lines":["task"]},{"start":{"row":20,"column":61},"end":{"row":20,"column":68},"action":"remove","lines":["message"]},{"start":{"row":20,"column":61},"end":{"row":20,"column":65},"action":"insert","lines":["task"]},{"start":{"row":20,"column":81},"end":{"row":20,"column":88},"action":"remove","lines":["message"]},{"start":{"row":20,"column":81},"end":{"row":20,"column":85},"action":"insert","lines":["task"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":39},"action":"remove","lines":["message"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":36},"action":"insert","lines":["task"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":39},"action":"remove","lines":["message"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":36},"action":"insert","lines":["task"]}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["ル"],"id":53},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["ト"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["イ"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["タ"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["s"],"id":54},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["t"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["a"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["t"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["u"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["ジ"],"id":55},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["ー"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["セ"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["ッ"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["メ"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":[">"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":29},"action":"insert","lines":["></th>"],"id":56}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":[">"],"id":57},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["h"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["t"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["/"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["<"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["c"],"id":58},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["o"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["n"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["t"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["e"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["t"],"id":59}],[{"start":{"row":28,"column":49},"end":{"row":28,"column":88},"action":"insert","lines":[", null, ['class' => 'btn btn-primary'])"],"id":62}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"remove","lines":[")"],"id":63}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["("],"id":64}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["9"],"id":65}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["9"],"id":66}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["("],"id":67}],[{"start":{"row":0,"column":0},"end":{"row":29,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","<!-- Write content for each page here -->",""," <h1>タスク一覧</h1>","","    @if (count($tasks) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>status</th>","                    <th>content</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($tasks as $task)","                    <tr>","                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>","                        <td>{{ $task->title }}</td>","                        <td>{{ $task->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif"," {!! link_to_route('tasks.create', '新規メッセージの投稿' , null, ['class' => 'btn btn-primary'])!!}","@endsection"],"id":68}],[{"start":{"row":0,"column":0},"end":{"row":30,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>タスク一覧</h1>","","    @if (count($tasks) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>ステータス</th>","                    <th>コンテント</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($tasks as $task)","                    <tr>","                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>","                        <td>{{ $task->status }}</td>","                        <td>{{ $task->content }}</td>","                    </tr>","                @endforeach","            </tbody>","        </table>","    @endif","    ","    {!! link_to_route('tasks.create', '新規課題タスクの作成',null,[\"class\"=>\"btn btn-primary\"]) !!}","","","@endsection"],"id":69}],[{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"remove","lines":["成"],"id":70},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"remove","lines":["作"]},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"remove","lines":["の"]},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"remove","lines":["ク"]},{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"remove","lines":["ス"]}],[{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"remove","lines":["タ"],"id":71},{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"remove","lines":["題"]},{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"remove","lines":["課"]},{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"remove","lines":["規"]},{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"remove","lines":["新"]}],[{"start":{"row":27,"column":39},"end":{"row":27,"column":40},"action":"insert","lines":["c"],"id":72},{"start":{"row":27,"column":40},"end":{"row":27,"column":41},"action":"insert","lines":["r"]},{"start":{"row":27,"column":41},"end":{"row":27,"column":42},"action":"insert","lines":["e"]},{"start":{"row":27,"column":42},"end":{"row":27,"column":43},"action":"insert","lines":["a"]},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["t"]},{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":["ス"],"id":73},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"remove","lines":["タ"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["ー"]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":["テ"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["ス"]}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"remove","lines":["ト"],"id":74},{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"remove","lines":["ン"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"remove","lines":["テ"]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"remove","lines":["ン"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"remove","lines":["コ"]}],[{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["s"],"id":75},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["t"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"insert","lines":["a"]},{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":["t"]},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["u"]},{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["c"],"id":76},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["o"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["n"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["t"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["e"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["n"]},{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":[" "],"id":77},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"insert","lines":["n"]},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["e"]},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["w"]}],[{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":[" "],"id":78},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":["t"]},{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":["a"]},{"start":{"row":27,"column":52},"end":{"row":27,"column":53},"action":"insert","lines":["s"]},{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"insert","lines":["k"]}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"remove","lines":["t"],"id":79},{"start":{"row":20,"column":43},"end":{"row":20,"column":44},"action":"remove","lines":["n"]},{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"remove","lines":["e"]},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"remove","lines":["t"]},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"remove","lines":["n"]},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"remove","lines":["o"]},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"remove","lines":["c"]}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["s"],"id":80},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["t"]},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["a"]},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["t"]},{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":["u"]},{"start":{"row":20,"column":43},"end":{"row":20,"column":44},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["s"],"id":81},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"remove","lines":["u"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["t"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":["a"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["t"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["s"]}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["t"],"id":82},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["a"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["s"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["k"]}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["k"],"id":83},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":["s"]}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":[" "],"id":84},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["a"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["t"]}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["c"],"id":85},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["o"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["n"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["t"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["e"]},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["n"]},{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["t"]}]]},"timestamp":1528431796056}