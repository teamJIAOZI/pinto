@if (Auth::id() == $user->id)
    @if (Auth::user()->is_liking($user->id))
        {!! Form::open(['route' => ['user.unlike', $item->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.like', $item->id]]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-default btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif