{"filter":false,"title":"show.blade.php","tooltip":"/monolist/resources/views/items/show.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":47,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <div class=\"col-md-3 col-sm-6 col-xs-12 col-md-offset-3\">","            <div class=\"item\">","                <div class=\"panel panel-default\">","                    <div class=\"panel-heading text-center\">","                        <img src=\"{{ $item->image_url }}\" alt=\"\">","                    </div>","                    <div class=\"panel-body\">","                        <p class=\"item-title\">{{ $item->name }}</p>","                        <div class=\"buttons text-center\">","                            @if (Auth::check())","                                @include('items.want_button', ['item' => $item])","                            @endif","                        </div>","                    </div>","                </div>","            </div>","        </div>","","        <div class=\"col-md-3 col-sm-6 col-xs-12\">","            <div class=\"want-users\">","                <div class=\"panel panel-default\">","                    <div class=\"panel-heading text-center\">","                        Wantしたユーザ","                    </div>","                    <div class=\"panel-body\">","                        @foreach ($want_users as $user)","                            <a href=\"{{ route('users.show', $user->id) }}\">{{ $user->name }}</a>","                        @endforeach","                    </div>","                </div>","            </div>","            <div class=\"have-users\">","                <div class=\"panel panel-default\">","                    <div class=\"panel-heading text-center\">","                        Haveしたユーザ","                    </div>","                    <div class=\"panel-body\">","                    </div>","                </div>","            </div>","            <p class=\"text-center\"><a href=\"{{ $item->url }}\" target=\"_blank\">楽天詳細ページへ</a></p>","        </div>","    </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":697.9765625,"scrollleft":0,"selection":{"start":{"row":26,"column":25},"end":{"row":26,"column":25},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529298379018,"hash":"79dd30255de9f4b624263583e6c7436c5f370598"}