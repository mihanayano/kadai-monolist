{"filter":false,"title":"followers.blade.php","tooltip":"/microposts/resources/views/users/followers.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":19,"column":15},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":20,"column":0},"end":{"row":20,"column":15},"action":"insert","lines":["               "]}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"remove","lines":[" "],"id":3}],[{"start":{"row":21,"column":12},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":22,"column":0},"end":{"row":22,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":229},"action":"insert","lines":["<li role=\"presentation\" class=\"{{ Request::is('users/*/favorites') ? 'active' : '' }}\"><a href=\"{{ route('users.favorites', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>"],"id":5}],[{"start":{"row":21,"column":229},"end":{"row":21,"column":232},"action":"insert","lines":["   "],"id":6}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"remove","lines":[" "],"id":7},{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"remove","lines":[" "]},{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"remove","lines":[" "]},{"start":{"row":20,"column":8},"end":{"row":20,"column":12},"action":"remove","lines":["    "]},{"start":{"row":20,"column":4},"end":{"row":20,"column":8},"action":"remove","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":15},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":[" "],"id":8}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":15},"action":"insert","lines":["    "],"id":9}]]},"ace":{"folds":[],"scrolltop":199.4921875,"scrollleft":0,"selection":{"start":{"row":18,"column":25},"end":{"row":18,"column":25},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528961564507,"hash":"6010a7ad2e501ac766f8f74794e0dcddc9e83dc6"}