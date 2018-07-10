@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>あなたの気持ち、誰に届ける。</h1>
@endsection

@section('content')
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}さん</br>
        
        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-heart"></span>
            
            {!! link_to_route('users.loginwomenindex', '女性',['id' => $user->id]) !!}
        </button>
        <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-star"></span>
            {!! link_to_route('users.loginmenindex', '男性',['id' => $user->id]) !!}
        </button><br>
        
        男性人気ランキング
        @foreach ($items as $key => $item)
                
            @if (isset($item->count))
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
                                  {{ $key+1 }}位: {{ $item->count}} Favorite </br>
                                  {{ $item->items }}￥{{ $item->price }}</br>
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
               </div>
            @endif
        @endforeach
        
        女性人気ランキング
        @foreach ($itemgirls as $key => $itemgirl)
                
            @if (isset($itemgirl->count))
                <div class="row">
                       <div id = "nav" class="item">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ secure_asset("images/coffee.jpg") }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $itemgirl->story }}</div>
                                       </div>
                                  </div>
                                  {{ $key+1 }}位: {{ $itemgirl->count}} Favorite </br>
                                  {{ $itemgirl->items }}￥{{ $itemgirl->price }}</br>
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
               </div>
            @endif
        @endforeach
        
        
        


    </div>
    @else

        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-heart"></span>
            {!! link_to_route('users.womenindex', '女性') !!}
        </button>
        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-star"></span>
            {!! link_to_route('users.menindex', '男性') !!}
        </button>

        
        </button>
    </div>
    </div>
    @endif
@endsection