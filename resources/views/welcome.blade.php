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
        <font><h2><?php $user = Auth::user(); ?>
        {{ $user->name }}さん</h2></br></br>
        
        <p2>誰にあげますか</br></p2></font>
        
        <a href="{{ route('users.loginwomenindex',['id' => $user->id] ) }}" class="cp_btnwomen">女性にあげる</a>
        <a href="{{ route('users.loginmenindex',['id' => $user->id] ) }}" class="cp_btnmen">男性にあげる</a>
       
        </br>
        
        <titlefont><h3>男性人気ランキング</h3></titlefont>
        
        <div class="row">
        @foreach ($items as $key => $item)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav"><font>
                           <ul>
                               <li>
                                  <div class="sample1">
                                      <img src="{{ $item->img_path }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" class="cp_btnwomen">{{ $key+1 }}位: {{ $item->count}} Favorite </br>
                                  {{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                                  
                                  @include('user_favorite.favorite_button', ['user' => $user, 'item' => $item])

                               </li>
                           </ul>
                       </div></font>
                 </div>
                 </div>
        @endforeach
</div>
        

        <titlefont><h3>女性人気ランキング</h3></titlefont>
        <div class="row">
        @foreach ($itemgirls as $key => $itemgirl)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav"><font>
                           <ul>
                               <li>
                                  <div class="sample1">
                                     <img src="{{ $itemgirl->img_path }}" alt="story"> 
                                       <div class="mask">
                                          <div class="caption">{{ $itemgirl->story }}</div>
                                       </div>
                                  </div>
                                  <a href="{{ route('users.searchindex', ['keyword' => $itemgirl->item_brand,'keywords' => $itemgirl->items] ) }}" class="cp_btnwomen">{{ $key+1 }}位: {{ $itemgirl->count}} Favorite </br>
                                  {{ $itemgirl->items }}</br>相場:￥{{ $itemgirl->price }}</a>
                                  
                                  @include('user_favorite.favorite_button', ['user' => $user, 'item' => $itemgirl])

                               </li>
                           </ul>
                       </div></font>
                 </div>
                 </div>
        @endforeach
</div>
        
        
        
    @else

        <font></br>誰にあげますか</br>
        
        <a href="{{ route('users.womenindex') }}" class="cp_btnwomen">女性にあげる</a>
        
        <a href="{{ route('users.menindex') }}" class="cp_btnmen">男性にあげる</a>
        
        </font>
        
        @section('about')
    <main>

        <div class="division">
        <div class="about">
            <h725>Pintoとは</h725><br>
            <p525 align="center">Pintoでは、プレゼントをあげる相手との関係性から<br>
                ぴったりなものを提案します。<br>
                家族に、恋人に、友人に。<br>
                いつも伝えられない感謝の気持ちを伝えてみませんか。<br><br>
                
                Pintoでは、同期へのインタビューによる約300のデータ、<br>
                生の声を使用しています。</p525>
        </div>
        </div>
          
        <div class="division">
            <div class="movingimage">
                <div class="album">
                    <img class="img1"src="images/whiteday.jpg" alt="1">
                    <img class="img2" src="images/happybirthday.jpg" alt="2">
                    <img class="img3"src="images/present.jpg" alt="3">
                    <img class="img4"src="images/xmas.jpg" alt="4">
                </div>
            </div>
        </div>
     
    </main>

    @endsection
    
    
    
    
    @endif
    

        
        


@endsection