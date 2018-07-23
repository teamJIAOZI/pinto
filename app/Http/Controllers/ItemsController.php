<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use \App\Item;

class ItemsController extends Controller
{

    public function create()
    {
        $keywords = \DB::table('pinto')->select('name' , 'story')->get();
        $items = [];
    
        foreach($keywords as $keyword){
            $gift = $keyword->name;
        if ($gift) {
            $client = new \RakutenRws_Client();
            $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
            $rws_response = $client->execute('IchibaItemSearch', [
                'keyword' => $gift,
                'imageFlag' => 1,
                'hits' => 1,
            ]);
        }
    
            // Creating "Item" instance to make it easy to handle.（not saving）
            foreach ($rws_response->getData()['Items'] as $rws_item) {
                $item = new Item();
                $item->code = $rws_item['Item']['itemCode'];
                $item->name = $gift;
                $item->story = $keyword->story;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->price = $rws_item['Item']['itemPrice'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }
        
        
        
        return view('items.create', [
            'keyword' => $keyword,
            'items' => $items,
        ]);
        
    }
       
        public function show($id)
    {
      $item = Item::find($id);
      $want_users = $item->want_users;
      $have_users = $item->have_users;
      return view('items.show', [
          'item' => $item,
          'want_users' => $want_users,
          'have_users' => $have_users,
      ]);
    }
}