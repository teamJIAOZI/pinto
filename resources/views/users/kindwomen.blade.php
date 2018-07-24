<itemsearch>        
        @foreach ($items as $key => $item)
        <div class="animal">
        <div class = "item">
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