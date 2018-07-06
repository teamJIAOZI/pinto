@extends('layouts.app')

@section('content')
     
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
                    

@endsection