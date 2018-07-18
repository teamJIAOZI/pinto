@extends('layouts.app')

@section('content')
<?php $user = Auth::user(); ?>
    <p id="survey-ttl">親密度で絞り込む</p><br>
            
     {!! Form::open(['route' => 'users.mensearch','method' => 'get']) !!}
     
    <ol id="survey-list">
            <li><label>
            <input type="radio" name="answers"  value=5>
            <span class="survey-radio-btn"></span>
            <strong>家族</strong>
            </label>
            </li>
            <li><label>
            <input type="radio" name="answers"  value=4>
            <span class="survey-radio-btn"></span>
            <strong>恋人</strong>
            </label>
            </li>
            <li><label>
            <input type="radio" name="answers"  value=3>
            <span class="survey-radio-btn"></span>
            <strong>親友</strong>
            </label>
            </li>
            <li><label>
            <input type="radio" name="answers" value=2>
            <span class="survey-radio-btn"></span>
            <strong>友</strong>
            </label>
            </li>
            <li><label>
            <input type="radio" name="answers"  value=1>
            <span class="survey-radio-btn"></span>
            <strong>よっ友</strong>
            </label></li>
        </ol>
        
    <input class="button" type="submit" value="絞り込み">
                            
    
    {!! Form::close() !!}
    {!! Form::open(['route' => 'users.menindex','method' => 'get']) !!}
    {!! Form::submit('絞り込み解除', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
    
    
    
    
        
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
                                  {{ $item->items }}</br>相場:￥{{ $item->price }}
                                  
                                  
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

@endsection


