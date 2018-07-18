<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UsersController extends Controller
{   
    // ログイン前の男性向けプレゼント一覧ページへのfunc
     public function menindex(Request $request)
    {
        
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['menindexkey' => $number]);
        } else {
            $number = session('menindexkey');
        }
        
        
        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand')->where('gender', '1')->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        // $items = [];
     
        
        // foreach($keywords as $keyword){
        //     $itemname = $keyword->items;
        //     $itembrand = $keyword->item_brand;
        //     $gift = $itembrand." ".$itemname;
            
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        //     foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->brand = $keyword->item_brand;
        //         $item->price = $keyword->price;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
    
        
        // }

        return view('users.menindex', [
            'items' => $items,
        ]);
    }
    
    
    // ログイン前の女性向けプレゼント一覧ページへのfunc
     public function womenindex(Request $request)
    {
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['womenindexkey' => $number]);
        } else {
            $number = session('womenindexkey');
        }
        
        
        $items = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        // $items = [];
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        //     foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
        // }

        return view('users.womenindex', [
            'items' => $items,
        ]);
        
    }
    
    // ログイン後の男性向けプレゼント一覧ページへのfunc
     public function loginmenindex(Request $request, $id)
    {
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['loginmenindexkey' => $number]);
        } else {
            $number = session('loginmenindexkey');
        }
        
         $items = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '1')->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        //  $items = [];
         $user = User::find($id);
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        //     foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
        // }

        return view('users.menindex', [
            'items' => $items,
            'user' => $user,
        ]);
    }
    
    // ログイン後の女性向けプレゼント一覧ページへのfunc
     public function loginwomenindex(Request $request, $id)
    {
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['loginwomenindexkey' => $number]);
        } else {
            $number = session('loginwomenindexkey');
        }
        
         $items = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        //  $items = [];
         $user = User::find($id);
         
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
        // }
         

        return view('users.womenindex', [
            'items' => $items,
            'user' => $user,
        ]);
    }
    
    // 男性用お気に入り一覧
    public function menfavorites(Request $request, $id)
    {
        
        $user = User::find($id);
        $favorites = $user->liking()->where('gender', '1')->paginate(5);
        // $favorites = [];
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $favorites[] = $item;
        //     }
        // }
        
       

        // // Get current page form url e.x. &page=1
        // $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // // Create a new Laravel collection from the array data
        // $itemCollection = collect($favorites);
 
        // // Define how many items we want to be visible in each page
        // $perPage = 4;
 
        // // Slice the collection to get the items to display in current page
        // $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
 
        // // Create our paginator and pass it to the view
        // $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
 
        // // set url path for generted links
        // $paginatedItems->setPath($request->url());
 
        $data = [
            'user' => $user,
            'favorites' => $favorites,  
        ];

        $data += $this->counts($user);

        return view('users.menfavorites', $data);
    }
    
    // 女性用お気に入り一覧
    public function womenfavorites($id)
    {
        
        
        $user = User::find($id);
        $favorites = $user->liking()->where('gender', '2')->paginate(5);
        // $favorites = [];
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $favorites[] = $item;
        //     }
        // }
        
        $data = [
            'user' => $user,
            'favorites' => $favorites,
            
        ];

        $data += $this->counts($user);

        return view('users.womenfavorites', $data);
    }
    
    // 男性ページでの親密度検索
    public function mensearch(Request $request)
    {
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['mensearchkey' => $number]);
        } else {
            $number = session('mensearchkey');
        }
        
        $value = $request->answers;   
    
        $items = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '1')->where('kind', $value)->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        // $items = [];
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
        // }
        
         
        return view('users.menindex', [
            'items' => $items, 
            
            ]);
    }
    // 女性ページでの親密度検索
    public function womensearch(Request $request)
    {
        $number = rand();
        
        if(empty($request->all())) {
            
            session(['womensearchkey' => $number]);
        } else {
            $number = session('womensearchkey');
        }
        
        $value = $request->answers;   
    
        $items = \DB::table('items')->select('id','items','story','price', 'item_brand')->where('gender', '2')->where('kind', $value)->orderBy(\DB::raw('RAND('.$number.')'))->paginate(5);
        // $items = [];
        
        // foreach($keywords as $keyword){
        //     $gift = $keyword->item_brand;
            
        // if ($gift) {
        //     $client = new \RakutenRws_Client();
        //     $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));
        //     $rws_response = $client->execute('IchibaItemSearch', [
        //         'keyword' => $gift,
        //         'imageFlag' => 1,
        //         'hits' => 1,
        //     ]);
        // }
    
        //     // Creating "Item" instance to make it easy to handle.（not saving）
        // foreach ($rws_response->getData()['Items'] as $rws_item) {
        //         $item = new Item();
        //         $item->code = $rws_item['Item']['itemCode'];
        //         $item->id = $keyword->id;
        //         $item->name = $keyword->items;
        //         $item->story = $keyword->story;
        //         $item->price = $keyword->price;
        //         $item->brand = $keyword->item_brand;
        //         $item->url = $rws_item['Item']['itemUrl'];
        //         $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
        //         $items[] = $item;
        //     }
        // }



        return view('users.womenindex', [
            'items' => $items,
            ]);
    }
    
}