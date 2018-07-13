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
        
        <div class="row">
        @foreach ($items as $key => $item)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ $item->image_url }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  {{ $key+1 }}位: {{ $item->count}} Favorite </br>
                                  {{ $item->name }}</br>￥{{ $item->price }}
                                  
                                  
                            <!--@if (Auth::check())-->
                            <!--      @include('user_favorite.favorite_button', ['user' => $user])-->
                            <!--@endif-->
                            
                               </li>
                           </ul>
                       </div>
                 </div>
                 </div>
              
        @endforeach
</div>
        
        
        
        
        女性人気ランキング
        <div class="row">
        @foreach ($itemgirls as $key => $itemgirl)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ $itemgirl->image_url }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $itemgirl->story }}</div>
                                       </div>
                                  </div>
                                  {{ $key+1 }}位: {{ $itemgirl->count}} Favorite </br>
                                  {{ $itemgirl->name }}</br>￥{{ $itemgirl->price }}
                                  
                                  
                            <!--@if (Auth::check())-->
                            <!--      @include('user_favorite.favorite_button', ['user' => $user])-->
                            <!--@endif-->
                            
                               </li>
                           </ul>
                       </div>
                 </div>
                 </div>
              
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