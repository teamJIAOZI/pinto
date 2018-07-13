@extends('layouts.app')

@section('content')
    <p id="survey-ttl">親密度で絞り込む<br>
            
     {!! Form::open(['route' => 'users.womensearch','method' => 'get']) !!}
     
    <ol id="survey-list">
            <li><label>
            <input type="radio" name="answers"  value=1>
            <span class="survey-radio-btn"></span>
            <strong>家族</strong>
            </label>
            </li><li>
            <label>
            <input type="radio" name="answers"  value=2>
            <span class="survey-radio-btn"></span>
            <strong>恋人</strong>
            </label>
            </li><li>
            <label>
            <input type="radio" name="answers"  value=3>
            <span class="survey-radio-btn"></span>
            <strong>親友</strong>
            </label>
            </li><li>
            <label>
            <input type="radio" name="answers" value=4>
            <span class="survey-radio-btn"></span>
            <strong>友</strong>
            </label>
            </li><li>
            <label>
            <input type="radio" name="answers"  value=5>
            <span class="survey-radio-btn"></span>
            <strong>よっ友</strong>
            </label></li>
        </ol>
                            
    {!! Form::submit('絞り込む', ['class' => 'btn btn-danger btn-xs']) !!}    
                        
    {!! Form::close() !!}
    {!! Form::open(['route' => 'users.womenindex','method' => 'get']) !!}
    {!! Form::submit('絞り込み解除', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
    
    
    
    
     
        
        @foreach ($items as $key => $item)
        
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                       <div id = "nav" class="item">
                           <ul>
                               <li>
                                  <div class="sample1">
                                       <img src="{{ $item->image_url }}" alt="story">
                                       <div class="mask">
                                          <div class="caption">{{ $item->story }}</div>
                                       </div>
                                  </div>
                                  {{ $item->name }}</br>￥{{ $item->price }}
                                  {{ $item->story }}
                                  
                                  
                            @if (Auth::check())
                                  @include('user_favorite.favorite_button', ['user' => $user])
                            @endif
                            
                               </li>
                           </ul>
                       </div>
               </div>
        @endforeach
          

@endsection


