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
                            <img src="{{ $item->image_url }}" alt="" class="">
                        </div>
                        
                        <div class="panel-body1">
                            価格:￥{{$item->apiprice}}<br>
                        <p class="item-title"><a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a></p>
                            
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        
</itemsearch>
@endif

@endsection


