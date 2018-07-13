@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-offset-4 col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}さんのお気に入り</h3>
                </div>
            </div>
        </aside>
        
        <div class="col-xs-12">
            @include('users.items', ['favorites' => $favorites , 'users' => $user,])
        </div>
    </div>
    
    
@endsection