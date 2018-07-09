@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>あなたの気持ち、誰に届ける。</h1>
@endsection

@section('content')
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}さん</br>
        
        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-heart"></span>
            
            {!! link_to_route('users.loginwomenindex', '女性',['id' => $user->id]) !!}
        </button>
        <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-star"></span>
            {!! link_to_route('users.loginmenindex', '男性',['id' => $user->id]) !!}
        
        </button>


    </div>
    @else

        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-heart"></span>
            {!! link_to_route('users.womenindex', '女性') !!}
        </button>
        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-star"></span>
            {!! link_to_route('users.menindex', '男性') !!}
        </button>

        
        </button>
    </div>
    </div>
    @endif
@endsection