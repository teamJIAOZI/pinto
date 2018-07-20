<div class="row">
        @foreach ($items as $key => $item)
        <div class = "item" id="xx_{{$item->id}}">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                      
                                       <img src="{{ $item->img_path }}" alt="">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                
                                  
                                  
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" class="cp_btnwomen">{{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                                  
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
                 </div>
                 </div>
              
        @endforeach
</div>
<script>
window.onload = function() {
var huga = 0;
var hoge = setInterval(function() {
    console.log(huga);
    huga++;
    //終了条件
    if (huga == 10) {
    clearInterval(hoge);
  console.log('onload 1');
  var offset = $('#xx_148').offset() || {top: 0, left: 0};
//  console.log(offset);
$(window).scrollTop(offset.top);

    console.log("終わり");

    }
}, 1000);

/*
    var element = document.getElementById('xx_148');
    console.log(element);
    // 上端に来るようにスクロールさせたい
//    element.scrollIntoView()
    element.scrollIntoView(false);
  */  
}
</script>
