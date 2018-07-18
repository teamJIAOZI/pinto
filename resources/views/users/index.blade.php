<div class="row">
        @foreach ($items as $key => $item)
        <div class = "item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       
                                       <div class="mask">
                                          <!--<div class="caption">{{ $item->story }}</div>-->
                                       </div>
                                  </div>
                                
                                  <!--{{ $item->items }}</br>相場:￥{{ $item->price }}-->
                                  
                                  <a href="{{ route('users.searchindex', ['keyword' => $item->item_brand] ) }}" class="cp_btnwomen">{{ $item->items }}</br>相場:￥{{ $item->price }}</a>
                                  
                                  
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
{!! $items->render() !!}