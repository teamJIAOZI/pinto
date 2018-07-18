@extends('layouts.app')

@section('content')

@if ($items)
    <div class="row">
        @foreach ($items as $key => $item)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item->image_url }}" alt="" class="">
                        </div>
                        <div class="panel-body">
                            
        
                            <p class="text-center"><a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a></p>
                            <div class="buttons text-center">
                                @if (Auth::check())
                                    
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

@endsection