@extends('layouts.app')

@section('content')
     
        @if (Auth::check())
                <table class="table table-striped">
            <thead>
                <tr>
                    <th>アイテム</th>
                    <th>相場</th>
                    <th>ストーリー</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
            <tr>
                <td>{{ $item->items }}</td>
                <td>￥{{ $item->price }}</td>
                <td>{{ $item->story }}</td>
                <td>@include('user_favorite.favorite_button', ['user' => $user])</td>
            </tr>
                @endforeach
            </tbody>
            </table>
                        
            @else
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>アイテム</th>
                    <th>相場</th>
                    <th>ストーリー</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
            <tr>
                button
                <td>{{ $item->items }}</td>
                <td>￥{{ $item->price }}</td>
                <td>{{ $item->story }}</td>
                
            </tr>
                @endforeach
            </tbody>
            </table>
                        
            @endif
                    

@endsection