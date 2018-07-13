@if (count($favorites) > 0)



<div class="row">
        @foreach ($favorites as $key => $item)
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
                                  {{ $item->name }}</br>￥{{ $item->price }}
                                  
                                  
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


@endif