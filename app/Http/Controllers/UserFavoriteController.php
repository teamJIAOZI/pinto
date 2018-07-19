<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        
        $previous = parse_url(url()->previous());
        
        \Auth::user()->like($id);
        if ($request->pagenumber==null) {
            return redirect($previous['path'].'?page=1');
        }else{
        return redirect()->back();
            
        }
        
    }

    public function destroy(Request $request, $id)
    {
        $previous = parse_url(url()->previous());
        \Auth::user()->unlike($id);
        if ($request->pagenumber==null) {
            return redirect($previous['path'].'?page=1');
        }else{
        return redirect()->back();
        }
        
    }
    
    public function favoritestore(Request $request, $id)
    {
        
        
        \Auth::user()->like($id);
        
        return redirect()->back();
            
        
        
    }

    public function favoritedestroy(Request $request, $id)
    {
        
        \Auth::user()->unlike($id);
        
        return redirect()->back();
        
    }
    
     public function menstore(Request $request, $id)
    {
        $previous = parse_url(url()->previous());
       
        $previous1 =array_get($previous,'query');
       
        \Auth::user()->like($id);
        if ($previous1=='answers=1') {
            return redirect('mensearch?' . $previous1.'&page=1');
        }else{
        return redirect()->back();
            
        }
        
    }

    public function mendestroy(Request $request, $id)
    {
        
        $previous = parse_url(url()->previous());
        
         $previous1 =array_get($previous,'query');
       
        \Auth::user()->unlike($id);
        if ($previous1=='answers=1') {
            return redirect('mensearch?' . $previous1.'&page=1');
        }else{
        return redirect()->back();
            
        }
    }
    
    
    public function womenstore(Request $request, $id)
    {
        $previous = parse_url(url()->previous());
       
        $previous1 =array_get($previous,'query');
       
        \Auth::user()->like($id);
        if ($previous1=='answers=1') {
            return redirect('womensearch?' . $previous1.'&page=1');
        }else{
        return redirect()->back();
            
        }
        
    }

    public function womendestroy(Request $request, $id)
    {
        
        $previous = parse_url(url()->previous());
        
         $previous1 =array_get($previous,'query');
       
        \Auth::user()->unlike($id);
        if ($previous1=='answers=1') {
            return redirect('womensearch?' . $previous1.'&page=1');
        }else{
        return redirect()->back();
            
        }
    }
    
    
}