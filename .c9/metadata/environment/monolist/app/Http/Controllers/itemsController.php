{"filter":false,"title":"itemsController.php","tooltip":"/monolist/app/Http/Controllers/itemsController.php","undoManager":{"mark":1,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":3},"action":"insert","lines":["use \\App\\Item;","","  class ItemsController extends Controller","  {","","    public function create()","    {","        $keyword = request()->keyword;","        $items = [];","        if ($keyword) {","            $client = new \\RakutenRws_Client();","            $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));","","            $rws_response = $client->execute('IchibaItemSearch', [","                'keyword' => $keyword,","                'imageFlag' => 1,","                'hits' => 20,","            ]);","","            // Creating \"Item\" instance to make it easy to handle.（not saving）","            foreach ($rws_response->getData()['Items'] as $rws_item) {","                $item = new Item();","                $item->code = $rws_item['Item']['itemCode'];","                $item->name = $rws_item['Item']['itemName'];","                $item->url = $rws_item['Item']['itemUrl'];","                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);","                $items[] = $item;","            }","        }","","        return view('items.create', [","            'keyword' => $keyword,","            'items' => $items,","        ]);","    }","  }"],"id":1}],[{"start":{"row":11,"column":43},"end":{"row":11,"column":65},"action":"remove","lines":["RAKUTEN_APPLICATION_ID"],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":13},"end":{"row":5,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529292765143,"hash":"c3be13d5f1ae735ae91c62bcf3dc11949e1d550c"}