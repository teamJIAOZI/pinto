@extends('layouts.app')

@section('content')

@if ($items)
    <div class="row">
        <h1><?php print $keywords ?>の商品一覧</h1>
        
        @foreach ($items as $key => $item)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->image_url }}" alt="" class="">
                        </div>
                        <div class="panel-body1">
                          
                            <p class="item-title"><a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a></p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection