@extends('layouts.app')

@section('content')

@if ($items)

        <h1><?php print $keywords ?>の商品一覧</h1>
        <itemsearch>
        
        @foreach ($items as $key => $item)
        <div class="animal">
            <div class="item">
                <div class="panel panel-warning">
                        <div class="panel-heading text-center">
                            <a href="{{ $item->url }}">
                            <img src="{{ $item->image_url }}" alt="" class="">
                            </a>
                        </div>
                        
                        <div class="panel-body1">
                        <p align="center">価格:￥{{$item->apiprice}}</p>
                        <p class="item-title"><a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a></p>
                            
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        
</itemsearch>
@endif

@endsection


