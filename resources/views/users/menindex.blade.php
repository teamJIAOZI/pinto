@extends('layouts.app')

@section('content')
     
        
        @foreach ($items as $item)
            <div class="row">
                       <div id = "nav" class="item">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ secure_asset("images/coffee.jpg") }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  {{ $item->items }}￥{{ $item->price }}</br>
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
               </div>
        @endforeach
          

@endsection


