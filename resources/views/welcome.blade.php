@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Pinto</h1>
                    <h2>ピントくる、とっておきのプレゼント</h2>
                
@endsection

@section('buttons')
    @if (Auth::check())
        <h4><?php $user = Auth::user(); ?>
        {{ $user->name }}さん</h4>
        
        <h5>誰にあげますか？</h5>
        
        <a href="{{ route('users.loginwomenindex',['id' => $user->id] ) }}" class="cp_btnwomen">女性にあげる</a>
        <a href="{{ route('users.loginmenindex',['id' => $user->id] ) }}" class="cp_btnmen">男性にあげる</a>
       
        
    @else

        <font></br><h5>誰にあげますか？</h5></br>
        
        <a href="{{ route('users.womenindex') }}" class="cp_btnwomen">女性にあげる</a>
        <a href="{{ route('users.menindex') }}" class="cp_btnmen">男性にあげる</a>
        
        </font>
        
    @endif
                
@endsection



@section('content')
@if (Auth::check())

<rankingpart>
        <titlefont><h3>男性人気ランキング</h3></titlefont>
        
<div class="row">
    <itemsearch> 
        @foreach ($items as $key => $item)
        <div class="animal">
        <div class = "item" id="xx_{{$item->id}}">
            <div class="panel panel-warning">
                <div id = "nav">
                    <div class="sample1">
                        <div class="panel-heading text-center">
                            <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" >
                                       <img src="{{ $item->img_path }}" alt="">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                            </a>
                        </div>
                    </div>

                        <div class="panel-body1">
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" class="cp_btnitem">{{ $key+1 }}位: {{ $item->count}} Favorite </br>
                                  {{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                                  @include('user_favorite.favorite_button', ['user' => $user, 'item' => $item])
                       </div></font>
                    </div>
            </div>
            </div>
        </div>
        @endforeach
    </itemsearch> 
</div>
        

        <titlefont><h3>女性人気ランキング</h3></titlefont>
<div class="row">
<itemsearch>
        @foreach ($itemgirls as $key => $itemgirl)
        <div class="animal">
        <div class = "item" id="xx_{{$itemgirl->id}}">
            <div class="panel panel-warning">
                <div id = "nav">
                    <div class="sample1">
                        <div class="panel-heading text-center">
                            <a href="{{ route('users.searchindex', ['keyword' => $itemgirl->item_brand,'keywords' => $itemgirl->items] ) }}" >
                                       <img src="{{ $itemgirl->img_path }}" alt="">
                                       <div class="mask">
                                          <div class="caption">{{ $itemgirl->story }}</div>
                                       </div>
                            </a>
                        </div>
                    </div>

                        <div class="panel-body1">
                            <p3>{{ $key+1 }}位: {{ $itemgirl->count}} Favorite </p3>
                                  <a href="{{ route('users.searchindex', ['keyword' => $itemgirl->item_brand,'keywords' => $itemgirl->items] ) }}" class="cp_btnitem">
                                  {{ $itemgirl->items }}</br>相場:￥{{ $itemgirl->price }}</a>
                                  
                                  @include('user_favorite.favorite_button', ['user' => $user, 'item' => $itemgirl])
                       </div></font>
                    </div>
            </div>
            </div>
        </div>         
                 
                 
        @endforeach
</itemsearch>
</div>

</rankingpart>
@else
    
@section('about')
    <main>

        <div class="division">
        <div class="about">
            <h725>Pintoとは</h725><br>
            <p525 align="center">プレゼントをあげる相手との関係性から<br>
                ぴったりなものを提案します。<br>
                家族に、恋人に、友人に。<br>
                いつも伝えられない感謝の気持ちを伝えてみませんか。<br><br>
                
                同期へのインタビューによる約300のデータ、<br>
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