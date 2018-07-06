<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class UsersController extends Controller
{
     public function menindex()
    {
        //$item =  Item::where('gender', 1);
         $item = \DB::table('items')->where('gender', '1')->take(10)->get();

        return view('users.menindex', [
            'items' => $item,
            
        ]);
    }
    
     public function womenindex()
    {
        

        return view('users.womenindex', [
            
        ]);
    }
}
