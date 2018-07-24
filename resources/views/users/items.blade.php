@if (count($favorites) > 0)
<div class="row">
        @foreach ($favorites as $key => $item)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ $item->img_path }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand,'keywords' => $item->items] ) }}" class="cp_btnitem">{{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                                  
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favoritepage_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
                 </div>
                 </div>
              
        @endforeach
    
</div>
{!! $favorites->render() !!}

@endif