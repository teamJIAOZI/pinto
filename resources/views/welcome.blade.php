@extends('layouts.app')

@section('content')
     @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else

    <div class="alert alert-danger" role="alert">
        <div class="text-center">
        {!! link_to_route('users.menindex', '男性') !!}
        
        {!! link_to_route('users.womenindex', '女性') !!}
        
        
        </div>
    </div>
    @endif
@endsection