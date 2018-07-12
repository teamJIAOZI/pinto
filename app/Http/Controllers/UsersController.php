<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;



class UsersController extends Controller
{
     public function menindex()
    {
         $item = \DB::table('items')->where('gender', '1')->take(10)->get();
         
         

        return view('users.menindex', [
            'items' => $item,
            
            
            
        ]);
    }
    
     public function womenindex()
    {
         $item = \DB::table('items')->where('gender', '2')->take(10)->get();
        

        return view('users.womenindex', [
            'items' => $item,
            
            
        ]);
        
    }
    
     public function loginmenindex($id)
    {
         $item = \DB::table('items')->where('gender', '1')->take(10)->get();
         $user = User::find($id);
         

        return view('users.menindex', [
            'items' => $item,
            'user' => $user,
            
            
        ]);
    }
    
     public function loginwomenindex($id)
    {
         $item = \DB::table('items')->where('gender', '2')->take(10)->get();
         $user = User::find($id);
         

        return view('users.menindex', [
            'items' => $item,
            'user' => $user,
            
            
        ]);
    }
    
    public function favorites($id)
    {
        
        $user = User::find($id);
        $favorites = $user->liking()->paginate(10);
        
        
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
    
         $item = \DB::table('items')->where('gender', '1')->where('kind', $value)->take(10)->get();
         
        return view('users.menindex', [
            'items' => $item, ]);
    }
    
    public function womensearch(Request $request)
    {
    $value = $request->answers;   
    
         $item = \DB::table('items')->where('gender', '2')->where('kind', $value)->take(10)->get();
         
        return view('users.womenindex', [
            'items' => $item, ]);
    }
}
