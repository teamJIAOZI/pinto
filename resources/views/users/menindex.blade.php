@extends('layouts.app')

@section('content')
<?php $user = Auth::user(); ?>
<br><br><br><br>
    <p id="survey-ttl">親密度で絞り込む</p><br>
            
     {!! Form::open(['route' => 'users.mensearch','method' => 'get']) !!}
     
        <div class="radio02">
  <input type="radio" name="answers" class="radio02-input" id="radio02-01" value=5>
  <label for="radio02-01">家族</label>
  <input type="radio" name="answers" class="radio02-input" id="radio02-02" value=4> 
  <label for="radio02-02">恋人</label>
  <input type="radio" name="answers" class="radio02-input" id="radio02-03" value=3>
  <label for="radio02-03">親友</label>
  <input type="radio" name="answers" class="radio02-input" id="radio02-04" value=2>
  <label for="radio02-04">友達</label>
  <input type="radio" name="answers" class="radio02-input" id="radio02-05" value=1>
  <label for="radio02-05">よっ友</label>
</div>

<br>
    
    <div>    
    <input class="searchbtn" type="submit" value="絞り込み">
    </div>
    
    {!! Form::close() !!}
    {!! Form::open(['route' => 'users.menindex','method' => 'get']) !!}
    <input class="unsearchbtn" type="submit" value="絞り込み解除">
    {!! Form::close() !!}
    
        <div align="right"><a href="javascript:history.back()" class="square_btn">前のページに戻る</a>
        </div>    
        
    <br><br>
    
    <!--アイテム一覧ページをinclude-->
    @include('users.index', ['user' => $user,'items' => $items])

@endsection
