{"filter":false,"title":"WelcomeController.php","tooltip":"/monolist/app/Http/Controllers/WelcomeController.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":19,"column":8},"end":{"row":19,"column":31},"action":"remove","lines":["return view('welcome');"],"id":2}],[{"start":{"row":19,"column":8},"end":{"row":22,"column":11},"action":"insert","lines":["$items = Item::orderBy('updated_at', 'desc')->paginate(20);","        return view('welcome', [","            'items' => $items,","        ]);"],"id":3}]]},"ace":{"folds":[],"scrolltop":320.8984375,"scrollleft":0,"selection":{"start":{"row":22,"column":11},"end":{"row":22,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":24,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529297703654,"hash":"88eb0cb0c52435392b5f4087fa5ac3cd5f51abef"}