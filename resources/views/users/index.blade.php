<itemsearch>        
        @foreach ($items as $key => $item)
        <div class="animal">
        <div class = "item" id="xx_{{$item->id}}">
            <div class="panel panel-warning">
                <div id = "nav">
                    <div class="sample1">
                        <div class="panel-heading text-center">
                                       <img src="{{ $item->img_path }}" alt="">
                                       <!--<div class="mask">-->
                                       <!--   <div class="caption">{{ $item->story }}</div>-->
                                       <!--</div>-->
                                       </div>
                                  </div>
                                  <div class="panel-body1">
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" class="cp_btnitem">{{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                        </div>
                    </div>
            </div>
        </div>
        </div>  
        @endforeach
</itemsearch>


<script>


window.onload = function() {
    
var hoge = setInterval(function() {
//$("html,body").animate({scrollTop:$('#xx_{{$item->id}}').offset().top});
    clearInterval(hoge);
  console.log('onload 1');
    console.log("終わり");

}, 500);

/*
    var element = document.getElementById('xx_148');
    console.log(element);
    // 上端に来るようにスクロールさせたい
//    element.scrollIntoView()
    element.scrollIntoView(false);
  */  
}
</script>
