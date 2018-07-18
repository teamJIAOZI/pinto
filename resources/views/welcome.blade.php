@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Pinto</h1>
                    <h2>ピントくる、とっておきのプレゼント</h2>
                
@endsection

@section('content')
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}さん</br></br>
        
        誰にあげますか</br>
        
        <a href="{{ route('users.loginwomenindex',['id' => $user->id] ) }}" class="cp_btnwomen">女性にあげる</a>
        
        <a href="{{ route('users.loginmenindex',['id' => $user->id] ) }}" class="cp_btnmen">男性にあげる</a>

        
        </br>
        
        男性人気ランキング
        
        <div class="row">
        @foreach ($items as $key => $item)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  {{ $key+1 }}位: {{ $item->count}} Favorite </br>
                                  {{ $item->items }}</br>相場:￥{{ $item->price }}
                                  @include('user_favorite.favorite_button', ['user' => $user])

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
                                      
                                       <div class="mask">
                                          <div class="caption">{{ $itemgirl->story }}</div>
                                       </div>
                                  </div>
                                  {{ $key+1 }}位: {{ $itemgirl->count}} Favorite </br>
                                  {{ $itemgirl->items }}</br>相場:￥{{ $itemgirl->price }}
                                  
                                  @include('user_favorite.favorite_button', ['user' => $user])
                                  
                            
                            
                               </li>
                           </ul>
                       </div>
                 </div>
                 </div>
              
        @endforeach
</div>
        
        
        
    @else

        </br>誰にあげますか</br>
        
        <a href="{{ route('users.womenindex') }}" class="cp_btnwomen">女性にあげる</a>
        
        <a href="{{ route('users.menindex') }}" class="cp_btnmen">男性にあげる</
        

    @endif
@endsection