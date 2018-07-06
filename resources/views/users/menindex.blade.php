@extends('layouts.app')

@section('content')
     
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>アイテム</th>
                    <th>ストーリー</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
            <tr>
                
                <td>{{ $item->items }}</td>
                <td>{{ $item->story }}</td>
            </tr>
                @endforeach
            </tbody>
        </table>        
                    

@endsection