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
        
        
//        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '1')->inRandomOrder($number)->get();
        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '1')->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }

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
        
        
        // $items = \DB::table('items')->select('id','items','story','price', 'item_brand','img_path')->where('gender', '2')->inRandomOrder($number)->get();
       $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '2')->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }
       
       
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
        
        // $items = \DB::table('items')->select('id','items','story','price', 'item_brand','img_path')->where('gender', '1')->inRandomOrder($number)->get();

        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '1')->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }



         $user = User::find($id);
        
        
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
        
        //  $items = \DB::table('items')->select('id','items','story','price', 'item_brand','img_path')->where('gender', '2')->inRandomOrder($number)->get();
        
        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '2')->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }
        
         $user = User::find($id);
         
        
         

        return view('users.womenindex', [
            'items' => $items,
            'user' => $user,
        ]);
    }
    
    // 男性用お気に入り一覧
    public function menfavorites(Request $request, $id)
    {
        
        $user = User::find($id);
        $favorites = $user->liking()->where('gender', '1')->paginate(12);
        
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
        $favorites = $user->liking()->where('gender', '2')->paginate(12);
       
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
        $page =array_get($request,'page');

        if($page==null) {
            
            session(['mensearchkey' => $number]);
        } else {
            $number = session('mensearchkey');
        }
       
       
        $value = $request->answers; 
       
    
        // $items = \DB::table('items')->select('id','items','story','price', 'item_brand','img_path')->where('gender', '1')->where('kind', $value)->inRandomOrder($number)->get();
        
        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '1')->where('kind', $value)->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }
        

        return view('users.kindmenindex', [
            'items' => $items, 
            
            ]);
       
            
            
    }
    // 女性ページでの親密度検索
    public function womensearch(Request $request)
    {
        $number = rand();
        
        $page =array_get($request,'page');
        
        if($page==null) {
            
            session(['womensearchkey' => $number]);
        } else {
            $number = session('womensearchkey');
        }
        
        $value = $request->answers;
        
    
        // $items = \DB::table('items')->select('id','items','story','price', 'item_brand','img_path')->where('gender', '2')->where('kind', $value)->inRandomOrder($number)->get();
        $items = \DB::table('items')->select('id', 'items','story','price', 'item_brand','img_path')->where('gender', '2')->where('kind', $value)->get();
        
        srand($number);
        for($i=0;$i<count($items);$i++) {
            $j = rand(0,count($items)-1);
            $t = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $t;
        }
        
        return view('users.kindwomenindex', [
            'items' => $items,
            ]);
    
    }
    
     public function searchindex()
    {
        $keyword = request()->keyword;
        $keywords = request()->keywords;
        $items = [];
        if ($keyword) {
            $client = new \RakutenRws_Client();
            $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));

            $rws_response = $client->execute('IchibaItemSearch', [
                'keyword' => $keyword,
                'imageFlag' => 1,
                'hits' => 20,
            ]);

            // Creating "Item" instance to make it easy to handle.（not saving）
            foreach ($rws_response->getData()['Items'] as $rws_item) {
                $item = new Item();
                $item->code = $rws_item['Item']['itemCode'];
                $item->name = $rws_item['Item']['itemName'];
                $item->url = $rws_item['Item']['itemUrl'];
                $item->image_url = str_replace('?_ex=128x128', '', $rws_item['Item']['mediumImageUrls'][0]['imageUrl']);
                $items[] = $item;
            }
        }
        return view('users.searchindex', [
            'keyword' => $keyword,
            'keywords' => $keywords,
            'items' => $items,
            
        ]);
    } 
    
    
    
}