<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function menindex()
    {
        

        return view('users.menindex', [
            
        ]);
    }
    
     public function womenindex()
    {
        

        return view('users.womenindex', [
            
        ]);
    }
}
