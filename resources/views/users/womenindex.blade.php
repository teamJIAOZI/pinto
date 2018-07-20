@extends('layouts.app')

@section('content')
<?php $user = Auth::user(); ?>
    <p id="survey-ttl">親密度で絞り込む</p><br>
            
     {!! Form::open(['route' => 'users.womensearch','method' => 'get']) !!}
     
        <div class="radiobutton">
            <li><label>
                <input type="radio" name="answers" id="select1" value=5>
                <label for="select1">家族</label>
            </label>
            </li>
            <li><label>
                <input type="radio" name="answers" id="select2" value=4>
                <label for="select2">恋人</label>
            </label>
            </li>
            <li><label>
                <input type="radio" name="answers" id="select3" value=3>
                <label for="select3">親友</label>
            </label>
            </li>
            <li><label>
                <input type="radio" name="answers" id="select4" value=2>
                <label for="select4">友</label>
            </label>
            </li>
            <li><label>
                <input type="radio" name="answers" id="select5" value=1>
                <label for="select5">よっ友</label>
            </label></li>
        </div>
        <br><br><br><br>
    <div>   
    <input class="button" type="submit" value="絞り込み">
    </div>                       
    
    {!! Form::close() !!}
    {!! Form::open(['route' => 'users.menindex','method' => 'get']) !!}
    <input class="button" type="submit" value="絞り込み解除">
    {!! Form::close() !!}
    
    
    <!--アイテム一覧ページをinclude-->
    @include('users.index', ['user' => $user,'items' => $items])

@endsection


