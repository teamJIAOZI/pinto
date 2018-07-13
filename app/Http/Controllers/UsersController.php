<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;



class UsersController extends Controller
{
     public function menindex()
    {
        $keywords = \DB::table('items')->select('id', 'items','story','price', 'item_brand')->where('gender', '1')->take(10)->get();
        $items = [];
     
        
        foreach($keywords as $keyword){
            $itemname = $keyword->items;
            $itembrand = $keyword->item_brand;
            $gift = $itembrand." ".$itemname;
            
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->brand = $keyword->item_brand;
                $item->price = $keyword->price;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
    // var_dump($rws_response);
    // exit;
        
        }

        return view('users.menindex', [
            'items' => $items,
        ]);
    }
    
    
    
     public function womenindex()
    {
        $keywords = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->take(10)->get();
        $items = [];
        
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }

        return view('users.womenindex', [
            'items' => $items,
        ]);
        
    }
    
     public function loginmenindex($id)
    {
         $keywords = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '1')->take(10)->get();
         $items = [];
         $user = User::find($id);
        
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }

        return view('users.menindex', [
            'items' => $items,
            'user' => $user,
        ]);
    }
    
     public function loginwomenindex($id)
    {
         $keywords = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->take(10)->get();
        $items = [];
         $user = User::find($id);
         
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }
         

        return view('users.womenindex', [
            'items' => $items,
            'user' => $user,
        ]);
    }
    
    public function favorites($id)
    {
        
        
        $user = User::find($id);
        $keywords = $user->liking()->paginate(10);
        $favorites = [];
        
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $favorites[] = $item;
            }
        }
        
        $data = [
            'user' => $user,
            'favorites' => $favorites,
            
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
    }
    
    
    public function mensearch(Request $request)
    {
    $value = $request->answers;   
    
        $keywords = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '1')->where('kind', $value)->take(6)->get();
        $items = [];
        
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }
        
         
        return view('users.menindex', [
            'items' => $items, 
            
            ]);
    }
    
    public function womensearch(Request $request)
    {
    $value = $request->answers;   
    
        $keywords = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->where('kind', $value)->take(6)->get();
        $items = [];
        
        foreach($keywords as $keyword){
            $gift = $keyword->item_brand;
            
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
                $item->id = $keyword->id;
                $item->name = $keyword->items;
                $item->story = $keyword->story;
                $item->price = $keyword->price;
                $item->brand = $keyword->item_brand;
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }



        return view('users.womenindex', [
            'items' => $items,
            ]);
    }
    
}